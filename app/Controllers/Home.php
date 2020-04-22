<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$custom = new \Config\Custom();
		$res = array(
			'load_toast'	=> TRUE
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
			'load_toast'	=> TRUE,
			'load_datepicker'=> TRUE,
		);
		$data = [
			'page_title'		=> $custom->pageTitle('Selamat datang'),
			'page_content'		=> 'register',
			'res_css'			=> $custom->resourceLoader($res,'css'),
			'res_js'			=> $custom->resourceLoader($res,'js')
		];
		return view('templates/base',$data);
	}

}