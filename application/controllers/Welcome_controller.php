<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	}

	public function index()
	{
		redirect(base_url("login"),'refresh');
		// $this->login();
	}

	public function login()
	{
		$data = array();
		$data['title']='Acceso';
    	$data['meta_title']='Acceso';
		$data['stylesheets']= array(
			'vendors/iCheck/css/square/blue',
			'vendors/bootstrapvalidator/css/bootstrapValidator.min',
			'css/pages/login',
		);
		$data['javascripts']= array(
			'vendors/bootstrapvalidator/js/bootstrapValidator.min',
			'vendors/iCheck/js/icheck',
			'js/pages/login'
		);

		$this->load->view('login_view',$data);
	}
	
	public function validation()
	{

	}
}
