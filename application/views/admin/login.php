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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>"/>
    <link href="<?php echo base_url('assets/fontawesome/css/all.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/> <!-- MDBootstrap CSS -->

    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script> <!-- MDBootstrap JS -->

    <style>
        body{
          font-family: "Montserrat", sans-serif;
        }

        .gradient-custom-2 {
            background: linear-gradient(to right, #90a4be, #27618f, #004a76, #004571);
        }
        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }

        .login {
            text-align: center;
        }

        .login p {
            font-weight: 600;
            font-size: 24px;
            text-align: center;
        }

        .login p::after {
            content: "";
            background: black;
            height: 1px;
            width: 50%;
            display: block;
            margin: 0 auto;
        }

    </style>
</head>
<body class="text-center">
  <section class="h-100 gradient-form">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-8">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="<?php echo base_url('assets/img/logo.png')?>" style="width: 185px;" alt="logo">
                                    </div>

                                    <form class="form-signin" id="form_validate_login" action="<?php echo base_url(); ?>admin/login/loga" method="post">
                                        <div class="login text-center">
                                          <p class="mb-5 mt-5">Login</p>
                                        </div>
                                   
                                        <div class="mb-4 mt-4 text-left">
                                          <label class="form-label" for="email">Email</label>
                                            <input type="email" name="email" class="form-control" style="border: 1px solid #ccc!important; border-radius: 3px;" />
                                        </div>

                                        <div class="mb-4 text-left">
                                          <label class="form-label" for="password">Senha</label>
                                            <input type="password" name="senha"  class="form-control" style="border: 1px solid #ccc!important; border-radius: 3px;" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 p-3" type="submit">Entrar</button>
                                            <a class="text-muted" href="<?php echo base_url(); ?>admin/login/recuperarsenha" class="forPassword">Esqueceu sua senha?</a>  
                                        </div>

                                        <div class="text-muted p-2 text-center">
                                            <p class="mt-5 mb-3 text-muted">&copy; Govoni Marketing Digital 2025</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex align-items-center gradient-custom-2 ">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4 h-100 d-flex-center" style="width:1400px; align-items: center; align-content: center;">
                                    <h4>Govoni Marketing Digital</h4>
                                  <!-- <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
  

</body>
</html>



<!-- <form class="form-signin" id="form_validate_login" action="<?php echo base_url(); ?>admin/login/loga" method="post">
  <img class="img-fluid mb-4" src="<?php echo base_url('assets/img/logo.png'); ?>">
  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  <label for="email" class="sr-only">E-mail</label>
  <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
  <br>
  <label for="senha" class="sr-only">Senha</label>
  <input type="password" name="senha" class="form-control" placeholder="Senha" required>
  <div class="mb-3">
    <a href="<?php echo base_url(); ?>admin/login/recuperarsenha" class="forPassword"> Esqueceu sua senha?</a>
  </div>
  <div class="mb-3">
    <a href="<?php // echo base_url(); ?>admin/login/novologin" class="forPassword"> Criar conta !</a>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; Govoni Marketing Digital 2024</p>
</form>  -->