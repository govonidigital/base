<?php
foreach ($email as $e){}
?>
<div class='container'>
<div class="row">
    <script>

        var a = Math.floor(Math.random() * 10);
        var b = Math.floor(Math.random() * 10);
        var total = a + b;

        $( document ).ready(function() {
            $( "#captcha" ).html( a + "+"+ b + "=");
            $( "#total" ).val( a +b );
        });


        function validateForm() {

            if (document.forms["form"]["total"].value != document.forms["form"]["validacao"].value) {
                alert("Valor inválido");
                return false;
            }
        }

    </script>
   
    <div class='col-12'>
        <center>
            <hr class="hr"/>
            <h3>CONTATO</h3>
            <hr class="hr"/>
        </center>
    </div>
    <div class="col-12">
        <br /><br />
        <p>Fale conosco pelos meios de contato informados ou utilizando o formulário abaixo. Responderemos o mais breve possível!</p><br /><br />
    </div>

	<div class="col-12 col-md-6">
        
		<form action="<?php echo base_url('contato/envia');?>" id="form" method="post" name="form" onsubmit="return validateForm()">
			<div class="form-group">
				<input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" /></div>
			<div class="form-group">
				<input class="form-control" id="telefone" name="telefone" placeholder="Celular" type="text" /></div>
			<div class="form-group">
				<input class="form-control" id="email" name="email" placeholder="Email" type="text" /></div>
			<div class="form-group">
				<textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Mensagem"></textarea></div>

                Resolva o cálculo para enviar o formulario<br> <span id="captcha"></span>
            <input type="text" id='validacao' name="validacao" value="">
            <input type="hidden" id='total' name="total" value=""><button type="button" class="btn btn-secondary">Enviar</button>

		</form>
	</div>
    <div class="col-12 col-md-6">

        <span><?php echo $e->nome_email;?><br></span><span>
        Rua XXXXXXX- CEP: 99999-999 - Porto Alegre/RS<br> 
        CNPJ: XXXXXXXXXXXX-XXXX<br> 
        <i class="fas fa-phone"></i>  (99) 99999-9999<br>
        <i class="far fa-envelope"></i>
        <?php echo $e->mail_to;?>
    </div>
    <div class="col-12">
        <br /><br />
    </div>
</div>
</div>