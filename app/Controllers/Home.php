<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$custom = new \Config\Custom();
		$res = array(
			'load_toast'	=> TRUE,
			'load_animatemodal'	=> FALSE,
		);
		$data = [
			'page_title'		=> $custom->pageTitle('Selamat datang'),
			'page_content'		=> 'portal',
			'res_css'			=> $custom->resourceLoader($res,'css'),
			'res_js'			=> $custom->resourceLoader($res,'js'),
			'custom_body_style' => 'background-image: url(https://smkbintarjalancagak.sch.id/wp-content/uploads/2019/09/BANGUNAN1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;'
		];
		return view('templates/base',$data);
	}

	public function register()
	{
		$custom = new \Config\Custom();
		$res = array(
			'load_toast'		=> TRUE,
			'load_datepicker'	=> TRUE,
			'load_jscookie'		=> TRUE
		);
		$data = [
			'page_title'		=> $custom->pageTitle('Pendaftaran Daring'),
			'page_content'		=> 'register',
			'res_css'			=> $custom->resourceLoader($res,'css'),
			'res_js'			=> $custom->resourceLoader($res,'js')
		];
		return view('templates/base',$data);
	}

	public function registering()
	{
		$res = array(
			'success'	=>true,
			'errors'	=> array()
		);
		$token = getenv('CAPTCHA_ENABLE')=='Y' ? $this->request->getVar('token') : 'No token';
		$captcha = model('App\Models\Captcha');
		$CRUD = model('App\Models\CRUD');
		
		$get_valid = $captcha->validasi($token);
		if ($this->request->isAJAX()) {
			if ($get_valid['success']==true&&$get_valid['score'] > 7) {
				$send_options = [
					'uri'=>'PSB',
					'data'=> $this->request->getVar()
				];
				$response = $CRUD->post($send_options);
				$res['response'] = json_decode($response->getBody());
			} else {
				$res['success'] = false;
				if ($get_valid['success']==true&&$get_valid['score'] <= getenv('CAPTCHA_MIN_SCORE')) {
					$res['errors'][] = 'Boo beep bee boop?';
				} else {
					$res['errors'][] = $get_valid;
				}
			}
			$res['captcha_response'] = $get_valid;
			return json_encode($res);
		} else {
			return redirect()->to(base_url());
		}
	}
}