<script>
    var a = Math.floor(Math.random() * 10);
    var b = Math.floor(Math.random() * 10);
    var total = a + b;

    $( document ).ready(function() {
        $( "#captcha" ).html( a + "+"+ b + "=");
        $( "#total" ).val( a +b );
    });

    function validateForm() {
        return true;
            if (document.forms["form"]["total"].value != document.forms["form"]["validacao"].value) {
            alert("Valor inválido");
        return false;
        }    
}
</script>
   
    <div class="hero-banner" style="background-color: ">
    <div class="hero-overlay"></div>
        <div class="hero-content container text-center" id="blogBanner"><br><br><br>
            <h2 style="color: black;">Leads</h2>
        </div>
    </div>

<div class='container'>
    <div class="row">
	    <div class="col-12 col-md-6 mt-5 mb-5">
		    <form action="<?php echo base_url('leads/novo_salva');?>" id="form" method="post" name="form" onsubmit="return validateForm()">
                <div class="form-group">
                    <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" /></div>
                <div class="form-group">
                    <input class="form-control" id="fone" name="fone" placeholder="Celular" type="text" /></div>
                <div class="form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="text" /></div>
                <div class="form-group">
                    <textarea class="form-control" id="msg" name="msg" rows="5" placeholder="Mensagem"></textarea></div>Resolva o cálculo para enviar o formulario<br> <span id="captcha"></span>
                <input type="text" id='validacao' name="validacao" value="">
                <input type="hidden" id='total' name="total" value="">
                <button type="submit" class="btn btn-secondary">Enviar</button>
		    </form>
	    </div>
    </div>
</div>