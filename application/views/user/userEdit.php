<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view("/usefulScreens/sideBar"); ?>

<div class="col-md-9 col-sm-9" >   
    <div class='col-md-10'>
        <h1 class="page-header">Atualizar Usuário</h1>
    </div>        
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/User/toRegister">Novo Usuário</a>
    </div>
    
    
    <div class="col-md-12">
        <form action="<?= base_url(); ?>index.php/User/saveUpdate" method="POST">
            <input type="hidden" id="id" name="id" value="<?= $usuario[0]->id ?>">
            
            <div class='form-group'>
                <label for="name">Nome</label>
                <input type='text' class='form-control' id='name' name="name" placeholder="Insira seu nome" autofocus required value="<?= $usuario[0]->name?>">                    
            </div>

            <div class='row'>

                <div class='form-group col-md-3'>
                    <label for="cpf">CPF</label>
                    <input type='text' class='form-control' id='cpf' name="cpf" placeholder="Insira seu CPF" required value="<?= $usuario[0]->cpf?>">                    
                </div>
                <div class='form-group col-md-9'>
                    <label for="email">E-mail</label>
                    <input type='email' class='form-control' id='email' name="email" placeholder="Insira seu Email" required value="<?= $usuario[0]->email?>">                    
                </div>

            </div>

            <div class='row' col-md-12>

                <div class='form-group col-md-8'>
                    <label for="password">Senha</label>
                    <input type="button" class="btn btn-block btn-primary" value="Atualizar senha?" data-toggle="modal" data-target="#myModal">                    
                </div>

                <div class='col-md-2'>                        
                    <label for="status">Status</label>
                    <select id='status' name="status" class="form-control" required>
                        <option value='0'>---</option>
                        <option value='1' <?= $usuario[0]->status==1?' selected':''?>>Ativo</option>
                        <option value='2' <?= $usuario[0]->status==2?' selected':''?>>Inativo</option>                                                        
                    </select>
                </div>

                <div class='col-md-2'>                        
                    <label for="level" >Nível</label>
                    <select id='level' name="level" class="form-control" required value="<?= $usuario[0]->nivel?>">
                        <option value='0'>---</option>
                        <option value='1' <?= $usuario[0]->status==1?' selected':''?>>Administrador</option>
                        <option value='2' <?= $usuario[0]->status==2?' selected':''?>>Usuário</option>                                                        
                    </select>
                </div>
            </div>

            <div class='text-right col-md-12'>
                <button type='submit' class='btn btn-success'>Salvar Atualização? </button>
                <button type='reset' class='btn btn-defalt'>Cancelar</button>
            </div>
        </form>
    </div>
</div>


