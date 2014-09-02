<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->view('login');
	}	
	
	public function log_in()
	{
		
		$credintials = array('email' => $_POST['email'] ,
							 'user_name' => $_POST['user_name'],
							 'password' => $_POST['password'],	
						);
		$this->load->model('user_model');
		$data = $this->user_model->get_user_data($credintials);
		var_dump($data);
	}
}

