<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Attendance extends CI_Controller{    
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('url');        
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('session');
        $this->load->library('form_validation');                        
        $this->load->library('table');        
        $this->load->model('User_model');
        
    }
    
    public function verificarSessao(){
        if($this->session->userData('logado') == false){
            redirect("index.php/dashBoard/login");
        }
    }
    
    public function listAttendances(){
        
    }
    
}