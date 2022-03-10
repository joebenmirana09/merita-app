<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;

class PatientController extends Controller
{
    //
    public function save_register(Request $request)
    {
        // VALIDATE REQUEST
        $request->validate([
            'username' => 'required',
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
        $save = $patient->save();

        // IF THE DATA STORED IN DATABASE
        if ($save) {
            return redirect('/login')->with(
                'success',
                'New Patient has been successfully added.'
            );
        } else {
            return redirect('/login')->with(
                'fail',
                'Something went wrong. Try Again later.'
            );
        }
    }
}