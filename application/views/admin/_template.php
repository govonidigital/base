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
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>"/>
    <link href="<?php echo base_url('assets/fontawesome/css/all.css');?>" rel="stylesheet"/>
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css');?>"/>
<!--<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
<script src="<?php echo base_url('vendor/fancyapps/fancybox/source/jquery.fancybox.js');?>"></script>
<link href="<?php echo base_url('vendor/fancyapps/fancybox/source/jquery.fancybox.css');?>" rel="stylesheet" type="text/css" />-->
</head>
<body>

<div style='background-color:silver;'>
<div class='container'>
        <div class='row justify-content-between align-items-center py-3'>
            <div class='col-md-3'>
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
                            <a href='<?php echo base_url('admin/principal'); ?>' class='mx-2'>Principal</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('admin/galeria'); ?>' class='mx-2'>Galeria</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('admin/banners'); ?>' class='mx-2'>Banners</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('admin/blog'); ?>' class='mx-2'>Blog</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('admin/leads'); ?>' class='mx-2'>Leads</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('admin/email'); ?>' class='mx-2'>Email</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('admin/usuarios'); ?>' class='mx-2'>Usuarios</a>
                            </li>
                            <li class="nav-item">
                            <a href='<?php echo base_url('principal'); ?>' class='mx-2'>Sair</a>
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

<div style='background-color:silver;'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 text-center py-3'>
                Desenvolvido por <a href='https://www.govoni.com.br' target='_blank'>Govoni Digital</a>
            </div>
        </div>
    </div>
</div>                   


</body>
</html>