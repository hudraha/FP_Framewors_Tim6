<?php 
/**
 * 
 */
class M_template extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	// function login($data)
	// {
	// 	$sql = "select * from admin where email = ? and password = md5(?)";
	// 	$hasil = $this->db->query($sql,array($data['email'],$data['password']));

	// 	if($hasil->num_rows()>0){
	// 		$data_login = $hasil->row();
	// 		$data_session = array('email'=>$data_login->email,'id'=>$data_login->id_admin);

	// 		$this->session->set_userdata('sessionuser',$data_session);
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	function get_data()
	{
		//template = nama tabel pada db
		return $this->db->get('template')->result();
	}

	function get_where($type)
	{
		return $this->db->get_where('template',['TYPE'=>$type])->result();
	}

	function insert_data($data)
	{
		$sql = "INSERT INTO template (NAME,TYPE,LAYOUT,PICT1,PICT2,TEXT1,TEXT2,BTN1,BTN2,BTN_NAME1,BTN_NAME2,STATUS) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($sql,array($data['NAME'],$data['TYPE'],$data['LAYOUT'],$data['PICT1'],$data['PICT2'],$data['TEXT1'],$data['TEXT2'],$data['BTN1'],$data['BTN2'],$data['BTN_NAME1'],$data['BTN_NAME2'],$data['STATUS']));
	}

	function delete($id)
	{
		$sql = "DELETE FROM template WHERE ID_TEMPLATE = ?";
		$this->db->query($sql,$id);
	}

	public function get_specific($id)
	{
		return $this->db->where('ID_TEMPLATE',$id)->get('template')->result();
	}

	public function update_data($data)
	{
		$sql = "UPDATE template SET NAME = ?, TYPE = ?, LAYOUT = ?, PICT1 = ?, PICT2 = ?, TEXT1 = ?, TEXT2 = ?, BTN1 = ?, BTN2 = ?, BTN_NAME1 = ?, BTN_NAME2 = ?, STATUS = ? WHERE ID_TEMPLATE = ?";
		$this->db->query($sql,array($data['NAME'],$data['TYPE'],$data['LAYOUT'],$data['PICT1'],$data['PICT2'],$data['TEXT1'],$data['TEXT2'],$data['BTN1'],$data['BTN2'],$data['BTN_NAME1'],$data['BTN_NAME2'],$data['STATUS'],$data['ID_TEMPLATE']));
	}
}
 ?>