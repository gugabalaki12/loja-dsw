<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{  
		   $dados['name'] = "Login";
		   $dados['name2'] = "Home";
        $this->load->view('header', $dados);
        $this->load->view('login');
		
	}
	public function efetuarlogin()
	{      
		 $email = $this->input->post('email');
		  $senha = $this->input->post('senha');
		  $this->db->where("email", $email);
		  $this->db->where("senha", $senha);
		  $query = $this->db->get("cliente");
          if($query->num_rows()==1){
			  $usuario = $query->row();
			  $this->session->set_userdata("usuario", $usuario->nome);			
				redirect('home/logado');
          }else{
			  $dale['name'] = "Login";
			  $dados['aviso'] = 'Email ou senha Incorreto';
			  $this->load->view('header', $dale);
          	$this->load->view('login', $dados);
          }
	}
	public function deslogar(){
	  $this->session->set_userdata("usuario", "");
	  redirect("home");

	}

}
