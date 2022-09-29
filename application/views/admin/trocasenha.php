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
        <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet"/>


        <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.js');?>"></script>

 </head>

 
<body class="text-center">
 
<form class="form-signin" id="form_validate_login" action="<?php echo base_url(); ?>admin/login/salva_trocasenha" method="post">
  <img class="mb-4" src="" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Cadastrar nova senha</h1>
  <input type="hidden" name="uri3" id="uri3" class="form-control" value="<?php echo $ts->id_cliente; ?>" />
  <label for="nova" class="sr-only">Nova senha</label>
  <input type="password" name="nova" id="nova" class="form-control" placeholder="Senha" required autofocus>
  <label for="nova_repete" class="sr-only">Nova Senha (insira novamente)</label>
  <input type="password" name="nova_repete" id="nova_repete" class="form-control" placeholder="Senha" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
</form>

</body>


</html>