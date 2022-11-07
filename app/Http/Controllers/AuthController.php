<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User\Wallet;

use Illuminate\Support\Str;
use App\Traits\ApiResponser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiResponser;
    
    /*
    |=================================================================
    | Login New User -- Simple Login
    |=================================================================
    */
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email'    => 'required|string|email',
                'password' => 'required|string'
            ]);
    
            if($validator->fails()){
                return response()->json([
                    'status' => 100,
                    'errors' => $validator->errors()->all()
                ]);
            }
    
            if (!Auth::attempt($request->all())) {
                return response()->json([
                    'status'    => 100,
                    'errors'    => ['These Credentials do not match our record'],
                ]);
            }
            
            $user = User::where('id', Auth::id())
                        ->first();
            // GET USER TOKEN
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'status'  => 200,
                'message' => "User is login  successfully",
                'token'   => $token,
                'user'    => $user
            ]);

        } 
        catch (\Exception $e) {

            return response()->json([
                'status'    => 100,
                'errors'    => ['Something went wrong'],
                'exceptions'=> $e->getMessage(),
            ]);
        }
    }


    /*
    |=================================================================
    | Register New User -- Simple Signup
    |=================================================================
    */
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email'        => 'required|string|email|unique:users,email|max:100',
                'country_code' => 'required|string|max:5',
                'mobile_no'    => 'required|integer',
                'password'     => 'required|string|min:8|confirmed'
            ]);
    
            if($validator->fails()){
                return response()->json([
                    'status' => 100,
                    'errors' => $validator->errors()->all()
                ]);
            }

            // Check For Duplicate Mobile No.
            $is_duplicate_mobile = User::where([
                                            'country_code' => $request->country_code, 
                                            'mobile_no' => $request->mobile
                                        ])->first();

            if ($is_duplicate_mobile) {
                return response()->json([
                    'status' => 100,
                    'errors' => ["The mobile no has already been taken"]
                ]);
            }
    
            $formData = [
                'name'         => $request->name,
                'email'        => $request->email,
                'country_code' => $request->country_code,
                'mobile_no'    => $request->mobile_no,
                'gender'       => $request->gender,
                'date_of_birth'=> $request->date_of_birth,
                'password'     => bcrypt($request->password)
            ];
    
            $user = User::create($formData);
    
            $user = User::where('id', $user->id)
                        ->first();

            // GET USER TOKEN
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'status' => 200,
                'message' => 'User account created successfully',
                'token'   => $token,
                'user'    => $user,
            ]);
        } 
        catch (\Exception $e) {

            return response()->json([
                'status'    => 100,
                'errors'    => ['Something went wrong'],
                'exceptions'=> $e->getMessage(),
            ]);
        }
    }



    /*
    |=================================================================
    | Get Listing of Bookings For This User
    |=================================================================
    */
    public function logout()
    {
        try {
            Auth::user()->tokens()->delete();

            return response()->json([
                'status'  => 200,
                'message' => "You have logout successfully",
            ]);
        } 
        catch (\Exception $e) {

            return response()->json([
                'status'    => 100,
                'errors'    => ['Something went wrong'],
                'exceptions'=> $e->getMessage(),
            ]);
        }
    }


}