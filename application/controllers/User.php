<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller{    
    
    function __construct() {
        parent::__construct();
        
        if($this->session->userData('logado') == false){
            redirect("index.php/IsLogged/login");
        }  
        
        $this->load->helper('url');        
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('session');                                
        $this->load->library('form_validation');                        
        $this->load->library('table');        
        $this->load->model('User_model');                
    }
            
    public function searchRegistration($indice=NULL){                         
        
        //Indice começado com 9 - identificador de usuario, ou instrutor
        if($indice==91){
            $this->db->where('level', '2');
            $this->db->select('*');
            $data['user'] = $this->db->get('usuario')->result();
            $dados['title_page'] = "Listagem de Usuários";
            $dados['title'] = "Usuários";
            $dados['button'] = "Usuário";
        }elseif($indice==92){
            $this->db->where('level', '3');
            $this->db->select('*');
            $data['user'] = $this->db->get('usuario')->result();
            $dados['title_page'] = "Listagem de Instrutores";
            $dados['title'] = "Instrutores";
            $dados['button'] = "Instrutor";
        }elseif($indice==93){            
            if($this->session->userData('lLevel') == 1){         
                redirect("index.php/DashBoard");
            }
        }
            
        if(($indice>0)&&($indice<7)){  
            $data['user'] = $this->db->get('usuario')->result();
            $dados['title_page'] = "Listagem";
            $dados['title'] = "Registro Efetuado";
            $dados['button'] = "";
        }
            
        
        $this->load->view("/usefulScreens/header", $dados);                
        $this->load->view("/usefulScreens/menu");
                             
        if($indice==1){
            $data['msg'] = "Registro cadastrado com sucesso!";
            $this->load->view("/user/registrationDone", $data);
        }else if($indice==2){
            $data['msg'] = "Registro não cadastrado!";            
            $this->load->view("/user/registrationNotDone", $data);
        }else if($indice==3) {
            $data['msg'] = "Registro excluido com sucesso!";
            $this->load->view("/user/registrationDone", $data);
        }else if($indice==4) {
            $data['msg'] = "Registro não excluído!";            
            $this->load->view("/user/registrationNotDone", $data);
        }else if($indice==5) {
            $data['msg'] = "Registro atualizado com sucesso!";
            $this->load->view("/user/registrationDone", $data);
        }else if($indice==6) {
            $data['msg'] = "Registro não atualizado!";            
            $this->load->view("/user/registrationNotDone", $data);
        }
        
        
        $this->load->view("/user/listUsers", $data);
        $this->load->view("/usefulScreens/footer");
        
    }    
    
   
    //
    //Registrar
    //
    public function toRegister(){                       
        
        $dados['title_page'] = "";
        $dados['title'] = "";
        $dados['button'] = "";
        $this->load->view("/usefulScreens/header", $dados);
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/user/userRegistration", $dados);
        $this->load->view("/usefulScreens/footer");
        
    }        
    
    
    

    public function update($id=NULL) {                
        
        
        
        $this->db->where("id", $id);        
        $data["usuario"] = $this->db->get('usuario')->result();
        
        $dados['title_page'] = "Listagem";
        $this->load->view("/usefulScreens/header", $dados);        
        $this->load->view("/usefulScreens/menu");
        
        if($this->session->userData('lLevel') == 2){ 
            $data['msg'] = "Você não tem permissão!";
            $data['voltar'] = "<?= base_url(); ?>index.php/User/searchRegistration/91";
            $data['endereco'] = "index.php/User/searchRegistration/91";
            $this->load->view("/user/registrationNotDone", $data);                
        }else
            $this->load->view("/user/userEdit", $data);
        
        $this->load->view("/usefulScreens/footer");                
    }
    
    //
    //Corrigí-lo para usar o model
    //
    public function saveUpdate() {                
        
        $id = $this->input->post("id");
        
        $data['name'] = $this->input->post('name');
        $data['cpf'] = $this->input->post('cpf');
        $data['email'] = $this->input->post('email');        
        $data['status'] = $this->input->post('status');
        $data['level'] = $this->input->post('level');
        
        $this->db->where("id", $id);
        
        if($this->db->update("usuario", $data))
            redirect("index.php/User/searchRegistration/5");
        else{
            redirect("index.php/User/searchRegistration/6");
        }
    }       
    
    //
    //Create correto!
    //
    public function create(){               
        
        $this->form_validation->set_rules('name','NAME','trim|required|max_length[100]|ucwords');                    
        $this->form_validation->set_rules('email','EMAIL','trim|required|max_length[50]|strtolower|valid_email');//|is_unique[usuario.email]        
        $this->form_validation->set_rules('cpf','CPF','trim|required|max_length[100]|ucwords');//Validar cpf        
        $this->form_validation->set_rules('password','PASSWORD','trim|max_length[100]|required|strtolower');        
        $this->form_validation->set_rules('level','LEVEL','trim|required|max_length[1]');        
        $this->form_validation->set_rules('status','STATUS','trim|required|max_length[1]');                        
        
        if($this->form_validation->run()==TRUE){            
            $dados = elements(array('name','email','cpf','password', 'level', 'status'),$this->input->post());
            $dados['password'] = md5($dados['password']);			
            $this->User_model->do_insert($dados);
        }else{
            redirect("index.php/User/searchRegistration/2");
        }                               
    }
    
    //
    //Corrigí-lo para usar o model
    //
    public function delete($id=NULL) {                                                                          
        
        if($this->session->userData('lLevel') == 2){ 
            $this->load->view("/usefulScreens/header"); 
            $this->load->view("/usefulScreens/menu");
            $data['msg'] = "Você não tem permissão!";
            $data['voltar'] = "<?= base_url(); ?>index.php/User/searchRegistration/91";
            $data['endereco'] = "index.php/User/searchRegistration/91";
            $this->load->view("/user/registrationNotDone", $data);                
        }else{        
            if(($this->User_model->do_delete($id)) == TRUE){                
                redirect("index.php/User/searchRegistration/3");
            }else{
                redirect("index.php/User/searchRegistration/4");
            }
        }
    }
}