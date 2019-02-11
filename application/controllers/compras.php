<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class compras extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $user = $this->session->userdata["usuario"];
         if($user == ""){
             redirect("login");
         }
    
	}

	public function index()
	{  

		$this->load->view('carrinho');

    }
}