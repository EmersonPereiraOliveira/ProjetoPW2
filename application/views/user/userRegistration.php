<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view("/usefulScreens/sideBar"); ?>

<div class="container-fluid col-md-9 col-md-offset-3" >
    <div class='col-md-10'>
        <h1 class="page-header">Cadastrar Usuários</h1>
    </div>        
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/User/toRegister">Novo Usuário</a>
    </div>
    
    <div class="col-md-12">
        <form action="<?= base_url(); ?>index.php/User/saveRegistration" method="POST">
            <div class='form-group'>
                <label for="name">Nome</label>
                <input type='text' class='form-control' id='name' name="name" placeholder="Insira seu nome" autofocus required>                    
            </div>

            <div class='row'>

                <div class='form-group col-md-3'>
                    <label for="cpf">CPF</label>
                    <input type='text' class='form-control' id='cpf' name="cpf" placeholder="Insira seu CPF" required>                    
                </div>
                <div class='form-group col-md-9'>
                    <label for="email">E-mail</label>
                    <input type='email' class='form-control' id='email' name="email" placeholder="Insira seu Email" required>                    
                </div>

            </div>

            <div class='row' col-md-12>

                <div class='form-group col-md-8'>
                    <label for="password">Senha</label>
                    <input type='password' class='form-control' id='password' name="password" placeholder="Insira sua Senha" required>                    
                </div>

                <div class='col-md-2'>                        
                    <label for="status">Status</label>
                    <select id='status' name="status" class="form-control" required>
                        <option value='0'>---</option>
                        <option value='1'>Ativo</option>
                        <option value='2'>Inativo</option>                                                        
                    </select>
                </div>

                <div class='col-md-2'>                        
                    <label for="level" >Nível</label>
                    <select id='level' name="level" class="form-control" required>
                        <option value='0'>---</option>
                        <option value='1'>Administrador</option>
                        <option value='2'>Usuário</option>                                                        
                    </select>
                </div>
            </div>

            <div class='text-right col-md-12'>
                <button type='submit' class='btn btn-success'>Enviar </button>
                <button type='reset' class='btn btn-defalt'>Cancelar</button>
            </div>
        </form>
    </div>
</div>


