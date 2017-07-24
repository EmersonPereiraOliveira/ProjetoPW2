<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php $this->load->view('/usefulScreens/header'); ?>
  
<div>
    <div>
        <img src="<?= base_url()?>/assets/img/fitness.jpg" class="img-responsive" class="fitness">
    </div>
</div>

    <?php $this->load->view('/usefulScreens/sideBar'); ?>

<?php $this->load->view('/usefulScreens/footer'); ?>

<script href="<?= base_url(); ?>assets/js/jquery.js"></script>

<script href="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>



