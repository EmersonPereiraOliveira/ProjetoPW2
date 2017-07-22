<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	        
    public function index(){       
        
        $dados = array(
            'page_principal' => "users/listUsers",                  
        );
        
        $this->load->view('Home', $dados);
    }
    
    public function cadastro(){       
        
        $dados = array(
            'page_principal' => "users/userRegistration",                  
        );
        
        $this->load->view('Home', $dados);
    }
}