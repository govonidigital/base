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

        <style>
            .topo{
                background-color:red;
                color:white;
            }

            .topo a{
                color:white;
            }

            .nav-link{
                color:white!important;
            }

            .rodape{
                background-color:red;
                color:white;
            }

            .rodape a{
                color:white;
            }
        </style>
        
</head>
<body>

<div class='topo'>
    <div class='container'>
        <div class='row py-3'>
            <div class='col-12 col-md-2 justify-content-center align-self-center'>
                <img src='<?php echo base_url('assets/img/logo.png'); ?>' class='img-fluid'>
            </div>
            <div class='col-12 col-md-10 justify-content-center align-self-center'>
                <nav class="navbar navbar-expand-lg navbar-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('') ?>">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('quemsomos') ?>">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('blog') ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('galeria') ?>">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('contato') ?>">Contato</a>
                        </li>

                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>



        <!--------------------- BANNER -------------------->
<?php 
    if(!empty($banners)){
        if($this->uri->segment(1) == 'Principal' or $this->uri->segment(1) == ''){
            echo "
            <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
            <div class='carousel-inner'>";
    
            foreach($banners as $b){
                //escrever o código para exibir os banners
                echo "
                <div class='carousel-item active'>
                    <img class='d-block w-100' src='".base_url('assets/img/banner/'.$b->imagem)."' alt='First slide'>
                </div>
                ";
            }
            echo "
            </div>
                <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>";
        }
    }
 ?>
        
        <!--------------------- BANNER -------------------->

<?php echo $contents;?>


<div class='rodape'>
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                rodape
            </div>
        </div>
    </div>
</div>                   


</body>
</html>