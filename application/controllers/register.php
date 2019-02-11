<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{  
        $dados['name'] = "Cadastro";
        $this->load->view('header', $dados);
        $this->load->view('registro');
		
	
	}

	public function efetuarcadastro(){
		 $nome = $this->input->post('nome');
		 $sobrenome = $this->input->post('sobrenome');
		 $email = $this->input->post('email');
		 $senha = $this->input->post('senha');
		 $cpf =  $this->input->post('cpf');
       
		 if(empty($nome ) or empty($sobrenome) or empty($email) or empty($senha) or empty($cpf)){
              $dados['aviso'] = 'Todos Os Campos devem ser Preenchidos';
			  $this->load->view('header');
			  $this->load->view('registro', $dados);
		 }else{ 
			$this->load->database();
			$data['nome'] = $nome;
    		$data['sobrenome'] = $sobrenome;
    		$data['email'] = $email;
    		$data['senha'] = $senha;
    		$data['cpf'] = $cpf;
			$this->db->insert('cliente',$data);
			$this->load->view('home');

		 }

	}

}
