<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Attendance extends CI_Controller{    
    
    function __construct() {
        parent::__construct();
        
        if ($this->session->userData('logado') == false) {
            redirect("index.php/IsLogged/login");
        }
        
        $this->load->helper('url');        
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('session');
        $this->load->library('form_validation');                        
        $this->load->library('table');        
        $this->load->model('Attendance_model');
        
    }
    
    public function verificarSessao(){
        if($this->session->userData('logado') == false){
            redirect("index.php/dashBoard/login");
        }
    }
    
    public function listAttendances(){
        
        $this->verificarSessao();        
        
        
        if(isset($_POST['campo'])){
            $condicao = $_POST['campo'];
            $this->db->where('user', $condicao);                    
        }
        
        $data['attendance'] = $this->db->get('attendance')->result();        
        $dados['title_page'] ="Listagem de Atendimentos";
        $this->load->view("/usefulScreens/header", $dados);                
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/attendance/listAttendances", $data);
        $this->load->view("/usefulScreens/footer");
        
    }
    
    public function toRegister(){       
        
        $this->verificarSessao();
        
        $this->db->where('level', '2');      
        $data['user'] = $this->db->get('usuario')->result(); 
        
        $this->db->where('level', '3');        
        $data['instructor'] = $this->db->get('usuario')->result(); 
        
        $dados['title_page'] = "Cadastro de Atendimentos";
        $this->load->view("/usefulScreens/header", $dados);
        $this->load->view("/usefulScreens/menu");
        $this->load->view("/attendance/attendanceRegistration", $data);
        $this->load->view("/usefulScreens/footer");
        
    }      
    
    public function delete($id=NULL) {                                   
        
        $this->verificarSessao();                               
        
        if(($this->Attendance_model->do_delete($id)) == TRUE){                
            redirect("index.php/Attendance/listAttendances/3");
        }else{
            redirect("index.php/Attendance/listAttendances/4");
        }
    }
    
    public function create(){
        
        $this->verificarSessao();
        
        $this->form_validation->set_rules('horary','HORARY','trim|required');                    
        $this->form_validation->set_rules('user','USER','trim|required');
        $this->form_validation->set_rules('instructor','INSTRUCTOR','trim|required');   
        $this->form_validation->set_rules('description','DESCRIPTION', 'trim');                                
        
        if($this->form_validation->run()==TRUE){            
            echo 'Entrou';
            $dados = elements(array('horary','user','instructor', 'description'),$this->input->post());                        
            $this->Attendance_model->do_insert($dados);
        }else{
            echo 'Não Entrou';
            //redirect("index.php/User/searchRegistration/2");
        }                               
    }
    
}