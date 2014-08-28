<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('downloading_page');
	}
	
	public function hello()
	{
		echo "hello mohamed";
		var_dump($_POST);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */