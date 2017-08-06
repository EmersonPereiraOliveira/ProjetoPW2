<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view("/usefulScreens/sideBar"); ?>

<div class="col-md-9 col-sm-9">
    <div class='col-md-10'>
        <h1 class="tituloMargem">Cadastrar Atendimentos</h1>
    </div>        
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/Attendance/toRegister">Novo Atendimento</a>
    </div>
    
    <div class="col-md-12">        
        <!-- Form Helper -->
        <?= form_open("/index.php/Attendance/create")?>
            <!-- Carrega valores para o form_input-->
            <?php
                
            
                //Usar javaScript pra carregar comBoxes de usuarios e Instrutores                            
                
                $description = array(                    
                    'id' => 'description',                    
                    'name' => 'description',
                    'placeholder'=> 'Observações',
                    'class'=> 'form-control ',
                    
                );                                      
                
                $btnEnviar = array(                    
                    'type' => 'submit',
                    'value' => 'Enviar',
                    'class' => 'btn btn-success'                    
                );
                                
                $btnCancelar = array(                    
                    'type' => 'reset',
                    'value' => 'Cancelar',
                    'class' => 'btn btn-default'                    
                );
            ?>
        
        <div class="form-group col-md-offset-9">  
            <label for="">Data/Hora</label>
            <input type="text" value="2017-08-01 12:00:00" name="horary" id="horary">          
        </div>
        
        <div class='row'>
            <div class="form-group col-md-6">    
                <label for=""> Usuário</label>
                    <?php $cont = 0; ?>                    
                    <select class="form-control" id="user" name="user">
                        <?php foreach ($user as $u) { ?>
                        <option value="<?= $u->id; ?>"><?= $u->name; ?></option>
                        <?php }?>
                    </select>        
            </div>
            <div class="form-group col-md-6">    
                <label for=""> Instrutor</label>
                    <?php $cont = 0; ?>                    
                    <select class="form-control" id="instructor" name="instructor">
                        <?php foreach ($instructor as $i) { ?>
                        <option value="<?= $i->id; ?>"><?= $i->name; ?></option>
                        <?php }?>
                    </select>          
            </div>
        </div>
        
            <div class='row'>                
                <div class="form-group col-md-12">    
                    <?= form_label('Observações', 'name')?>            
                    <?= form_textarea($description)?>            
                </div>
                <div class="form-group col-md-2">  
                    
                </div>
                <div class="form-group col-md-2">    
                             
                </div>
            </div>
            
            <div class='text-right col-md-12'>
                <?= form_submit($btnEnviar)?>            
                <?= form_reset($btnCancelar)?>                                            
            </div>
        
        <?= form_close()?>
    </div>
</div>



