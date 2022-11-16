<?php

namespace App\Services;

use App\Models\Otp;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class OTPService
{
    use ApiResponder;
    public function sendOTP(Request $request){
        $otp = Otp::where('mobile',$request->mobile)->first();
        if (!isset($otp)){
            $otp = new Otp();
            $otp->attempt = 0;
        }
        if ($otp->attempt >3){
            return $this->error('Too many Attempt, are you human?');
        }
        $otp->mobile = $request->mobile;
        $otp->token = $this->generateOTP();
        $otp->attempt += 1;

//        $otp->save();
//        return $this->success('Otp has been sent');
        if (send_sms($otp->mobile,"Your ATC verification code is {$otp->token}. The code will expire in 2 minutes.Please do NOT share your OTP with others")){
            $otp->save();
            return $this->success('Otp has been sent');
        } else{
            return $this->error('OTP send failed');
        }
    }
    public function generateOTP(){
        return rand(99999,999999);

    }
    public function verifyOTP(Request $request){
        $otp = Otp::where('mobile',$request->mobile)->where('token',$request->token)->first();
        if (!isset($otp)){
            return $this->error('Invalid OTP');
        }
        return $this->success('OTP verified');
    }

}
