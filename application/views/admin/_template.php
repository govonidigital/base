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
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    

<!--<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
<script src="<?php echo base_url('vendor/fancyapps/fancybox/source/jquery.fancybox.js');?>"></script>
<link href="<?php echo base_url('vendor/fancyapps/fancybox/source/jquery.fancybox.css');?>" rel="stylesheet" type="text/css" />-->
</head>
<body>
<div class="wrapper">
    <button id="menu-toggle"  class="menu-toggle">
        <i class="fas fa-bars"></i>
    </button>
    <div class="overlay" id="overlay"></div>
    
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="<?php echo base_url('Principal') ?>">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-fluid">
            </a>
        </div>
        <ul class="list-unstyled components px-2 py-3">
            <li><a href="<?php echo base_url('admin/principal'); ?>"><i class="fas fa-home"></i> Principal</a></li>
            <li><a href="<?php echo base_url('admin/galeria'); ?>"><i class="fas fa-images"></i> Galeria</a></li>
            <li><a href="<?php echo base_url('admin/banners'); ?>"><i class="fas fa-image"></i> Banners</a></li>
            <li><a href="<?php echo base_url('admin/blog'); ?>"><i class="fas fa-blog"></i> Blog</a></li>
            <li><a href="<?php echo base_url('admin/leads'); ?>"><i class="fas fa-users"></i> Leads</a></li>
            <li><a href="<?php echo base_url('admin/email'); ?>"><i class="fas fa-envelope"></i> Email</a></li>
            <li><a href="<?php echo base_url('admin/usuarios'); ?>"><i class="fas fa-user"></i> Usuários</a></li>
            <li><a href="<?php echo base_url('principal'); ?>"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="container">
            <?php echo $contents; ?>
        </div>
<!-- 
        <div class="footer">
            <div class="text-center">
                <span>Desenvolvido por <a href="https://www.govoni.com.br" target="_blank">Govoni Marketing Digital</a></span>
            </div>
        </div> -->
    </div>


    
</div>



<script>
document.addEventListener("DOMContentLoaded", function() {
    var menuToggle = document.getElementById("menu-toggle");
    var sidebar = document.getElementById("sidebar");
    var overlay = document.getElementById("overlay");

    menuToggle.addEventListener("click", function() {
        sidebar.classList.toggle("active");
    });

    overlay.addEventListener("click", function() {
        sidebar.classList.remove("active");
    });
});
</script>


</body>
</html>