<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view("/includes/sideBar"); ?>

        <div class="col-sm-9" col-sm-offset-3>
            <div class='col-md-10'>
                <h1 class="page-header">Cadastrar Usuários</h1>
            </div>        
            
            <div class="col-md-2">
                <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/User/cadastro">Novo Usuário</a>
            </div>
        </div>
        
        <div class="col-md-offset-3 col-md-9 ">
            <form>
                <div class='form-group'>
                    <label for="name">Nome</label>
                    <input type='text' class='form-control' id='name' placeholder="Insira seu nome">                    
                </div>
                
                <div class='row'>
                    
                    <div class='form-group col-md-3'>
                        <label for="cpf">CPF</label>
                        <input type='text' class='form-control' id='cpf' placeholder="Insira seu CPF">                    
                    </div>
                    <div class='form-group col-md-9'>
                        <label for="email">E-mail</label>
                        <input type='email' class='form-control' id='email' placeholder="Insira seu Email">                    
                    </div>
                    
                </div>
                
                <div class='row' col-md-12>
                    
                    <div class='form-group col-md-8'>
                        <label for="password">Senha</label>
                        <input type='password' class='form-control' id='password' placeholder="Insira sua Senha">                    
                    </div>

                    <div class='col-md-2'>                        
                        <label for="status">Status</label>
                        <select id='status' class="form-control">
                            <option value='0'>---</option>
                            <option value='1'>Ativo</option>
                            <option value='2'>Inativo</option>                                                        
                        </select>
                    </div>
                    
                    <div class='col-md-2'>                        
                        <label for="nivel">Status</label>
                        <select id='status' class="form-control">
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
</div>