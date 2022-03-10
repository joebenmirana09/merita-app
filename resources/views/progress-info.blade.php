@extends('layouts.app')

@section('content')


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Form wizard with step validation section start -->
            <section id="validation">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form action="#" class="steps-validation wizard-circle">
                                        <!-- Step 1 -->
                                        <h6>Personal Info</h6>
                                        <!-- <hr> -->
                                        <fieldset>
                                            <h4 class="form-section"><i class="feather icon-user"></i> Personal
                                                Info
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstName3">
                                                            Name of Agency :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="agencyName">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastName3">
                                                            Country of Destination :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="countryDestination">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstName3">
                                                            First Name :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="firstName3"
                                                            name="firstName">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastName3">
                                                            Last Name :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="lastName3"
                                                            name="lastName">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastName3">
                                                            Middle Name :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="middleName">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Home Address (Street, Municipality) :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="homeAdress">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Age :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="number" class="form-control" name="age">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Civil Status :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="civilStatus">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Position Applied for :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="positionApplied">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Vessel :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="vessel">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Passport :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="passportNo">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            SSRB # :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="ssrb">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Medical Package Test :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="medicalPackage">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Agency / Company :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="agency">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailAddress5">
                                                            Date :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="date" class="form-control" name="date" value="<?php echo date(
                                                            'Y-m-d'
                                                        ); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h6>Medical History</h6>
                                        <fieldset>
                                            <h4 class="form-section"><i class="feather icon-user"></i> Medical
                                                History
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <table class="table table-responsive table-striped medical-table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Head and Neck Injury</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="head_and_neck_injury"
                                                                                id="head_and_neck_injury1">
                                                                            <label class="custom-control-label"
                                                                                for="head_and_neck_injury1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="head_and_neck_injury"
                                                                                id="head_and_neck_injury2">
                                                                            <label class="custom-control-label"
                                                                                for="head_and_neck_injury2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frequent Headache</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_head_ache"
                                                                                id="frequent_head_ache1">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_head_ache1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_head_ache"
                                                                                id="frequent_head_ache2">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_head_ache2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frequent Dizziness</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_dizziness"
                                                                                id="frequent_dizziness1">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_dizziness1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_dizziness"
                                                                                id="frequent_dizziness2">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_dizziness2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Fainting Spells, Fits</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="fainting_spells"
                                                                                id="fainting_spells1">
                                                                            <label class="custom-control-label"
                                                                                for="fainting_spells1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="fainting_spells"
                                                                                id="fainting_spells2">
                                                                            <label class="custom-control-label"
                                                                                for="fainting_spells2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Seizures</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="seizures" id="seizures1">
                                                                            <label class="custom-control-label"
                                                                                for="seizures1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="seizures" id="seizures2">
                                                                            <label class="custom-control-label"
                                                                                for="seizures2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Other neurological disorders</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="other_neurological_disorders"
                                                                                id="other_neurological_disorders1">
                                                                            <label class="custom-control-label"
                                                                                for="other_neurological_disorders1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="other_neurological_disorders"
                                                                                id="other_neurological_disorders2">
                                                                            <label class="custom-control-label"
                                                                                for="other_neurological_disorders2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Insomia or Sleep disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="insomia_or_sleep_disorder"
                                                                                id="insomia_or_sleep_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="insomia_or_sleep_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="insomia_or_sleep_disorder"
                                                                                id="insomia_or_sleep_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="insomia_or_sleep_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Depression, other mental disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="depression_or_other_mental_disorder"
                                                                                id="depression_or_other_mental_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="depression_or_other_mental_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="depression_or_other_mental_disorder"
                                                                                id="depression_or_other_mental_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="depression_or_other_mental_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Eye problems / Error of refraction</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="eye_problems_or_error_of_refraction"
                                                                                id="eye_problems_or_error_of_refraction1">
                                                                            <label class="custom-control-label"
                                                                                for="eye_problems_or_error_of_refraction1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="eye_problems_or_error_of_refraction"
                                                                                id="eye_problems_or_error_of_refraction2">
                                                                            <label class="custom-control-label"
                                                                                for="eye_problems_or_error_of_refraction2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Deafness / Ear disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="deafness_or_ear_disorder"
                                                                                id="deafness_or_ear_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="deafness_or_ear_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="deafness_or_ear_disorder"
                                                                                id="deafness_or_ear_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="deafness_or_ear_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nose or Throat disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="nose_or_throat_disorder"
                                                                                id="nose_or_throat_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="nose_or_throat_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="nose_or_throat_disorder"
                                                                                id="nose_or_throat_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="nose_or_throat_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tuberculosis</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="tuberculosis" id="tuberculosis1">
                                                                            <label class="custom-control-label"
                                                                                for="tuberculosis1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="tuberculosis" id="tuberculosis2">
                                                                            <label class="custom-control-label"
                                                                                for="tuberculosis2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Signed off as sick</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="signed_off_as_sick"
                                                                                id="signed_off_as_sick1">
                                                                            <label class="custom-control-label"
                                                                                for="signed_off_as_sick1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="signed_off_as_sick"
                                                                                id="signed_off_as_sick2">
                                                                            <label class="custom-control-label"
                                                                                for="signed_off_as_sick2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Repatriation form ship</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="repatriation_form_ship"
                                                                                id="repatriation_form_ship1">
                                                                            <label class="custom-control-label"
                                                                                for="repatriation_form_ship1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="repatriation_form_ship"
                                                                                id="repatriation_form_ship2">
                                                                            <label class="custom-control-label"
                                                                                for="repatriation_form_ship2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Declared Unfit for sea duty</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="declared_unfit_for_sea_duty"
                                                                                id="declared_unfit_for_sea_duty1">
                                                                            <label class="custom-control-label"
                                                                                for="declared_unfit_for_sea_duty1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="declared_unfit_for_sea_duty"
                                                                                id="declared_unfit_for_sea_duty2">
                                                                            <label class="custom-control-label"
                                                                                for="declared_unfit_for_sea_duty2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Previous Hospitalization</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="previous_hospitalization"
                                                                                id="previous_hospitalization1">
                                                                            <label class="custom-control-label"
                                                                                for="previous_hospitalization1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="previous_hospitalization"
                                                                                id="previous_hospitalization2">
                                                                            <label class="custom-control-label"
                                                                                for="previous_hospitalization2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <th>Do you feel healthy / Fit to perform
                                                                    duties of designed position</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="feel_healthy" id="feel_healthy1">
                                                                            <label class="custom-control-label"
                                                                                for="feel_healthy1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="feel_healthy" id="feel_healthy2">
                                                                            <label class="custom-control-label"
                                                                                for="feel_healthy2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr> -->
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table
                                                        class="table table-responsive table-striped col-md-12  medical-table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Head and Neck Injury</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="head_and_neck_injury"
                                                                                id="head_and_neck_injury1">
                                                                            <label class="custom-control-label"
                                                                                for="head_and_neck_injury1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="head_and_neck_injury"
                                                                                id="head_and_neck_injury2">
                                                                            <label class="custom-control-label"
                                                                                for="head_and_neck_injury2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frequent Headache</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_head_ache"
                                                                                id="frequent_head_ache1">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_head_ache1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_head_ache"
                                                                                id="frequent_head_ache2">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_head_ache2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frequent Dizziness</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_dizziness"
                                                                                id="frequent_dizziness1">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_dizziness1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_dizziness"
                                                                                id="frequent_dizziness2">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_dizziness2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Fainting Spells, Fits</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="fainting_spells"
                                                                                id="fainting_spells1">
                                                                            <label class="custom-control-label"
                                                                                for="fainting_spells1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="fainting_spells"
                                                                                id="fainting_spells2">
                                                                            <label class="custom-control-label"
                                                                                for="fainting_spells2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Seizures</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="seizures" id="seizures1">
                                                                            <label class="custom-control-label"
                                                                                for="seizures1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="seizures" id="seizures2">
                                                                            <label class="custom-control-label"
                                                                                for="seizures2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Other neurological disorders</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="other_neurological_disorders"
                                                                                id="other_neurological_disorders1">
                                                                            <label class="custom-control-label"
                                                                                for="other_neurological_disorders1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="other_neurological_disorders"
                                                                                id="other_neurological_disorders2">
                                                                            <label class="custom-control-label"
                                                                                for="other_neurological_disorders2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Insomia or Sleep disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="insomia_or_sleep_disorder"
                                                                                id="insomia_or_sleep_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="insomia_or_sleep_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="insomia_or_sleep_disorder"
                                                                                id="insomia_or_sleep_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="insomia_or_sleep_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Depression, other mental disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="depression_or_other_mental_disorder"
                                                                                id="depression_or_other_mental_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="depression_or_other_mental_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="depression_or_other_mental_disorder"
                                                                                id="depression_or_other_mental_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="depression_or_other_mental_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Eye problems / Error of refraction</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="eye_problems_or_error_of_refraction"
                                                                                id="eye_problems_or_error_of_refraction1">
                                                                            <label class="custom-control-label"
                                                                                for="eye_problems_or_error_of_refraction1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="eye_problems_or_error_of_refraction"
                                                                                id="eye_problems_or_error_of_refraction2">
                                                                            <label class="custom-control-label"
                                                                                for="eye_problems_or_error_of_refraction2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Deafness / Ear disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="deafness_or_ear_disorder"
                                                                                id="deafness_or_ear_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="deafness_or_ear_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="deafness_or_ear_disorder"
                                                                                id="deafness_or_ear_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="deafness_or_ear_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nose or Throat disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="nose_or_throat_disorder"
                                                                                id="nose_or_throat_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="nose_or_throat_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="nose_or_throat_disorder"
                                                                                id="nose_or_throat_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="nose_or_throat_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tuberculosis</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="tuberculosis" id="tuberculosis1">
                                                                            <label class="custom-control-label"
                                                                                for="tuberculosis1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="tuberculosis" id="tuberculosis2">
                                                                            <label class="custom-control-label"
                                                                                for="tuberculosis2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Signed off as sick</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="signed_off_as_sick"
                                                                                id="signed_off_as_sick1">
                                                                            <label class="custom-control-label"
                                                                                for="signed_off_as_sick1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="signed_off_as_sick"
                                                                                id="signed_off_as_sick2">
                                                                            <label class="custom-control-label"
                                                                                for="signed_off_as_sick2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Repatriation form ship</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="repatriation_form_ship"
                                                                                id="repatriation_form_ship1">
                                                                            <label class="custom-control-label"
                                                                                for="repatriation_form_ship1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="repatriation_form_ship"
                                                                                id="repatriation_form_ship2">
                                                                            <label class="custom-control-label"
                                                                                for="repatriation_form_ship2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Declared Unfit for sea duty</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="declared_unfit_for_sea_duty"
                                                                                id="declared_unfit_for_sea_duty1">
                                                                            <label class="custom-control-label"
                                                                                for="declared_unfit_for_sea_duty1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="declared_unfit_for_sea_duty"
                                                                                id="declared_unfit_for_sea_duty2">
                                                                            <label class="custom-control-label"
                                                                                for="declared_unfit_for_sea_duty2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Previous Hospitalization</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="previous_hospitalization"
                                                                                id="previous_hospitalization1">
                                                                            <label class="custom-control-label"
                                                                                for="previous_hospitalization1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="previous_hospitalization"
                                                                                id="previous_hospitalization2">
                                                                            <label class="custom-control-label"
                                                                                for="previous_hospitalization2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <th>Do you feel healthy / Fit to perform
                                                                    duties of designed position</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="feel_healthy" id="feel_healthy1">
                                                                            <label class="custom-control-label"
                                                                                for="feel_healthy1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="feel_healthy" id="feel_healthy2">
                                                                            <label class="custom-control-label"
                                                                                for="feel_healthy2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr> -->
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <table
                                                        class="table table-responsive table-striped col-md-12 medical-table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Head and Neck Injury</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="head_and_neck_injury"
                                                                                id="head_and_neck_injury1">
                                                                            <label class="custom-control-label"
                                                                                for="head_and_neck_injury1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="head_and_neck_injury"
                                                                                id="head_and_neck_injury2">
                                                                            <label class="custom-control-label"
                                                                                for="head_and_neck_injury2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frequent Headache</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_head_ache"
                                                                                id="frequent_head_ache1">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_head_ache1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_head_ache"
                                                                                id="frequent_head_ache2">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_head_ache2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Frequent Dizziness</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_dizziness"
                                                                                id="frequent_dizziness1">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_dizziness1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="frequent_dizziness"
                                                                                id="frequent_dizziness2">
                                                                            <label class="custom-control-label"
                                                                                for="frequent_dizziness2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Fainting Spells, Fits</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="fainting_spells"
                                                                                id="fainting_spells1">
                                                                            <label class="custom-control-label"
                                                                                for="fainting_spells1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="fainting_spells"
                                                                                id="fainting_spells2">
                                                                            <label class="custom-control-label"
                                                                                for="fainting_spells2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Seizures</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="seizures" id="seizures1">
                                                                            <label class="custom-control-label"
                                                                                for="seizures1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="seizures" id="seizures2">
                                                                            <label class="custom-control-label"
                                                                                for="seizures2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Other neurological disorders</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="other_neurological_disorders"
                                                                                id="other_neurological_disorders1">
                                                                            <label class="custom-control-label"
                                                                                for="other_neurological_disorders1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="other_neurological_disorders"
                                                                                id="other_neurological_disorders2">
                                                                            <label class="custom-control-label"
                                                                                for="other_neurological_disorders2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Insomia or Sleep disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="insomia_or_sleep_disorder"
                                                                                id="insomia_or_sleep_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="insomia_or_sleep_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="insomia_or_sleep_disorder"
                                                                                id="insomia_or_sleep_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="insomia_or_sleep_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Depression, other mental disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="depression_or_other_mental_disorder"
                                                                                id="depression_or_other_mental_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="depression_or_other_mental_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="depression_or_other_mental_disorder"
                                                                                id="depression_or_other_mental_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="depression_or_other_mental_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Eye problems / Error of refraction</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="eye_problems_or_error_of_refraction"
                                                                                id="eye_problems_or_error_of_refraction1">
                                                                            <label class="custom-control-label"
                                                                                for="eye_problems_or_error_of_refraction1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="eye_problems_or_error_of_refraction"
                                                                                id="eye_problems_or_error_of_refraction2">
                                                                            <label class="custom-control-label"
                                                                                for="eye_problems_or_error_of_refraction2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Deafness / Ear disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="deafness_or_ear_disorder"
                                                                                id="deafness_or_ear_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="deafness_or_ear_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="deafness_or_ear_disorder"
                                                                                id="deafness_or_ear_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="deafness_or_ear_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Nose or Throat disorder</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="nose_or_throat_disorder"
                                                                                id="nose_or_throat_disorder1">
                                                                            <label class="custom-control-label"
                                                                                for="nose_or_throat_disorder1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="nose_or_throat_disorder"
                                                                                id="nose_or_throat_disorder2">
                                                                            <label class="custom-control-label"
                                                                                for="nose_or_throat_disorder2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tuberculosis</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="tuberculosis" id="tuberculosis1">
                                                                            <label class="custom-control-label"
                                                                                for="tuberculosis1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="tuberculosis" id="tuberculosis2">
                                                                            <label class="custom-control-label"
                                                                                for="tuberculosis2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Signed off as sick</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="signed_off_as_sick"
                                                                                id="signed_off_as_sick1">
                                                                            <label class="custom-control-label"
                                                                                for="signed_off_as_sick1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="signed_off_as_sick"
                                                                                id="signed_off_as_sick2">
                                                                            <label class="custom-control-label"
                                                                                for="signed_off_as_sick2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Repatriation form ship</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="repatriation_form_ship"
                                                                                id="repatriation_form_ship1">
                                                                            <label class="custom-control-label"
                                                                                for="repatriation_form_ship1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="repatriation_form_ship"
                                                                                id="repatriation_form_ship2">
                                                                            <label class="custom-control-label"
                                                                                for="repatriation_form_ship2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Declared Unfit for sea duty</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="declared_unfit_for_sea_duty"
                                                                                id="declared_unfit_for_sea_duty1">
                                                                            <label class="custom-control-label"
                                                                                for="declared_unfit_for_sea_duty1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="declared_unfit_for_sea_duty"
                                                                                id="declared_unfit_for_sea_duty2">
                                                                            <label class="custom-control-label"
                                                                                for="declared_unfit_for_sea_duty2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Previous Hospitalization</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="previous_hospitalization"
                                                                                id="previous_hospitalization1">
                                                                            <label class="custom-control-label"
                                                                                for="previous_hospitalization1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="previous_hospitalization"
                                                                                id="previous_hospitalization2">
                                                                            <label class="custom-control-label"
                                                                                for="previous_hospitalization2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <th>Do you feel healthy / Fit to perform
                                                                    duties of designed position</th>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="feel_healthy" id="feel_healthy1">
                                                                            <label class="custom-control-label"
                                                                                for="feel_healthy1">YES</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                                <td>
                                                                    <fieldset>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="feel_healthy" id="feel_healthy2">
                                                                            <label class="custom-control-label"
                                                                                for="feel_healthy2">NO</label>
                                                                        </div>
                                                                    </fieldset>
                                                                </td>
                                                            </tr> -->
                                                    </table>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h6>Step 3</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventName3">
                                                            Event Name :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required" id="eventName3"
                                                            name="eventName">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventType3">
                                                            Event Type :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required"
                                                            id="eventType3" name="eventType">
                                                            <option value="Banquet">Banquet</option>
                                                            <option value="Fund Raiser">Fund Raiser</option>
                                                            <option value="Dinner Party">Dinner Party</option>
                                                            <option value="Wedding">Wedding</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation3">Event Location :</label>
                                                        <select class="custom-select form-control" id="eventLocation3"
                                                            name="eventLocation">
                                                            <option value="">Select City</option>
                                                            <option value="Amsterdam">Amsterdam</option>
                                                            <option value="Berlin">Berlin</option>
                                                            <option value="Frankfurt">Frankfurt</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventDate">
                                                            Event Date - Time :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <div class='input-group'>
                                                            <input type='text' class="form-control datetime required"
                                                                id="eventDate" name="eventDate" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <span class="feather icon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventStatus3">
                                                            Event Status :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required"
                                                            id="eventStatus3" name="eventStatus">
                                                            <option value="Planning">Planning</option>
                                                            <option value="In Progress">In Progress</option>
                                                            <option value="Finished">Finished</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Requirements :</label>
                                                        <div class="c-inputs-stacked">
                                                            <div class="d-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="status3"
                                                                    class="custom-control-input" id="staffing3">
                                                                <label class="custom-control-label"
                                                                    for="staffing3">Staffing</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="status3"
                                                                    class="custom-control-input" id="catering3">
                                                                <label class="custom-control-label"
                                                                    for="catering3">Catering</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 4 -->
                                        <h6>Step 4</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="meetingName3">
                                                            Name of Meeting :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required"
                                                            id="meetingName3" name="meetingName">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="meetingLocation3">
                                                            Location :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control required"
                                                            id="meetingLocation3" name="meetingLocation">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="participants3">Names of Participants</label>
                                                        <textarea name="participants" id="participants3" rows="4"
                                                            class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="decisions3">Decisions Reached</label>
                                                        <textarea name="decisions" id="decisions3" rows="4"
                                                            class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Agenda Items :</label>
                                                        <div class="c-inputs-stacked">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="agenda3"
                                                                    class="custom-control-input" id="item31">
                                                                <label class="custom-control-label" for="item31">1st
                                                                    item</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="agenda3"
                                                                    class="custom-control-input" id="item32">
                                                                <label class="custom-control-label" for="item32">2nd
                                                                    item</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="agenda3"
                                                                    class="custom-control-input" id="item33">
                                                                <label class="custom-control-label" for="item33">3rd
                                                                    item</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="agenda3"
                                                                    class="custom-control-input" id="item34">
                                                                <label class="custom-control-label" for="item34">4th
                                                                    item</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="agenda3"
                                                                    class="custom-control-input" id="item35">
                                                                <label class="custom-control-label" for="item35">5th
                                                                    item</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Form wizard with step validation section end -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection