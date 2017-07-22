<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view("/includes/header");

$this->load->view("/includes/menu");

if(!empty($page_principal))
    $this->load->view("/includes/" . $page_principal);



//if(!empty($create))
    //$this->load->view("/telas/" . $create);

$this->load->view("/includes/footer");

