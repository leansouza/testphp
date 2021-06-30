<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livros extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if (empty($this->session->userdata('USER_ID'))) {
            redirect('login');
        }

        $this->load->model('MLivros','MLivros');

    }

	public function index()
	{
		$this->data['livros'] = $this->MLivros->list();
		$this->load->view('includes/header');
		$this->load->view('livros/list', $this->data);
		$this->load->view('includes/footer');
	}

	public function add(){
		if($this->input->post('submit')){
			$dataLivros = array(
				"titulo" => $this->input->post('titulo'),
				"descricao" => $this->input->post('descricao'),
				"autor" => $this->input->post('autor'),
				"datacadastro" => date('Y-m-d')
			);

			$reInsert = $this->MLivros->add($dataLivros);
			if($reInsert){
				$this->session->set_flashdata('mensagem', array('success','Livro adicionado com sucesso!'));
            	redirect('livros');
			}else{
				$this->session->set_flashdata('mensagem', array('success','Não foi possivel inserir esse livro'));
            	redirect('livros/add');
			}

		}else{
			$this->load->view('includes/header');
			$this->load->view('livros/add');
			$this->load->view('includes/footer');
		}
	}

	public function editar(){
		$id = $this->uri->segment(3);
		if($this->input->post('submit')){
			$dataLivros = array(
				"titulo" => $this->input->post('titulo'),
				"descricao" => $this->input->post('descricao'),
				"autor" => $this->input->post('autor'),
			);
			
			$reInsert = $this->MLivros->edit($dataLivros, $this->input->post('id_livro'));
			if($reInsert){
				$this->session->set_flashdata('mensagem', array('success','Livro editado com sucesso!'));
            	redirect('livros');
			}else{
				$this->session->set_flashdata('mensagem', array('success','Não foi possivel editar esse livro'));
            	redirect('livros/editar/'.$id);
			}

		}else{
			$this->data['livro'] = $this->MLivros->filter_livros_by_id($id);
			$this->load->view('includes/header');
			$this->load->view('livros/edit', $this->data);
			$this->load->view('includes/footer');
		}
	}

	public function delete($id)
    {	
        $delete = $this->MLivros->delete($id);
        if($delete){
            $this->session->set_flashdata('mensagem', array('success','Livro deletado com sucesso!'));
            redirect('livros');
        }
        else
        {
            $this->session->set_flashdata('mensagem', array('danger','Ops! Livro não encontrado!'));
            redirect('livros');
        }
    }

	
}
