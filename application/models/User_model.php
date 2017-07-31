<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

class User_model extends CI_Model {
    
    public function do_insert($dados = NULL) {
        
        if ($dados != NULL):
            $this->db->insert('usuario', $dados);
            echo "Cadastro Efetuado com Sucesso!";            
            redirect("index.php/User/searchRegistration/1");
        endif;
    }
}