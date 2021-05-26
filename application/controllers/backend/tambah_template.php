<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_template extends CI_Controller {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('m_template');
 	}


	public function index()
	{
		if ($this->input->post()) {
 			$data = $this->input->post();
 			//memanggil model
 			$this->m_template->insert_data($data);
 			//karyawan = redirect ke controller ini kembali
 			redirect('backend');
 		}else{
			$data['v_template'] = "v_tambah_template.php";
	 		$this->load->view('template/v_wrapper',$data); 
 		}
	}

	public function delete_data($id)
	{
		if ($id!=NULL){
 			//delete data
 			$this->m_template->delete($id);
 			redirect('backend');
 		}
	}

	public function update_data($id)
	{
		if ($id!=NULL){
 			//menampilkan data yang akan diupdate
 			$data['template'] = $this->m_template->get_specific($id);
 			$data['v_template'] = "v_update_template.php";
	 		$this->load->view('template/v_wrapper',$data); 
 		}
	}

	public function store_data()
	{
 		if ($this->input->post()) {
			$input = $this->input->post();
			$this->m_template->update_data($input);
			redirect('backend');
		}
	}
}
