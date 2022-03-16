<?php

namespace App\Http\Controllers;
use App\Mail\VerificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Patient;
use App\Models\MedicalHistory;
use Intervention\Image\Facades\Image;

class PatientController extends Controller
{
    //
    public function save_register(Request $request)
    {
        // VALIDATE REQUEST
        $request->validate([
            'username' => 'required|unique:mast_patient',
            'email' => 'required|email|unique:mast_patient',
            'password' => 'required',
        ]);

        $latestData = DB::table('mast_patient')
            ->latest('patientcode')
            ->first();

        $lastPatientCode = substr($latestData->patientcode, 4);

        $patientCode;
        // new patient code
        $addPatientCode = $lastPatientCode + 1;
        if ($addPatientCode != 1000) {
            $patientCode = 'P22-00' . $addPatientCode;
        } else {
            $patientCode = 'P23-00' . $addPatientCode;
        }

        // INSERT PATIENT DATA TO DATABASE
        $patient = new Patient();
        $patient->patientcode = $patientCode;
        $patient->username = $request->username;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $patient->isVerify = false;
        $save = $patient->save();

        // IF THE DATA STORED IN DATABASE
        if ($save) {
            $bodyMessage =
                'Hi ' .
                $request->username .
                '!! Were happy you signed up for Merita. To continue exploring Merita app. Please confirm your email.';

            $details = [
                'title' => 'Verification email from merita',
                'body' => $bodyMessage,
                'email' => $request->email,
            ];
            Mail::to($request->email)->send(new VerificationMail($details));
            return redirect('/verify-message');
        } else {
            return redirect('/login')->with(
                'fail',
                'Something went wrong. Try Again later.'
            );
        }
    }

    public function verify(Request $request)
    {
        $patient = Patient::where('email', '=', $_GET['verify_email'])->first();
        $patient->isVerify = true;
        $save = $patient->save();
        if ($save) {
            return redirect('/login')->with(
                'success',
                'Your Email Address was successfully verified.'
            );
        }
    }

    public function progress_info()
    {
        $agencies = DB::select('select * from mast_agency');
        $data = session()->all();
        $patient = Patient::where('id', '=', $data['patientId'])->first();
        $patientInfo = DB::table('mast_patientinfo')
            ->where('main_id', $data['patientId'])
            ->first();
        $medicalHistory = MedicalHistory::where(
            'main_id',
            '=',
            $data['patientId']
        )->first();

        $declarationForm = DB::table('declaration_form')
            ->where('main_id', $data['patientId'])
            ->first();

        if ($patientInfo) {
            return view(
                'patient-info',
                compact(
                    'patientInfo',
                    'medicalHistory',
                    'declarationForm',
                    'patient'
                )
            );
        } else {
            return view('progress-info', compact('agencies', 'data'));
        }
    }

    public function edit_patient_info()
    {
        $agencies = DB::select('select * from mast_agency');
        $data = session()->all();
        $patient = Patient::where('id', '=', $data['patientId'])->first();
        $patientInfo = DB::table('mast_patientinfo')
            ->where('main_id', $data['patientId'])
            ->first();
        $medicalHistory = MedicalHistory::where(
            'main_id',
            '=',
            $data['patientId']
        )->first();

        $declarationForm = DB::table('declaration_form')
            ->where('main_id', $data['patientId'])
            ->first();

        return view(
            'edit-progress-info',
            compact(
                'patientInfo',
                'medicalHistory',
                'declarationForm',
                'patient',
                'data',
                'agencies'
            )
        );
    }

