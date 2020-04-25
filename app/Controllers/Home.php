<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$custom = new \Config\Custom();
		$res = array(
			'load_toast'	=> TRUE,
			'load_modal'	=> TRUE,
			'load_pagepilling'	=> TRUE,
		);
		$data = [
			'page_title'		=> $custom->pageTitle('Selamat datang'),
			'page_content'		=> 'portal',
			'res_css'			=> $custom->resourceLoader($res,'css'),
			'res_js'			=> $custom->resourceLoader($res,'js'),
			'custom_body_style' => ''
		];
		if ($this->session->get('reg_id')==null) {
			return view('templates/base',$data);
		} else {
			header('Location: '.base_url('Dashboard'));
			die;
		}
	}

	public function dashboard()
	{
		return 'a';
	}

	public function register()
	{
		$custom = new \Config\Custom();
		$res = array(
			'load_toast'		=> TRUE,
			'load_datepicker'	=> TRUE,
			'load_jscookie'		=> TRUE,
			'load_inputmask'	=> TRUE,
		);
		$data = [
			'page_title'		=> $custom->pageTitle('Pendaftaran Daring'),
			'page_content'		=> 'register',
			'res_css'			=> $custom->resourceLoader($res,'css'),
			'res_js'			=> $custom->resourceLoader($res,'js')
		];
		if ($this->session->get('reg_id')==null) {
			return view('templates/base',$data);
		} else {
			header('Location: '.base_url());
			die;
		}
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
			if ($get_valid['success']==true&&$get_valid['score'] > getenv('CAPTCHA_MIN_SCORE')) {
				$send_options = [
					'uri'=>'PSB',
					'data'=> $this->request->getVar()
				];
				$response = $CRUD->post($send_options);
				$res['response'] = json_decode($response->getBody());
				if ($res['response']->success===true) {
					$this->session->set([
						'reg_id'=> $res['response']->reg_id,
						'email'=> $res['response']->email,
					]);
				}
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

	public function logout()
	{
		$this->session->remove(['reg_id','email']);
		return redirect()->to(base_url());
	}
}