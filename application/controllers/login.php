<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{  

        $this->load->view('header');
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
                redirect("home");
          }else{
			  $dados['aviso'] = 'Email ou senha Incorreto';
			  $this->load->view('header');
          	$this->load->view('login', $dados);
          }
	}

}
