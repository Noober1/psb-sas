<?php namespace App\Models;

use CodeIgniter\Model;

class Captcha extends Model
{
    public function validasi($token = false)
    {
        $curl = \Config\Services::curlrequest();
		$send_response = array(
			'success'	=> TRUE,
			'errors'	=> array(),
            'score'     => 9.9,
            'msg'       => array()
        );
        
        if (getenv('CAPTCHA_ENABLE')==="Y") {
            if(!$token){
                $send_response['success'] = FALSE;
                $send_response['errors'][] = 'Missing token';
            } else {
                $secretKey = getenv('CAPTCHA_SECRET');
                $response = file_get_contents(
                    "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $token . "&remoteip=" . $_SERVER['REMOTE_ADDR']
                );
                $response = json_decode($response);
    
                if ($response->success === FALSE) {
                    $send_response['errors'] = $response;
                } else {
                    $send_response['success'] = TRUE;
                    foreach ($response as $key => $value) {
                        $send_response[$key] = $value;
                    }
                }
            }
        } else {
            $send_response['msg'][]  = 'Valid cause CAPTCHA validation was disabled';
        }

		return $send_response;
    }
}