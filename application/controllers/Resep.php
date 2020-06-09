<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_resep','resep');
	}

	public function lihatResep($id_resep)
	{
		$data['detailResep'] = $this->resep->getResepById($id_resep);
		$resep = $this->resep->getResepById($id_resep);
		$data['konten'] = "v_resep";
		if($this->session->userdata('loginuser')==TRUE){
			$data['url']="login/logout";
			$data['log']=" Logout";
		} else {
			$data['url']="login";
			$data['log']=" Login";

		}
		$this->load->view('template2',$data);
	}

}

/* End of file Resep.php */
/* Location: ./application/controllers/Resep.php */