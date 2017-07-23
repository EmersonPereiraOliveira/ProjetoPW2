<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    
    public function verificarSessao(){
        if($this->session->userData('logado') == false){
            redirect("index.php/dashBoard/login");
        }
    }
    
    public function index(){       
       
       $this->verificarSessao();      
       
       $this->load->view('home');
       
    }
}