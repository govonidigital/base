<div class="hero-banner" style="background-color: ">
    <div class="hero-overlay"></div>
    <div class="hero-content text-center" id="blogBanner"><br><br><br>
        <h2 style="color: black;">Fotos</h2>
    </div>
</div>


<section class="galeria" id="galeria">
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                <?php foreach($galeria_fotos as $gf):
                    echo "
                    <div class='col-md-4'>
                        <div class='card mb-4 box-shadow'>
                        <img class='card-img-top' src='".base_url('assets/img/galeria/')."$gf->imagem' alt='$gf->titulo'>
                            <div class='card-body'>
                            <p class='card-text'>$gf->titulo</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                <p class='card-text'>$gf->tipo</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>";
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>