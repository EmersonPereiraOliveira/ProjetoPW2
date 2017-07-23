<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    
    
    public function index(){       
       
       $this->load->view("/usefulScreens/header");       
       $this->load->view('login');               
       $this->load->view("/usefulScreens/footer");
       
       //$this->load->view('home');
       
    }
}