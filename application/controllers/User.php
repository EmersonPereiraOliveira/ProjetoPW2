<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {    
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('url');        
        $this->load->helper('form');
        //$this->load->library('form_validation');
        //$this->load->helper('array');
        //$this->load->library('session');
        //$this->load->model('Usuario_model', 'UsuarioDAO');
        //$this->load->library('table');
        
    }
    
    public function verificarSessao(){
        if($this->session->userData('logado') == false){
            redirect("index.php/dashBoard/login");
        }
    }
    
    public function searchRegistration($indice=NULL){ 
                
        $this->verificarSessao();
        
        $this->db->select('*');
        $data['user'] = $this->db->get('usuario')->result();

        $dados['title_page'] = "Listagem";
        $this->load->view("/usefulScreens/header", $dados);                
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
        
        $this->verificarSessao();
        
        $dados['title_page'] = "Cadastro";
        $this->load->view("/usefulScreens/header", $dados);
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/user/userRegistration");
        $this->load->view("/usefulScreens/footer");
        
    }
    
    public function saveRegistration(){                             
        
        $this->verificarSessao();
        
        $data['nome'] = $this->input->post('name');
        $data['cpf'] = $this->input->post('cpf');
        $data['email'] = $this->input->post('email');
        $data['senha'] = md5($this->input->post('password'));
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('level');                
        
        
        if($this->db->insert('usuario', $data)){
            redirect("index.php/User/searchRegistration/1");
        }else{
            redirect("index.php/User/searchRegistration/2");
        } 
         
                 
    }
    
    public function delete($id=NULL) {
        
        $this->verificarSessao();
        
        $this->db->where("id", $id);
        
        
        if($this->db->delete("usuario"))
            redirect("index.php/User/searchRegistration/3");
        else{
            redirect("index.php/User/searchRegistration/4");
        }
    }
    
    public function update($id=NULL) {
        
        $this->verificarSessao();
        
        $this->db->where("id", $id);        
        $data["usuario"] = $this->db->get('usuario')->result();
        
        $dados['title_page'] = "Listagem";
        $this->load->view("/usefulScreens/header", $dados);        
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/user/userEdit", $data);
        $this->load->view("/usefulScreens/footer");                
    }
    
    
    public function saveUpdate() {
        
        $this->verificarSessao();
        
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
    
    public function testForm(){               
        
        $dados['title_page'] = "Teste Listagem";
        $this->load->view("/usefulScreens/header", $dados);        
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/user/testForm");
        $this->load->view("/usefulScreens/footer");  
    
        
    }
    
    public function testFormRec(){
        
        $this->load->helper('form');
        
    }
    
    
    
    
   
    
}