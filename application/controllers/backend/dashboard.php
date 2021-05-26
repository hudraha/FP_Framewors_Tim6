<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_template');
 	}


	public function index()
	{
		$data['data_header']= $this->m_template->get_where('header');
		$data['data_body']= $this->m_template->get_where('body');
		$data['data_footer']= $this->m_template->get_where('footer');
		$data['v_template'] = "v_backend.php";
 		$this->load->view('template/v_wrapper',$data); 
	}

	public function login()
	{
		$this->load->view('v_login');
	}
}
