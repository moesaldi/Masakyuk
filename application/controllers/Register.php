<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('v_register');
		if($this->session->userdata('login')==true){
            redirect(base_url('index.php/home'),'refresh');
        }
	}
	public function simpan()
    {
    	
    	if($this->input->post('daftar')){
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				$this->load->model('m_user');

				if($this->m_user->daftar()==TRUE){
					$this->session->set_flashdata('pesan', 'Sukses Terdaftar');
					redirect('login','refresh');
				} else {
					$this->session->set_flashdata('pesan', 'Gagal Terdaftar');
					redirect('register','refresh');
				}

			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('register','refresh');
			}
		}
    }

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */