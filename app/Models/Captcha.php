<?php namespace App\Models;

use CodeIgniter\Model;

class Captcha extends Model
{
    public function validasi($captcha = false)
    {
        $curl = \Config\Services::curlrequest();
		$send_response = array(
			'success'	=> TRUE,
			'errors'	=> array(),
			'response'	=> NULL
        );
        
        if(!$captcha){
            $send_response['success'] = FALSE;
            $send_response['errors'] = array('Missing token');
        } else {
            $secretKey = getenv('CAPTCHA_SECRET');
            $response = file_get_contents(
                "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
            );
            $response = json_decode($response);

            if ($response->success === false) {
                $send_response['errors'] = $response;
            } else {
                $send_response['success'] = TRUE;
                $send_response['response'] = $response;
            }
        }

		return $send_response;
    }
}