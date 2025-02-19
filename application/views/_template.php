<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="title" content="<?php if (isset($seo_title)) {
    echo $seo_title;
  } ?>" />
  <meta name="description" content="<?php if (isset($seo_description)) {
    echo $seo_description;
  } ?>" />
  <meta name="Keywords" content="<?php if (isset($seo_keywords)) {
    echo $seo_keywords;
  } ?>" />
  <meta name="language" content="pt-BR" />
  <meta name="target_country" content="br" />
  <meta name="rating" content="general" />
  <meta name="robots" content="index,follow" />
  <meta name="revisit-after" content="1 days" />
  <meta name="author" content="Felipe Govoni" />
  <meta name="reply-to" content="contato@govoni.com.br" />
  <title><?php if (isset($seo_title)) {
    echo $seo_title;
  } ?></title>

  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
  <link href="<?php echo base_url('assets/fontawesome/css/all.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/cookie.css'); ?>" />
  <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/menu.js'); ?>"></script>


  <style>
    * {
      box-sizing: border-box;
      font-family: "Montserrat", sans-serif;
      -webkit-text-size-adjust: auto;
    }

    * {
      scrollbar-width: thin;
      scrollbar-color: #fff #eeeeee;
    }

    *::-webkit-scrollbar {
      width: 12px;
    }

    *::-webkit-scrollbar-track {
      background: #ffffff;
    }

    *::-webkit-scrollbar-thumb {
      background-color: rgb(0, 0, 0);
      border-radius: 20px;
      border: 1px solid #000000;
    }

    html,
    body {
      height: 100%;
      transition: 1s ease;
    }

    body {
      display: flex;
      flex-direction: column;
      margin: 0;
    }

    /* NAVBAR */

    .topo {
      background-color: #ffffff;
      margin: 0;
      top: 0;
    }

    .topo .navbar-nav .nav-link {
      color: black;
      font-size: 18px;
      font-weight: 300;
      margin-right: 40px;
      transition: 0.1s;
    }

    .topo .navbar-nav .nav-link:hover {
      color: black;
      font-size: 18px;
      font-weight: 600;
      transform: scale(1.02);
    }

    .topo .logo {
      max-width: 240px;
      height: auto;
    }

    @media screen and (max-width: 768px) {
      .topo .logo {
        max-width: 100%;
        height: auto;
      }
    }

    /* FIM NAVBAR */
    /* header */

    .interface {
      max-width: 1280px;
      margin: 0 auto;
    }

    .flex {
      display: flex;
    }

    .btn-contato button {
      padding: 14px 14px;
      font-size: 18px;
      font-weight: 600;
      background-color: #fff;
      border: 0;
      border-radius: 20px;
      cursor: pointer;
      transition: 0.1s;
    }

    button:hover,
    form .btn-enviar input:hover {
      box-shadow: 0px 0px 8px #fff;
      transform: scale(1.05);
    }

    header {
      padding: 20px 4%;
    }

    .logo {
      max-width: 240px !important;
      height: auto;
    }

    @media screen and (max-width: 768px) {
      .logo {
        max-width: 200px !important;
        height: auto;
        margin-left: 10px;
      }
    }

    header>.interface {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header a {
      font-size: 18px;
      color: #000;
      text-decoration: none;
      display: inline-block;
      transition: 0.2s;
    }

    header nav.menu-desktop ul li a.active {
      border-bottom: 1px solid #000;
    }

    header nav.menu-desktop a:hover {
      color: #000;
      transform: scale(1.05);
      text-decoration: none;
    }

    header nav ul {
      list-style-type: none;
    }

    header nav.menu-desktop ul {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0;
      margin: 0;
    }

    header nav.menu-desktop ul li {
      display: inline-block;
      padding: 10px 30px;
    }

    @media screen and (max-width: 1366px) {
      header nav.menu-desktop ul li {
        display: inline-block;
        padding: 10px 20px;
      }
    }

    .banner_pc img {
      max-height: 800px;
      width: 100%;
      object-fit: cover;
    }

    .banner_mobile img {
      height: 500px;
      width: 100%;
      object-fit: cover;
    }

    /* ESTILO DO MENU MOBILE */
    .btn-abrir-menu {
      display: block;
      color: #000;
      font-size: 40px;
      cursor: pointer;
    }

    .menu-mobile {
      background-color: #fff;
      height: 100vh;
      position: fixed;
      top: 0;
      right: 0;
      z-index: 99999;
      width: 0%;
      overflow: hidden;
      transition: 0.5s;
    }

    .menu-mobile.abrir-menu {
      width: 70%;
    }

    .menu-mobile.abrir-menu~.overlay-menu {
      display: block;
    }

    .menu-mobile .btn-fechar {
      padding: 20px 5%;
      color: #000;
      font-size: 30px;
      cursor: pointer;
    }

    .menu-mobile nav ul {
      text-align: right;
    }

    .menu-mobile nav ul li a {
      color: #000 !important;
      font-size: 20px;
      font-weight: 300;
      padding: 20px 8%;
      display: block;
      transition: 0.2s;
    }

    .menu-mobile nav ul li a:hover {
      background-color: #000;
      color: #fff !important;
      text-decoration: none;
      transform: scale(1.1);
    }

    .overlay-menu {
      background-color: #000000df;
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 88888;
      display: none;
    }

    /* COMEÇO RODAPE */

    .main-content {
      flex: 1;
    }

    .footer {
      background-color: #212121 !important;
      color: white;
      font-weight: 300;
      padding: 20px 4%;
    }

    .footer span {
      color: white;
      font-weight: 600;
      align-items: center;
      align-self: center;
    }

    .footer .icon-container i {
      font-size: 24px;
      margin-right: 5px;
      padding: 10px;
      border-radius: 50%;
      color: white;
    }

    .footer .icon-container a {
      text-decoration: none;
      cursor: pointer;
    }

    .footer i {
      color: white;
      transition: 0.5s;
    }

    .footer i:hover {
      transform: scale(1.2);
    }

    .footer .nav-link {
      text-decoration: none;
      color: white;
      position: relative;
      display: inline-block;
      padding: 10px 0;
    }

    .footer .nav-link::after {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -2px;
      left: 50%;
      background-color: white;
      transition: all 0.3s ease-in-out;
      transform: translateX(-50%);
    }

    .footer .nav-link:hover {
      color: white;
    }

    .footer .nav-link:hover::after {
      width: 100%;
      color: white;
    }

    .footer .nav-item a {
      font-size: 14px;
    }

    .footer .nav-item {
      display: inline-block;
      margin: 0 15px;
    }

    .footer span a {
      text-decoration: none;
      transition: 0.2s;
    }

    .footer span a {
      text-decoration: none;
      transform: scale(1.2);
    }

    /* FIM RODAPÉ */

    /* GALERIA  */

    .galeria .card {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px 4%;
      width: 100%;
      height: auto;
      box-shadow: 0 0 3px #000;
      transition: 0.1s;
    }

    .galeria .card:hover {
      transform: scale(1.01);
    }

    .galeria .card .card-body {
      padding: 20px 1%;
      height: 100%;
      top: 0;
    }

    .galeria p {
      font-size: 18px;
      font-weight: 300;
      color: #000;
    }

    .galeria .btnvergaleria button {
      background-color: #212121;
      border: 1px solid #212121;
      border-radius: 5px;
      padding: 10px 10px;
      transition: 0.5s;
      width: 120px;
      height: auto;
    }

    .galeria .btnvergaleria button:hover {
      transform: scale(1.05);
    }

    .galeria .btnvergaleria button a {
      color: white;
      text-decoration: none;
    }

    /* FIM GALERIA */

    /* CONTATO */

    .inputGroup input {
      font-size: 100%;
      padding: 0.8em;
      outline: none;
      border: 2px solid #ccc;
      background-color: transparent;
      border-radius: 20px;
      width: 100%;
    }

    .inputGroup textarea {
      font-size: 100%;
      padding: 0.8em;
      outline: none;
      border: 2px solid #ccc;
      background-color: transparent;
      border-radius: 20px;
      width: 100%;
    }

    .inputGroup :is(input:focus, input:valid) {
      border-color: #ccc;
    }

    .inputGroup textarea:focus,
    .inputGroup textarea:valid {
      border-color: #ccc;
    }

    .hero-banner {
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      text-align: center;
      height: 200px;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(242, 240, 240, 0.3);
    }

    .hero-content {
      position: relative;
      z-index: 1;
    }

    .hero-content h2 {
      color: white;
      font-size: 49px;
      font-weight: 900;
    }

    @media (max-width: 767px) {
      .col-md-6 {
        text-align: center;
        margin-bottom: 20px;
      }
    }

    .btncontatoenviar {
      padding: 12.5px 30px;
      border: 0;
      border-radius: 100px;
      background-color: #212121;
      color: #ffffff;
      font-weight: Bold;
      transition: all 0.5s;
      -webkit-transition: all 0.5s;
    }

    .btncontatoenviar:hover {
      background-color: #000;
      box-shadow: 0 0 5px #000;
      transform: scale(1.1);
    }

    .btncontatoenviar:active {
      background-color: #212121;
      transition: all 0.25s;
      -webkit-transition: all 0.25s;
      box-shadow: none;
      transform: scale(0.98);
    }

    #placeholder-text::placeholder {
      color: black;
      letter-spacing: 1px;
      font-size: 14px;
  }

    /* FIM CONTATO */
  </style>
