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


        <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script>

        <style>
            .topo{
                background-color:#e5dadd;
                color:black;
            }

            .topo a{
                color:black;
            }

            .nav-link{
                color:black!important;
            }

            .rodape{
                background-color:#e5dadd;
                color:black;
            }

            .rodape a{
                color:black;
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

    <!--------------------- RODAPE -------------------->
    <div class='rodape'>
        <div class='container'>
            <div class='row'>
                <div class="col-12 text-center">
                    Desenvolvido por <a target='_blank' href="http://www.govoni.com.br">Govoni Soluções Digitais</a>
                </div>
            </div>
        </div>
    </div>            

    <!--Cookie -->
    <?php 

    if ($cookie_lgpd == true){ ?>
        
    <div id="my-cookie-modal" class="cookie-modal">
    <div class="cookie-modal-content">
    <!--Caso queira colocar o titulo <div class="cookie-modal-header">
        <p>Cookie Policy</p>
        </div> -->
        <div class="cookie-modal-body">
        <p class="cookie-content m-0">
            Este site usa cookies para melhorar sua experiência enquanto você navega pelo site. Os cookies são categorizados em “essenciais” e de “mídias”. Os cookies que são categorizados como “essenciais” são armazenados no seu navegador, pois são necessários para o funcionamento das principais funções do site. Estes cookies serão mantidos independentemente de seu consentimento.
            Também usamos cookies de “mídias” compartilhados com terceiros que nos ajudam a analisar e entender como você usa este site, possibilitando interações futuras com você. Estes cookies serão armazenados em seu navegador apenas com o seu consentimento e você tem a opção de cancelar esses cookies acessando os detalhes de nossa política. Contudo, importante informar que a desativação de alguns desses cookies poderá afetar sua experiência de navegação.”
            Detalhe sobre cookies essenciais: Os cookies “essenciais” são absolutamente necessários para o funcionamento adequado do site. Esta categoria inclui apenas cookies que garantem funcionalidades básicas e recursos de segurança do site. Esses cookies não armazenam nenhuma informação pessoal e serão utilizados independentemente de seu consentimento com respaldo legal.
            Detalhes sobre cookies de mídia: Quaisquer cookies que possam não ser particularmente necessários (“essenciais”) para o funcionamento do site e sejam usados especificamente para coletar dados pessoais do usuário por meio de análises, anúncios e outros conteúdos incorporados são denominados cookies de “mídia”. Esses cookies somente serão armazenados com o consentimento do usuário.
        </p>
        <span class="cookie-close">Prosseguir</span>
        </div>
        <div class="cookie-modal-footer">
        <!--<span class="cookie-footer-item"><a target="_blank" href=""></a></span>-->
        <span class="cookie-footer-item"><a target="_blank" href="https://goadopt.io/blog/cookies-e-lgpd/">Saiba mais</a></span>

        </div>
    </div>
    </div>
    <?php } ?>
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

<script src="<?php echo base_url('assets/js/cookie.js');?>"></script>
</html>