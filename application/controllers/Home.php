<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    function __construct() {
        parent::__construct();
        if ($this->session->userData('logado') == false) {
            redirect("index.php/IsLogged/login");
        }
    }

    public function login(){        
        $this->load->view("/usefulScreens/header");
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/login");
        $this->load->view("/usefulScreens/footer");
    }
        
    public function index(){       
              
       $dados['title_page'] = "Home";
        $this->load->view("/usefulScreens/header", $dados);
       $this->load->view('home', $dados);
       
    }
}

