<div class="hero-banner" style="background-color: ">
    <div class="hero-overlay"></div>
    <div class="hero-content text-center" id="blogBanner"><br><br><br>
        <h2 style="color: black;">Galeria</h2>
    </div>
</div>


<section class="galeria" id="galeria">
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <?php foreach($galerias as $ga):
                    echo "
                    <div class='col-md-4'>
                        <div class='card mb-4'>
                            $ga->galeria
                            <div class='card-body'>
                            <p>$ga->tag</p>
                                <div class='btnvergaleria'>
                                    <button><a href='".base_url('galeria/ver')."/$ga->id_galeria'>Ver galeria</a></button>
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
