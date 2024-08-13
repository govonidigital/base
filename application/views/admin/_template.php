<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="title" content="<?php if (isset($seo_title)){echo $seo_title;}?>"/>
    <meta name="description" content="<?php if (isset($seo_description)){echo $seo_description;}?>"/>
    <meta name="Keywords" content="<?php if (isset($seo_keywords)){echo $seo_keywords;}?>" />
    <meta name="language" content="pt-BR" />
    <meta name="target_country" content="br" />
    <meta name="rating" content="general"/>
    <meta name="robots" content="index,follow"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name="author" content="Felipe Govoni" />
    <meta name="reply-to" content="contato@govoni.com.br"/>
    <title><?php if (isset($seo_title)){echo $seo_title;}?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>"/>
    <link href="<?php echo base_url('assets/fontawesome/css/all.css');?>" rel="stylesheet"/>
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script> 
    
<!--<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
<script src="<?php echo base_url('vendor/fancyapps/fancybox/source/jquery.fancybox.js');?>"></script>
<link href="<?php echo base_url('vendor/fancyapps/fancybox/source/jquery.fancybox.css');?>" rel="stylesheet" type="text/css" />-->
</head>
<body>
<!-- <div style="background-color: #005380;">
    <div class="text-right mx-5 mt-2 mb-2 p-1">
        <a href="https://wa.me/5551984728718" target="_blank">
            <i class="fab fa-whatsapp mx-2" style='color:white; font-size:28px;'></i>
        </a>
        <a href="https://www.instagram.com/govonidigital/" target="_blank">
            <i class="fab fa-instagram mx-2" style='color:white; font-size:28px;'></i>
        </a>
        <a href="https://www.facebook.com/govonidigital" target="_blank">
            <i class="fab fa-facebook mx-2" style='color:white; font-size:28px;'></i>
        </a>
        <a href="https://www.linkedin.com/company/govonidigital/" target="_blank">
            <i class="fab fa-linkedin mx-2" style='color:white; font-size:28px;'></i>
        </a>
        <a href="https://www.youtube.com/@govoni.digital" target="_blank">
            <i class="fab fa-youtube mx-2" style='color:white; font-size:28px;'></i>
        </a>
    </div>
</div> -->
<div class='topoadmin'>
    <div class='container-fluid'>
        <div class='row justify-content-between align-items-center py-3'>
            <div class='col-6 offset-3 col-md-2 offset-md-0'>
                <a href="<?php echo base_url('Principal') ?>"><img src='<?php echo base_url('assets/img/logo.png'); ?>' class="img-fluid"></a>
            </div>
            <div class='col-md-9'>
                <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/principal'); ?>'>Principal</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/galeria'); ?>'>Galeria</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/banners'); ?>'>Banners</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/blog'); ?>'>Blog</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/leads'); ?>' >Leads</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/email'); ?>' >Email</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('admin/usuarios'); ?>' >Usuarios</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='<?php echo base_url('principal'); ?>'>Sair</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <?php echo $contents;?>
</div>

<div class="footer">
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center py-3'>
                <span>Desenvolvido por <a href='https://www.govoni.com.br' target='_blank'>Govoni Marketing Digital</a></span>
            </div>
        </div>
    </div>
</div>                   


</body>
</html>