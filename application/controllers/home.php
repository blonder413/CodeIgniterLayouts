<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'	=> 'Bienvenid@',
			'view'	=> 'home/index'
		);
		$this->load->view('layout/fresh',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */