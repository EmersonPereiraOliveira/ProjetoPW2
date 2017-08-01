<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {
	        
    

    public function index(){                              
        $this->verificarSessao();        
        $this->load->view("/usefulScreens/header");
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/dashBoard");
        $this->load->view("/usefulScreens/footer");
       
    }
    
    public function verificarSessao(){
        if($this->session->userData('logado') == false){
            redirect("index.php/DashBoard/login");
        }
    }
    
    public function login(){        
        $this->load->view("/usefulScreens/header");
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/login");
        $this->load->view("/usefulScreens/footer");
    }
    
    public function logar(){
        
        $email = $this->input->post('email');
        $passwd = md5($this->input->post('password'));
        
        //Condicional.. se o retorno do BD [e igual a variável
        $this->db->where('password', $passwd);
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $this->db->where('level', 1);
        
        $data['usuario'] = $this->db->get('usuario')->result();
        
        if(count($data['usuario'])==1){
            
            $dados['name'] = $data['usuario'][0]->name;
            $dados['id'] = $data['usuario'][0]->id;
            $dados['logado'] = true;
            
            $this->session->set_userData($dados);
            
            redirect("index.php/Home");            
        }else{
            redirect("index.php/DashBoard/login");
        }
        
    }
    
    public function logOut() {
        $this->session->sess_destroy();
        redirect('index.php/DashBoard');
        
    }
}