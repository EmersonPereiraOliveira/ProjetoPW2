<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view("/usefulScreens/sideBar"); ?>


<div class="col-md-9 col-sm-9" >
    <div class='col-md-10'>
        <h1 class="tituloMargem">Usuários</h1>
    </div>        
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/User/toRegister">Novo Usuário</a>
    </div>
    
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Nível</th>
                <th>Status</th>
                <th></th>
                
            </tr>

            <?php foreach ($user as $u) { ?>                    

                <tr>
                    <td><?= $u->id; ?></td> 
                    <td><?= $u->name; ?></td> 
                    <td><?= $u->email; ?></td> 
                    <!--Refazer isso aqui, mostrar administrador-->                    
                    <!--Refazer isso aqui, mostrar administrador-->                            
                    <td><?= $u->level == 2 ? "Usuário" : "Instrutor"; ?></td> 
                    <td><?= $u->status == 1 ? "Ativo" : "Inativo"; ?></td> 
                    <td>
                        <a href="<?= base_url('index.php/User/update/' . $u->id) ?>" class="btn btn-primary btn-group">Atualizar</a>
                        <a href="<?= base_url('index.php/User/delete/' . $u->id) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir?');">Remover</a>
                    </td>                         
                </tr>
            <?php } ?>                    
        </table>
    </div>
</div>

