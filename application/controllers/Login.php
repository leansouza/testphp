<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->model('MLogin');
		
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function auth(){

		$this->form_validation->set_rules('username', 'Usuario', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Senha', 'required');
		
		if ($this->form_validation->run() == false) {
			
			redirect("login", 'refresh');
			
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->MLogin->check_login($username, $password);
			
			if ($result) {
				$session_array = array(
                    'USER_ID'  => $result->id,
                    'USER_NAME'  => $result->login,
                    'IS_ACTIVE'  => 1
                );
                
                $this->session->set_userdata($session_array);

                $this->session->set_flashdata('success_flashData', 'Login Feito com Sucesso!');
                redirect('Livros');
			}else{
				$this->session->set_flashdata('error_flashData', 'Usuario ou senha inválido!');
                redirect("login", 'refresh');
			}
		}
	}

	public function logoff(){
		
		$this->session->sess_destroy();
		
		redirect("login", 'refresh');
	}
}
