<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}

	public function index()
	{  
        $this->load->view('headerhome');
		$this->load->view('home');
	
	}
	public function logado(){
		$user = $this->session->userdata["usuario"];
		
		$dados = array(
		  "name" =>"Home",
		   "variavel" => $user,

		);
		$this->load->view('headerlogado', $dados);
		$this->load->view('home');

	}

}
