<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view("/includes/sideBar"); ?>

        <div class="col-sm-9" col-sm-offset-3>
            <div class='col-md-10'>
                <h1 class="page-header">Usuários</h1>
            </div>        
            <div class="col-md-2">
                <a class="btn btn-primary btn-block" href="<?= base_url(); ?>index.php/User/cadastro">Novo Usuário</a>
            </div>
        </div>

    </div>
</div>
