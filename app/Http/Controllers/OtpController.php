<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class OtpController extends Controller
{
    /*
    |================================================================
    |  Send OTP to User VIA Email Address
    |================================================================
    */
    public function sendOtp(Request $request)
    { 
        $otp = $this->otp(6);

        try{
            $user = User::where('email', $request->email)->first();
            if($user){
                // dd($user);

                $lastupdated = date('Y-m-d');
                // $user->email_confirmation_code = $otp;
                // $user->updated_at = $lastupdated;
                // $user->save();
                $user->update([
                    'email_confirmation_code' => $otp,
                    // 'updated_at' => $lastupdated
                ]);
                // return response()->json([
                //     'status'  => 200,
                //     'message' => 'Email verification code has been sent successfully',
                // ]);

                $sender_email = config('app.mail_from');
                $app_name = config('app.name');

                // return $sender_email;
                // dd(config('app.mail_from'));

                Mail::send('auth.otpmail', compact('otp'), function ($message) use ($user , $sender_email , $app_name) {
                    $message->from( $sender_email ,  $app_name);
                    $message->to($user->email, $user->name);
                    $message->subject('Verify Email Address');
                    // $message->priority(3);
                });

                return response()->json([
                    'status'  => 200,
                    'message' => 'Email verification code has been sent successfully',
                ]);
            }
            else{
                return response()->json([
                    'status' => 100,
                    'error'  => 'There is no account with the email you provided',
                ]);
            }

        }
        catch (\Exception $e) {
            return response()->json([
                "status" => 100,
                "errors" => $e->getMessage()
            ]);
        }

    }

    /*
    |================================================================
    |  Generate New OTP
    |================================================================
    */
    public function otp($strength)
    {
        // $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input = '0123456789';

        $input_length = strlen($input);
        $random_string = '';

        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }



    /*
    |================================================================
    |  Verify User OTP VIA Email Address
    |================================================================
    */
    public function verifyOtp(Request $request)
    {
        try{
            $user = User::where('email_confirmation_code', $request->otp)->first();

            if($user) {
                $user->is_email_verified       = 1;
                $user->email_confirmation_code = null;
                $user->email_verified_at       = Carbon::now();
                $user->save();

                // GET USER TOKEN
                $token = $user->createToken('API Token')->plainTextToken;

                return response()->json([
                    'status'    => 200,
                    'message'   => "Your email address has been verified",
                    'token_type'=> 'bearer',
                    'token'     => $token,
                ]);
            }
            else{
                return response()->json([
                    'status' => 100,
                    'error'  => 'The OTP code does not match',
                ]);
            }
        }
        catch (\Exception $e) {
            return response()->json([
                "status" => 100,
                "errors" => $e->getMessage()
            ]);
        }

    }



    /*
    |===================================================================
    |  RESET PASSWORD -- 
    |===================================================================
    */
    public function resetPassword(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 100,
                'errors' => $validator->errors()->all()
            ]);
        }
        
        try{
            User::where('id',Auth::id())
                ->update(['password' => Hash::make($request->password)]);

            return response()->json([
                'status' => 200,
                'message'=> 'You have updated your password successfully'
            ]);
        }
        catch (\Exception $e) {
            return response()->json([
                "status" => 100,
                "errors" => $e->getMessage()
            ]);
        }

    }


}