<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view("/usefulScreens/sideBar"); ?>



<div class="col-md-9 col-sm-9" >
    
    <div class='col-md-10'>
        <h1 class="tituloMargem">Atendimentos</h1>
    </div>        
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/Attendance/toRegister">Novo Atendimento</a>
    </div>
    
    
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
            <form id="form" method="POST">
                Pesquisar por: <input class="form-control" type="text" name="campo" placeholder="Ex: ID do usuario " id="campo">
            </form>
            
            <label></label>
            </div>
        </div>
        <table class="table table-striped" id="resultado">
            <tr>
                <th>ID</th>
                <th>Instrutor</th>
                <th>Aluno</th>
                <th>Data/Horário</th>
                <th>Descrição</th>
                <th></th>
                
            </tr>

            <?php foreach ($attendance as $a) { ?>                    

                <tr>
                    <td><?= $a->id; ?></td> 
                    <td><?= $a->instructor; ?></td> 
                    <td><?= $a->user; ?></td>                     
                    <td><?= $a->horary; ?></td> 
                    <td><?= $a->description; ?></td> 
                    <td>
                        <a href="<?= base_url('index.php/Attendance/update/' . $a->id) ?>" class="btn btn-primary btn-group">Atualizar</a>
                        <a href="<?= base_url('index.php/Attendance/delete/' . $a->id) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir?');">Remover</a>
                    </td>                         
                </tr>
            <?php } ?>                    
        </table>
    </div>
</div>
 