    public function add_other_details(Request $request)
    {
        // UPDATE MAST_PATIENT TABLE
        $name =
            time() .
            '.' .
            explode(
                '/',
                explode(
                    ':',
                    substr(
                        $request->patient_image,
                        0,
                        strpos($request->patient_image, ';')
                    )
                )[1]
            )[1];

        Image::make($request->patient_image)->save(
            public_path('app-assets/images/profiles/') . $name
        );
        $mast_patient = Patient::where('id', '=', $request->main_id)->first();
        $mast_patient->patient_image = $name;
        $mast_patient->firstname = $request->firstName;
        $mast_patient->lastname = $request->lastName;
        $mast_patient->middlename = $request->middleName;
        $mast_patient->firstname = $request->firstName;
        $mast_patient->gender = $request->gender;
        $mast_patient->firstname = $request->firstName;
        $mast_patient->age = $request->age;
        $mast_patient->position_applied = $request->positionApplied;
        $mast_patient->created_date = $request->date;
        $mast_patient_save = $mast_patient->save();

        //INSERT OTHER DATA TO MAST_PATIENT INFO
        $save_patient_info = DB::insert(
            'insert into mast_patientinfo (main_id, patientcode, address, contactno, occupation, nationality, religion, maritalstatus, agency, agency_address, country_destination, medical_package, vessel, passportno, srbno, birthdate, birthplace) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )',
            [
                $request->main_id,
                $request->patientcode,
                $request->homeAdress,
                $request->phoneNumber,
                $request->occupation,
                $request->nationality,
                $request->religion,
                $request->civilStatus,
                $request->agencyName,
                $request->address_of_agency,
                $request->countryDestination,
                $request->medicalPackage,
                $request->vessel,
                $request->passportNo,
                $request->ssrb,
                $request->birthdate,
                $request->birthplace,
            ]
        );

        // INSERT MEDICAL HISTORY
        $medical_history = new MedicalHistory();
        $medical_history->main_id = $request->main_id;
        $medical_history->head_and_neck_injury = $request->head_and_neck_injury;
        $medical_history->frequent_headache = $request->frequent_head_ache;
        $medical_history->frequent_dizziness = $request->frequent_dizziness;
        $medical_history->fainting_spells_fits = $request->fainting_spells;
        $medical_history->seizures = $request->seizures;
        $medical_history->other_neurological_disorders =
            $request->other_neurological_disorders;
        $medical_history->insomia_or_sleep_disorder =
            $request->insomia_or_sleep_disorder;
        $medical_history->depression_other_mental_disorder =
            $request->depression_or_other_mental_disorder;
        $medical_history->eye_problems_or_error_refraction =
            $request->eye_problems_or_error_of_refraction;
        $medical_history->deafness_or_ear_disorder =
            $request->deafness_or_ear_disorder;
        $medical_history->nose_or_throat_disorder =
            $request->nose_or_throat_disorder;
        $medical_history->tuberculosis = $request->tuberculosis;
        $medical_history->signed_off_as_sick = $request->signed_off_as_sick;
        $medical_history->repatriation_form_ship =
            $request->repatriation_form_ship;
        $medical_history->declared_unfit_for_sea_duty =
            $request->declared_unfit_for_sea_duty;
        $medical_history->previous_hospitalization =
            $request->previous_hospitalization;
        $medical_history->feel_healthy = $request->feel_healthy;
        $medical_history->other_lung_disorder = $request->other_lung_disorder;
        $medical_history->high_blood_pressure = $request->high_blood_pressure;
        $medical_history->heart_disease_or_vascular =
            $request->heart_disease_or_vascular;
        $medical_history->chest_pain = $request->chest_pain;
        $medical_history->rheumatic_fever = $request->rheumatic_fever;
        $medical_history->diabetes_mellitus = $request->diabetes_mellitus;
        $medical_history->endocrine_disorders = $request->endocrine_disorders;
        $medical_history->cancer_or_tumor = $request->cancer_or_tumor;
        $medical_history->blood_disorder = $request->blood_disorder;
        $medical_history->stomach_pain_or_gastritis =
            $request->stomach_pain_or_gastritis;
        $medical_history->ulcer = $request->ulcer;
        $medical_history->other_abdominal_disorder =
            $request->other_abdominal_disorder;
        $medical_history->medical_certificate_restricted =
            $request->medical_certificate_restricted;
        $medical_history->medical_certificate_revoked =
            $request->medical_certificate_revoked;
        $medical_history->aware_of_any_medical_problems =
            $request->aware_of_medical_problems;
        $medical_history->aware_of_any_disease_or_illness =
            $request->aware_of_any_disease_or_illness;
        $medical_history->operations = $request->operation;
        $medical_history->gynecological_disorder =
            $request->gynecological_disorder;
        $medical_history->last_menstrual_period =
            $request->last_menstrual_period;
        $medical_history->pregnancy = $request->pregnancy;
        $medical_history->kidney_or_bladder_disorder =
            $request->kidney_or_bladder_disorder;
        $medical_history->back_injury_or_joint_pain =
            $request->back_injury_or_joint_pain;
        $medical_history->arthritis = $request->arthritis;
        $medical_history->genetic_heredity_or_familial_dis =
            $request->genetic_or_heredity_or_familial_dis;
        $medical_history->sexually_transmitted_disease =
            $request->sexually_transmitted_disease;
        $medical_history->tropical_disease_or_malaria =
            $request->tropical_disease;
        $medical_history->thypoid_fever = $request->thypoid_fever;
        $medical_history->schistosomiasis = $request->schistosomiasis;
        $medical_history->asthma = $request->asthma;
        $medical_history->allergies = $request->allergies;
        $medical_history->smoking = $request->smoking;
        $medical_history->taking_medication_for_hypertension =
            $request->taking_medication_for_hypertension;
        $medical_history->taking_medication_for_diabetes =
            $request->taking_medication_for_diabetes;
        $medical_history->vaccination = $request->vaccination;
        $save_medical_history = $medical_history->save();

        // INSERT DATA TO DECLARATION FORM TABLE
        $save_declaration_form = DB::insert(
            'insert into declaration_form (main_id, travelled_abroad_recently, area_visited, contact_with_people_being_infected__suspected_diagnose_with_cov, travel_arrival, travel_return, relationship_with_last_people, last_contact_date, fever, cough, shortness_of_breath, persistent_pain_in_chess) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->main_id,
                $request->travelled_abroad_recently,
                $request->area_visited,
                $request->contact_with_people_being_infected_suspected_or_diagnosed_with_covid,
                $request->travel_arrival_date,
                $request->travel_return_date,
                $request->relationship_last_contact_people,
                $request->last_contact_date,
                $request->fever,
                $request->cough,
                $request->shortness_of_breath,
                $request->persistent_pain_in_the_chest,
            ]
        );

