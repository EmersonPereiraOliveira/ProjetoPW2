<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

class Attendance_model extends CI_Model {
    
    public function do_insert($dados = NULL) {
        
        try{
            if ($dados != NULL){
                $this->db->insert('attendance', $dados);                  
                redirect("index.php/Attendance/listAttendances/1");
            }else{
                redirect("index.php/Attendance/listAttendances/2");
            }
        }catch(Exception $e){
            redirect("index.php/Attendance/listAttendances/2");
        }         
    }
    
    public function do_delete($id = NULL) {
        
        try{
            if ($id != NULL){
                $this->db->where("id", $id);                
                $this->db->delete('attendance');                  
                redirect("index.php/Attendance/listAttendances/3");
            }else{
                redirect("index.php/Attendance/listAttendances/4");
            }
        }catch(Exception $e){
            redirect("index.php/Attendance/listAttendances/4");
        }         
    }
}