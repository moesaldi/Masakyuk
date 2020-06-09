<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function get_loginUser()
	{
		$password = $this->input->post('password');
		return $this->db
				->where('username',$this->input->post('username'))
				->where('password',$this->input->post('password'))
				->get('user');
				// ->where('password',md5($password))
	}
	public function daftar()
	{
		$email=$this->input->post('email');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$data_simpan=array(
			'email'=>$email,
			'nama'=>$nama,
			'username'=>$username,
			'password'=>$password,
			);
		$this->db->insert('user',$data_simpan);
		if($this->db->affected_rows()>0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */