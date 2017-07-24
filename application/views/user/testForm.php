<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view("/usefulScreens/sideBar"); ?>

<div class="col-md-9 col-sm-9">
    <div class='col-md-10'>
        <h1 class="tituloMargem">Cadastrar Teste Usuários</h1>
    </div>        
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/User/toRegister">Novo Usuário</a>
    </div>
    
    <div class="col-md-12">        
        <!-- Form Helper -->
        <?= form_open("/index.php/User/formTestRec")?>
            <!-- Carrega valores para o form_input-->
            <?php
                $name = array(
                    'type' => 'text',
                    'id' => 'name',
                    'name' => 'name',
                    'placeholder'=> 'Insira seu nome',
                    'class'=> 'form-control'
                );                
                
                $cpf = array(
                    'type' => 'text',
                    'id' => 'cpf',
                    'name' => 'cpf',
                    'placeholder'=> 'Insira seu CPF',
                    'class'=> 'form-control'
                );
                
                $email = array(
                    'type' => 'email',
                    'id' => 'email',
                    'name' => 'email',
                    'placeholder'=> 'Insira seu E-mail',
                    'class'=> 'form-control'
                );
                
                $password = array(
                    'type' => 'password',
                    'id' => 'password',
                    'name' => 'password',
                    'placeholder'=> 'Insira sua Senha',
                    'class'=> 'form-control'
                );
                
                $levelOptions = array(                    
                    '0' => '',
                    '1' => 'Administrador',
                    '2' => 'usuário'                    
                );
                
                $level = array(                    
                    '0' => '',
                    '1' => 'Administrador',
                    '2' => 'usuário'                    
                );
                
                
            ?>
        
        <div class="form-group">    
            <?= form_label('Nome', 'name')?>            
            <?= form_input($name)?>            
        </div>
        
        <div class='row'>
            <div class="form-group col-md-3">    
                <?= form_label('CPF', 'name')?>            
                <?= form_input($cpf)?>            
            </div>
            <div class="form-group col-md-9">    
                <?= form_label('E-mail', 'name')?>            
                <?= form_input($email)?>            
            </div>
        </div>
        
            <div class='row'>                
                <div class="form-group col-md-8">    
                    <?= form_label('Senha', 'name')?>            
                    <?= form_password($password)?>            
                </div>
                <div class="form-group col-md-2">    
                    <?= form_label('Nível', 'name')?>            
                    <?= form_dropdown("level", $levelOptions, $level)?>            
                </div>
            </div>
        
        <?= form_close()?>
    </div>
</div>


