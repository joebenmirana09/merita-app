<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Agency;
use App\Models\Patient;

class UserController extends Controller
{
    // RETURN TO LOGIN PAGE
    public function index()
    {
        return view('login');
    }

    public function check(Request $request)
    {
        //VALIDATE REQUEST
        $request->validate([
            'password' => 'required',
        ]);

        $userInfo = User::where('username', '=', $request->username)->first();
        $agencyInfo = Agency::where(
            'agencyname',
            '=',
            $request->username
        )->first();
        $patientInfo = Patient::where(
            'email',
            '=',
            $request->username
        )->first();

        // IF THE USERNAME IS NOT ACCESS IN EMPLOYEE TABLE
        if (!$userInfo) {
            // IF THE AGENCY NAME IS NOT ACCESS IN AGENCY TABLE
            if (!$agencyInfo) {
                // IF THE USERNAME IS NOT ACCESS IN PATIENT TABLE
                if (!$patientInfo) {
                    return back()->with('fail', 'Invalid Email');
                } else {
                    //check if the email is verify
                    //check password
                    if (
                        Hash::check($request->password, $patientInfo->password)
                    ) {
                        if ($patientInfo->isVerify) {
                            $request->session()->put([
                                'classification' => 'patient',
                                'patientCode' => $patientInfo->patientcode,
                                'patientId' => $patientInfo->id,
                            ]);
                            $data = session()->all();
                            return redirect('/dashboard');
                        } else {
                            return back()->with(
                                'fail',
                                'Please verify your email address to continue.'
                            );
                        }
                    } else {
                        return back()->with('fail', 'Invalid Email');
                    }
                }
            } else {
                // check password
                if (Hash::check($request->password, $agencyInfo->password)) {
                    $request->session()->put([
                        'classification' => 'agency',
                        'agencyCode' => $agencyInfo->agencycode,
                        'patientId' => $agencyInfo->id,
                    ]);
                    return redirect('/dashboard');
                } else {
                    return back()->with('fail', 'Invalid Username or Password');
                }
            }
        } else {
            // check password
            if (Hash::check($request->password, $userInfo->password)) {
                if ($userInfo->username == 'ADMIN') {
                    $request->session()->put([
                        'classification' => 'admin',
                        'username' => $userInfo->username,
                        'position' => $userInfo->position,
                        'dept_id' => $userInfo->dept_id,
                        'lastname' => $userInfo->lastname,
                        'firstname' => $userInfo->firstname,
                        'employeeCode' => $userInfo->employeecode,
                    ]);
                    return redirect('/dashboard');
                } else {
                    $request->session()->put([
                        'classification' => 'employee',
                        'username' => $userInfo->username,
                        'position' => $userInfo->position,
                        'dept_id' => $userInfo->dept_id,
                        'lastname' => $userInfo->lastname,
                        'firstname' => $userInfo->firstname,
                        'employeeCode' => $userInfo->employeecode,
                    ]);
                    return redirect('/dashboard');
                }
            } else {
                return back()->with('fail', 'Invalid Username or Password');
            }
        }
    }

    // RETURN TO REGISTER PAGE
    public function register()
    {
        return view('register');
    }

    // LOGOUT
    public function logout()
    {
        if (session()->has(['classification'])) {
            session()->flush();
            return redirect('/login');
        }
    }
}