<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class compras extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $user = $this->session->userdata["usuario"];
        echo "$user";
         if(empty($user)){
             echo "entrei aki";
            redirect("login");
         }
    
	}

	public function index()
	{  

		$this->load->view('carrinho');

    }
}