</head>

<body>


  <header>
    <div class="interface">
      <a href="<?php echo base_url('Principal') ?>">
        <img src='<?php echo base_url('assets/img/logo.png'); ?>' class="logo">
      </a>

      <nav class="menu-desktop d-none d-md-block">
        <ul>
          <li><a href="<?php echo base_url('') ?>"
              class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Principal</a></li>
          <li><a href="<?php echo base_url('quemsomos') ?>"
              class="<?= ($this->uri->segment(1) == 'quemsomos') ? 'active' : '' ?>">Quem Somos</a></li>
          <li><a href="<?php echo base_url('blog') ?>"
              class="<?= ($this->uri->segment(1) == 'blog') ? 'active' : '' ?>">Blog</a></li>
          <li><a href="<?php echo base_url('galeria') ?>"
              class="<?= ($this->uri->segment(1) == 'galeria') ? 'active' : '' ?>">Galeria</a></li>
          <li><a href="<?php echo base_url('leads') ?>"
              class="<?= ($this->uri->segment(1) == 'leads') ? 'active' : '' ?>">Leads</a></li>
          <li><a href="<?php echo base_url('contato') ?>"
              class="<?= ($this->uri->segment(1) == 'contato') ? 'active' : '' ?>">Contato</a></li>
        </ul>
      </nav>

      <div class="btn-abrir-menu d-block d-md-none" id="btn-menu">
        <i class="fas fa-bars mx-2"></i>
      </div>

      <div class="menu-mobile" id="menu-mobile">
        <div class="btn-fechar">
          <i class="fas fa-times"></i>
        </div>

        <nav>
          <ul>
            <li><a href="<?php echo base_url('') ?>"
                class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Principal</a></li>
            <li><a href="<?php echo base_url('quemsomos') ?>"
                class="<?= ($this->uri->segment(1) == 'quemsomos') ? 'active' : '' ?>">Quem Somos</a></li>
            <li><a href="<?php echo base_url('blog') ?>"
                class="<?= ($this->uri->segment(1) == 'blog') ? 'active' : '' ?>">Blog</a></li>
            <li><a href="<?php echo base_url('galeria') ?>"
                class="<?= ($this->uri->segment(1) == 'galeria') ? 'active' : '' ?>">Galeria</a></li>
            <li><a href="<?php echo base_url('leads') ?>"
                class="<?= ($this->uri->segment(1) == 'leads') ? 'active' : '' ?>">Leads</a></li>
            <li><a href="<?php echo base_url('contato') ?>"
                class="<?= ($this->uri->segment(1) == 'contato') ? 'active' : '' ?>">Contato</a></li>
          </ul>
        </nav>
      </div>
      <div class="overlay-menu" id="overlay-menu"></div>
    </div>
  </header>

  <!--------------------- BANNER -------------------->

  <?php
  // Banner for PC
  if (!empty($banners)) {
    if ($this->uri->segment(1) == 'Principal' || $this->uri->segment(1) == '') {
      echo "<div class='d-none d-md-block'>
                    <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                        <ol class='carousel-indicators'>";

      $i = 0;
      foreach ($banners as $b) {
        if ($b->tipo == 'PC' || $b->tipo == 'AMBOS') {
          $active = $i == 0 ? 'active' : '';
          echo "<li data-target='#carouselExampleControls' data-slide-to='$i' class='$active'></li>";
          $i++;
        }
      }

      echo "</ol>
                        <div class='carousel-inner'>";

      $i = 0;
      foreach ($banners as $b) {
        if ($b->tipo == 'PC' || $b->tipo == 'AMBOS') {
          $active = $i == 0 ? 'active' : '';
          echo "<div class='carousel-item banner_pc $active'>
                                          <a href='" . $b->link . "'>
                                              <img src='" . base_url('assets/img/banner/' . $b->imagem) . "' class='d-none d-md-block w-100' alt=''>
                                          </a>
                                        </div>";
          $i++;
        }
      }

      echo "</div>
                      </div>
                    </div>";
    }
  }

  // Banner for Mobile
  if (!empty($banners)) {
    if ($this->uri->segment(1) == 'Principal' || $this->uri->segment(1) == '') {
      echo "<div class='d-block d-md-none'>
                          <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                              <ol class='carousel-indicators'>";

      $i = 0;
      foreach ($banners as $b) {
        if ($b->tipo == 'MOBILE' || $b->tipo == 'AMBOS') {
          $active = $i == 0 ? 'active' : '';
          echo "<li data-target='#carouselExampleControls' data-slide-to='$i' class='$active'></li>";
          $i++;
        }
      }

      echo "</ol>
                              <div class='carousel-inner'>";

      $i = 0;
      foreach ($banners as $b) {
        if ($b->tipo == 'MOBILE' || $b->tipo == 'AMBOS') {
          $active = $i == 0 ? 'active' : '';
          echo "<div class='carousel-item banner_mobile $active'>
                                                <a href='" . $b->link . "'>
                                                  <img src='" . base_url('assets/img/banner/' . $b->imagem) . "' class='d-block d-md-none w-100' alt='...'>
                                                </a>
                                              </div>";
          $i++;
        }
      }

      echo "</div>
                      </div>
                    </div>";
    }
  }
  ?>


  <!--------------------- BANNER -------------------->
  <div class="main-content">
    <?php echo $contents; ?>
  </div>


  <!--------------------- RODAPE -------------------->

  <div class="footer">
    <hr />
    <div class="container">
      <div class="row justify-content-center p-3">
        <div class="col-md-4 text-center mb-1">
          <span>Mapa do Site</span><br />
          <div class="row justify-content-center">
            <div class="col-sm-4 text-center mt-md-3 mt-0">
              <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('') ?>">Principal</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('quemsomos') ?>">Quem Somos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('blog') ?>">Blog</a></li>
              </ul>
            </div>
            <div class="col-sm-4 text-center mt-md-3 mt-0">
              <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('galeria') ?>">Galeria</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('leads') ?>">Leads</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contato') ?>">Contato</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-center mb-1">
          <span>Redes Sociais</span><br />
          <div class="icon-container mt-3">
            <a href="" target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4 text-center mb-1"><span>Newsletter</span><br>
          <form action="<?php echo base_url(''); ?>" id="" method="post" name="" onsubmit="">
            <span style="font-size: 12px;">Quer receber mais notícias?</span>
            <input type="text" name="email" id="placeholder-text" class="form-group p-2" style="border-radius: 5px; border: 1px solid #000;" placeholder="Digite seu Email">
            <button type="submit" class="btn btn-primary p-2" style="font-size: 14px; letter-spacing:1px;">Enviar</button>
          </form>
        </div>
      </div>
      <span class="text-center">
        <center>
          Desenvolvido por<a href="https://www.govoni.com.br/" target="_blank"> Govoni Marketing Digital</a> - Todos os
          direitos reservados &copy;  
        </center>
      </span>
    </div>
  </div>




  <!--Cookie -->

  <script>
    //aqui faz o banner funcionar
    $('.carousel-item').eq(0).addClass('active');

    $(document).ready(function () {
      //verifico se eh mobile para colapsar 
      if (! /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

        $("#collapse2").click();
      }
    });
  </script>
</body>

</html>