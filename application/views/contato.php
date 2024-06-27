<?php
foreach ($email as $e){}
?>

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


        <div class="hero-banner" style="background-color: ">
            <div class="hero-overlay"></div>
            <div class="hero-content container text-center" id="blogBanner"><br><br><br>
                <h2 style="color: black;">Contato</h2>
            </div>
        </div>

   <div class='container'>
        <div class="row">
            <div class="col-12 text-center mt-5 mb-5">
                <h2 style="font-weight: 900;font-size:39px">Olá! Como podemos ajudar você?</h2>
                <p>Você pode preencher o formulário de contato abaixo e nos enviar uma mensagem.</p>
            </div>

            <div class="col-md-12">
                <form action="<?php echo base_url('contato/envia');?>" id="form" method="post" name="form" onsubmit="return validateForm()">
                    <div class="inputGroup">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input id="nome" name="nome" placeholder="Nome" type="text" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input id="telefone" name="telefone" placeholder="Celular" type="text" />
                            </div>
                        
                        <div class="col-md-12 form-group">
                            <input id="email" name="email" placeholder="Email" type="text" />
                        </div>
                       
                        <div class="col-md-12 form-group">
                            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Mensagem" class="mt-3"></textarea>
                        </div>
                        
                        <p class="align-self-center mx-1">Resolva o cálculo para enviar o formulário<p><br>
                        <span id="captcha"></span><br><br>
                            <div class="inputGroup mt-2">
                                <input type="text" id='validacao' name="validacao" value="">
                                <input type="hidden" id='total' name="total" value="">
                            </div>
                            <button class="mt-2 mx-3 btncontatoenviar" type="submit" style="height: 54px;">Enviar</button>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

    <br>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 d-md-block d-none">
                <a class="elementor-icon elementor-animation-" style="text-decoration:none; color: black;" href="https://wa.me/5551993984690" target="_blank">
                <span>
                <i aria-hidden="true" class="fab fa-whatsapp" style="font-size:24px;"></i></span><span class="mx-2">+xx xx xxxx-xxxx</a><br>
                </span><br>

                <a class="elementor-icon elementor-animation-" style="text-decoration:none; color: black;" href="https://wa.me/555132720775" target="_blank">
                <span>
                <i aria-hidden="true" class="fab fa-whatsapp" style="font-size:24px;"></i></span><span class="mx-2">+xx xx xxxx-xxxx</a><br>
               </span><br>

                <a class="elementor-icon elementor-animation-" style="text-decoration:none; color: black;" href="">
                <span>
                <i aria-hidden="true" class="fas fa-envelope" style="font-size:24px;"></i></span><span class="mx-2">contato@xxxx.com.br</a><br>
               </span><br>

                <a class="elementor-icon elementor-animation-" style="text-decoration:none; color: black; href=""><span>
                <i aria-hidden="true" class="fas fa-map-marker-alt" style="font-size:24px;"></i></span><span class="mx-2">xxxxxxx<br>
                </a></span>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.662567595618!2d-51.20694012783688!3d-30.07542480776337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951983c5d3adf81f%3A0x80865f78f5a19f24!2sLinked%20Teres%C3%B3polis!5e0!3m2!1spt-BR!2sbr!4v1716556658469!5m2!1spt-BR!2sbr" class="img-fluid" style="border:0; height:400px; width:600px;"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
