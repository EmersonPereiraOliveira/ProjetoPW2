<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {    
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        //$this->load->helper('form');
        //$this->load->library('form_validation');
        
    }
    
    public function searchRegistration($indice=NULL){ 
        
        $this->db->select('*');
        $data['user'] = $this->db->get('usuario')->result();

        $this->load->view("/usefulScreens/header");
        $this->load->view("/usefulScreens/menu");
                             
        if($indice==1){
            $data['msg'] = "Usuário cadastrado com sucesso!";
            $this->load->view("/user/registrationDone", $data);
        }else if($indice==2){
            $data['msg'] = "Usuário não cadastrado!";            
            $this->load->view("/user/registrationNotDone", $data);
        }else if($indice==3) {
            $data['msg'] = "Usuário excluido com sucesso!";
            $this->load->view("/user/registrationDone", $data);
        }else if($indice==4) {
            $data['msg'] = "Usuário não excluído!";            
            $this->load->view("/user/registrationNotDone", $data);
        }else if($indice==5) {
            $data['msg'] = "Usuário atualizado com sucesso!";
            $this->load->view("/user/registrationDone", $data);
        }else if($indice==6) {
            $data['msg'] = "Usuário não atualizado!";            
            $this->load->view("/user/registrationNotDone", $data);
        }
        
        $this->load->view("/user/listUsers", $data);
        $this->load->view("/usefulScreens/footer");
        
    }    
    
    public function toRegister(){       
        
        $this->load->view("/usefulScreens/header");
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/user/userRegistration");
        $this->load->view("/usefulScreens/footer");
        
    }
    
    public function saveRegistration(){       
                
        //$this->load->library('database');
        
        $data['nome'] = $this->input->post('name');
        $data['cpf'] = $this->input->post('cpf');
        $data['email'] = $this->input->post('email');
        $data['senha'] = md5($this->input->post('password'));
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('level');
        
        //redirect("index.php/User/searchRegistration");
        
        
        if($this->db->insert('usuario', $data)){
            redirect("index.php/User/searchRegistration/1");
        }else{
            redirect("index.php/User/searchRegistration/2");
        } 
         
                 
    }
    
    public function delete($id=NULL) {
        
        $this->db->where("id", $id);
        
        
        if($this->db->delete("usuario"))
            redirect("index.php/User/searchRegistration/3");
        else{
            redirect("index.php/User/searchRegistration/4");
        }
    }
    
    public function update($id=NULL) {
        
        $this->db->where("id", $id);        
        $data["usuario"] = $this->db->get('usuario')->result();
        
        $this->load->view("/usefulScreens/header");
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/user/userEdit", $data);
        $this->load->view("/usefulScreens/footer");                
    }
    
    
    public function saveUpdate() {
        
        $id = $this->input->post("id");
        
        $data['nome'] = $this->input->post('name');
        $data['cpf'] = $this->input->post('cpf');
        $data['email'] = $this->input->post('email');        
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('level');
        
        $this->db->where("id", $id);
        
        if($this->db->update("usuario", $data))
            redirect("index.php/User/searchRegistration/5");
        else{
            redirect("index.php/User/searchRegistration/6");
        }
    }
    
    
   
    
}