        if (
            $mast_patient_save &&
            $save_patient_info &&
            $save_medical_history &&
            $save_declaration_form
        ) {
            return back();
        }
    }

    public function update_patient_info(Request $request)
    {
        $data = session()->all();
        // UPDATE MAST_PATIENT TABLE
        $mast_patient = Patient::where('id', '=', $request->main_id)->first();
        $mast_patient->firstname = $request->firstName;
        $mast_patient->lastname = $request->lastName;
        $mast_patient->middlename = $request->middleName;
        $mast_patient->firstname = $request->firstName;
        $mast_patient->gender = $request->gender;
        $mast_patient->firstname = $request->firstName;
        $mast_patient->age = $request->age;
        $mast_patient->position_applied = $request->positionApplied;
        $mast_patient->created_date = $request->date;
        $mast_patient_save = $mast_patient->save();

        // UPDATE MAST PATIENT INFO
        $save_patient_info = DB::update(
            'update mast_patientinfo set address = ?, contactno = ?, occupation = ?, nationality = ?, religion = ?, religion_others = ?, maritalstatus = ?, agency = ?, agency_address = ?, country_destination = ?, medical_package = ?, vessel = ?, passportno = ?, srbno = ?, birthdate = ?, birthplace = ?',
            [
                $request->homeAdress,
                $request->phoneNumber,
                $request->occupation,
                $request->nationality,
                $request->religion,
                $request->civilStatus,
                $request->agencyName,
                $request->address_of_agency,
                $request->countryDestination,
                $request->medicalPackage,
                $request->vessel,
                $request->passportNo,
                $request->ssrb,
                $request->birthdate,
                $request->birthplace,
                $request->main_id,
            ]
        );

        //UPDATE MEDICAL HISTORY
        $medical_history = MedicalHistory::where(
            'main_id',
            '=',
            $data['patientId']
        )->first();
        $medical_history->head_and_neck_injury = $request->head_and_neck_injury;
        $medical_history->frequent_headache = $request->frequent_head_ache;
        $medical_history->frequent_dizziness = $request->frequent_dizziness;
        $medical_history->fainting_spells_fits = $request->fainting_spells;
        $medical_history->seizures = $request->seizures;
        $medical_history->other_neurological_disorders =
            $request->other_neurological_disorders;
        $medical_history->insomia_or_sleep_disorder =
            $request->insomia_or_sleep_disorder;
        $medical_history->depression_other_mental_disorder =
            $request->depression_or_other_mental_disorder;
        $medical_history->eye_problems_or_error_refraction =
            $request->eye_problems_or_error_of_refraction;
        $medical_history->deafness_or_ear_disorder =
            $request->deafness_or_ear_disorder;
        $medical_history->nose_or_throat_disorder =
            $request->nose_or_throat_disorder;
        $medical_history->tuberculosis = $request->tuberculosis;
        $medical_history->signed_off_as_sick = $request->signed_off_as_sick;
        $medical_history->repatriation_form_ship =
            $request->repatriation_form_ship;
        $medical_history->declared_unfit_for_sea_duty =
            $request->declared_unfit_for_sea_duty;
        $medical_history->previous_hospitalization =
            $request->previous_hospitalization;
        $medical_history->feel_healthy = $request->feel_healthy;
        $medical_history->other_lung_disorder = $request->other_lung_disorder;
        $medical_history->high_blood_pressure = $request->high_blood_pressure;
        $medical_history->heart_disease_or_vascular =
            $request->heart_disease_or_vascular;
        $medical_history->chest_pain = $request->chest_pain;
        $medical_history->rheumatic_fever = $request->rheumatic_fever;
        $medical_history->diabetes_mellitus = $request->diabetes_mellitus;
        $medical_history->endocrine_disorders = $request->endocrine_disorders;
        $medical_history->cancer_or_tumor = $request->cancer_or_tumor;
        $medical_history->blood_disorder = $request->blood_disorder;
        $medical_history->stomach_pain_or_gastritis =
            $request->stomach_pain_or_gastritis;
        $medical_history->ulcer = $request->ulcer;
        $medical_history->other_abdominal_disorder =
            $request->other_abdominal_disorder;
        $medical_history->medical_certificate_restricted =
            $request->medical_certificate_restricted;
        $medical_history->medical_certificate_revoked =
            $request->medical_certificate_revoked;
        $medical_history->aware_of_any_medical_problems =
            $request->aware_of_medical_problems;
        $medical_history->aware_of_any_disease_or_illness =
            $request->aware_of_any_disease_or_illness;
        $medical_history->operations = $request->operation;
        $medical_history->gynecological_disorder =
            $request->gynecological_disorder;
        $medical_history->last_menstrual_period =
            $request->last_menstrual_period;
        $medical_history->pregnancy = $request->pregnancy;
        $medical_history->kidney_or_bladder_disorder =
            $request->kidney_or_bladder_disorder;
        $medical_history->back_injury_or_joint_pain =
            $request->back_injury_or_joint_pain;
        $medical_history->arthritis = $request->arthritis;
        $medical_history->genetic_heredity_or_familial_dis =
            $request->genetic_or_heredity_or_familial_dis;
        $medical_history->sexually_transmitted_disease =
            $request->sexually_transmitted_disease;
        $medical_history->tropical_disease_or_malaria =
            $request->tropical_disease;
        $medical_history->thypoid_fever = $request->thypoid_fever;
        $medical_history->schistosomiasis = $request->schistosomiasis;
        $medical_history->asthma = $request->asthma;
        $medical_history->allergies = $request->allergies;
        $medical_history->smoking = $request->smoking;
        $medical_history->taking_medication_for_hypertension =
            $request->taking_medication_for_hypertension;
        $medical_history->taking_medication_for_diabetes =
            $request->taking_medication_for_diabetes;
        $medical_history->vaccination = $request->vaccination;
        $save_medical_history = $medical_history->save();

        // UPDATE DECLARATION FORM
        $save_declaration_form = DB::update(
            'update declaration_form set travelled_abroad_recently = ?, area_visited = ?, contact_with_people_being_infected__suspected_diagnose_with_cov = ?, travel_arrival = ?, travel_return = ?, relationship_with_last_people = ?, last_contact_date = ?, fever = ?, cough = ?, shortness_of_breath = ?, persistent_pain_in_chess = ?',
            [
                $request->travelled_abroad_recently,
                $request->area_visited,
                $request->contact_with_people_being_infected_suspected_or_diagnosed_with_covid,
                $request->travel_arrival_date,
                $request->travel_return_date,
                $request->relationship_last_contact_people,
                $request->last_contact_date,
                $request->fever,
                $request->cough,
                $request->shortness_of_breath,
                $request->persistent_pain_in_the_chest,
                $request->main_id,
            ]
        );
        return redirect('/progress-patient-info');
    }
}