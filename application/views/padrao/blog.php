<style>
    .hero-banner {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        text-align: center;
        height: 200px;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(242, 240, 240, 0.30); 
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero-content h2 {
        color: white;
        font-size: 49px;
        font-weight: 900;
    }

    .card-blog a {
        color: #000000 !important; 
    }

    .card-blog a:visited {
        color: #ff00ff !important; 
    }

</style>

        <div class="hero-banner" style="background-color: ">
            <div class="hero-overlay"></div>
            <div class="hero-content container text-center" id="blogBanner"><br><br><br>
                <h2 style="color: black;">Blog</h2>
            </div>
        </div>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <h2 style="font-size: 39px;" class="text-center"><b>Todos os Posts</b></h2>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <?php foreach($blog as $bl):
            echo "
            <div class='col-md-4'>
                <div class='card-blog shadow-sm mb-4'>
                    <a href='".base_url('blog/ver')."/$bl->id_blog' class='text-decoration: none!important;'>
                        <img src='" . base_url('assets/img/blog/' . $bl->imagem) . "' class='img-fluid'>
                    </a>
                    <div class='card-body' style='background-color: #fff;'>
                        <a href='".base_url('blog/ver')."/$bl->id_blog' class='text-decoration: none!important;'>
                        <p style='color:#444444; font-size:31px; font-family: 'Red Hat Display', sans-serif !important;'><b>$bl->nome</b></p>
                        <p style='color: #1B1B1B; font-size:16px;  font-family: 'Red Hat Display', sans-serif !important;'>$bl->resumo</p>
                        <i class='fas fa-clock' style='color:#8C8C8C; font-size: 14px;'></i><span style='color: #8C8C8C;font-size: 14px;'> $bl->data</span>
                        </a>
                    </div>
                </div>
            </div>";
            endforeach;
         ?>
     </div>
</div>