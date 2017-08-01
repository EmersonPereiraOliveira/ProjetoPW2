<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

class User_model extends CI_Model {
    
    public function do_insert($dados = NULL) {
        
        try{
            if ($dados != NULL){
                $this->db->insert('usuario', $dados);                  
                redirect("index.php/User/searchRegistration/1");
            }else{
                redirect("index.php/User/searchRegistration/2");
            }
        }catch(Exception $e){
            redirect("index.php/User/searchRegistration/2");
        }         
    }
    
    public function do_delete($id = NULL) {
        
        try{
            if ($id != NULL){
                $this->db->where("id", $id);                
                $this->db->delete('usuario');                  
                redirect("index.php/User/searchRegistration/3");
            }else{
                redirect("index.php/User/searchRegistration/4");
            }
        }catch(Exception $e){
            redirect("index.php/User/searchRegistration/4");
        }         
    }
}