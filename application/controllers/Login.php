<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
		if($this->session->userdata('login')==true){
            redirect(base_url('index.php/home'),'refresh');
        }

	}
	public function proses_login()
    {
        if($this->input->post('loginuser')){
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $this->load->model('m_user');
                if($this->m_user->get_loginUser()->num_rows()>0){
                    $data=$this->m_user->get_loginUser()->row();
                    $array = array(
                        'loginuser' => TRUE,
                        'Username'	=>$data->username,
                        'password'	=>$data->password, 
                        'nama'		=>$data->nama,                   
                    );
                    
                    $this->session->set_userdata( $array );
                    redirect('home','refresh');
                } else {
                    $this->session->set_flashdata('pesan', 'Username dan Password Salah');
                    redirect('login','refresh');
                }
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('login','refresh');
            }
        }
    }
    public function register()
    {
    	
    	if($this->input->post('register')){
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
					redirect('login','refresh');
				}

			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('login','refresh');
			}
		}
    }
    public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
		redirect('home');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */