<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<nav class="container-fluid navbar navbar-inverse navbar-fixed-top" style="background-color:#BA55D3" >
    
    <div class="container">            
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:#FFFFFF">Inicial</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" style="color:#FFFFFF">Sobre</a>
                </li>
                <li>
                    <a href="#" style="color:#FFFFFF">Serviços</a>
                </li>
                <li>
                    <a href="#" style="color:#FFFFFF">Contato</a>
                </li>
                <li >
                    <a href="<?= base_url()?>/index.php/DashBoard/logOut"  style="color:#FFFFFF">LogOut?</a>
                </li>
                <li>
                    <a href="<?= base_url()?>/index.php/DashBoard/index" style="color:#FFFFFF">DashBoard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
