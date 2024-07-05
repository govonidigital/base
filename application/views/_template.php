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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cookie.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css');?>"/>
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/js/menu.js');?>"></script>
</head>
<body>


<header>
    <div class="interface">
        <a href="<?php echo base_url('Principal') ?>">
          <img src='<?php echo base_url('assets/img/logo.png'); ?>' class="logo">
        </a>

        <nav class="menu-desktop d-none d-md-block">
          <ul>
            <li><a href="<?php echo base_url('') ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Principal</a></li>
            <li><a href="<?php echo base_url('quemsomos') ?>" class="<?= ($this->uri->segment(1) == 'quemsomos') ? 'active' : '' ?>">Quem Somos</a></li>
            <li><a href="<?php echo base_url('blog') ?>" class="<?= ($this->uri->segment(1) == 'blog') ? 'active' : '' ?>">Blog</a></li>
            <li><a href="<?php echo base_url('galeria') ?>" class="<?= ($this->uri->segment(1) == 'galeria') ? 'active' : '' ?>">Galeria</a></li>
            <li><a href="<?php echo base_url('leads') ?>" class="<?= ($this->uri->segment(1) == 'leads') ? 'active' : '' ?>">Leads</a></li>
            <li><a href="<?php echo base_url('contato') ?>" class="<?= ($this->uri->segment(1) == 'contato') ? 'active' : '' ?>">Contato</a></li>
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
                <li><a href="<?php echo base_url('') ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">Principal</a></li>
                <li><a href="<?php echo base_url('quemsomos') ?>" class="<?= ($this->uri->segment(1) == 'quemsomos') ? 'active' : '' ?>">Quem Somos</a></li>
                <li><a href="<?php echo base_url('blog') ?>" class="<?= ($this->uri->segment(1) == 'blog') ? 'active' : '' ?>">Blog</a></li>
                <li><a href="<?php echo base_url('galeria') ?>" class="<?= ($this->uri->segment(1) == 'galeria') ? 'active' : '' ?>">Galeria</a></li>
                <li><a href="<?php echo base_url('leads') ?>" class="<?= ($this->uri->segment(1) == 'leads') ? 'active' : '' ?>">Leads</a></li>
                <li><a href="<?php echo base_url('contato') ?>" class="<?= ($this->uri->segment(1) == 'contato') ? 'active' : '' ?>">Contato</a></li>
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
                echo "<div class='carousel-item $active'>
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
                echo "<div class='carousel-item $active'>
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
        <?php echo $contents;?>
    </div>
    

    <!--------------------- RODAPE -------------------->
  
    <div class="footer"><hr />
      <div class="container">
        <div class="row justify-content-center p-3">
            <div class="col-md-4 text-center mb-1">
                <span>Mapa do Site</span><br />
                <div class="row justify-content-center">
                    <div class="col-sm-6 text-center mt-md-3 mt-0">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('') ?>">Principal</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('quemsomos') ?>">Quem Somos</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('blog') ?>">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center mt-md-3 mt-0">
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
            <form action="<?php echo base_url('');?>" id="" method="post" name="" onsubmit="">
              <span style="font-size: 12px;">Quer receber mais notícias?</span>
              <input type="text" name="email" id="email" class="form-group p-1" placeholder="Digite seu Email">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
        <span class="text-center">
          <center>
            Desenvolvido por<a href="https://www.govoni.com.br/" target="_blank"> Govoni Marketing Digital</a> -  Todos os direitos reservados &copy;
          </center>
        </span>
      </div>
    </div>
  
   
       

    <!--Cookie -->

<script>  
//aqui faz o banner funcionar
        $('.carousel-item').eq(0).addClass('active');

        $(document).ready(function(){
        //verifico se eh mobile para colapsar 
        if( ! /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            
                $("#collapse2").click();
            }
        });
        </script>  
</body>
</html>