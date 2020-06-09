<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        //Do your magic here
		$this->load->model('m_resep');

	}

	public function index()
	{
		$data['data_resep'] = $this->m_resep->getResep();
		$data['data_vegetarian'] = $this->m_resep->getResepVegetarian();
		$data['data_nonvegetarian'] = $this->m_resep->getResepNonVegetarian();
		$data['konten'] = "v_home";
		if($this->session->userdata('loginuser')==TRUE){
			$data['url']="login/logout";
			$data['log']=" Logout";
			$data['nama'] = "Selamat Datang <br>".$this->session->userdata('nama')."";
		} else {
			$data['url']="login";
			$data['log']=" Login";
			$data['nama']="Bingung ingin masak <br>apa hari ini?";

		}
		$this->load->view('template',$data);
	}

	public function rekomendasi()
	{
		$data['data_resep'] = $this->m_resep->getResepAll();
		$data['konten'] = "v_rekomendasi";
		if($this->session->userdata('loginuser')==TRUE){
			$data['url']="login/logout";
			$data['log']=" Logout";
			$data['nama'] = "Selamat Datang <br>".$this->session->userdata('nama')."";
		} else {
			$data['url']="login";
			$data['log']=" Login";
			$data['nama']="Bingung ingin masak <br>apa hari ini?";

		}
		$this->load->view('template2',$data);

	}

	public function vegetarian()
	{
		$data['data_resep'] = $this->m_resep->getResepVegetarianAll();
		$data['konten'] = "v_vegetarian";
		if($this->session->userdata('loginuser')==TRUE){
			$data['url']="login/logout";
			$data['log']=" Logout";
			$data['nama'] = "Selamat Datang <br>".$this->session->userdata('nama')."";
		} else {
			$data['url']="login";
			$data['log']=" Login";
			$data['nama']="Bingung ingin masak <br>apa hari ini?";

		}
		$this->load->view('template2',$data);

	}

	public function nonVegetarian()
	{
		$data['data_resep'] = $this->m_resep->getResepNonVegetarianAll();
		$data['konten'] = "v_nonvegetarian";
		if($this->session->userdata('loginuser')==TRUE){
			$data['url']="login/logout";
			$data['log']=" Logout";
			$data['nama'] = "Selamat Datang <br>".$this->session->userdata('nama')."";
		} else {
			$data['url']="login";
			$data['log']=" Login";
			$data['nama']="Bingung ingin masak <br>apa hari ini?";

		}
		$this->load->view('template2',$data);

	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */