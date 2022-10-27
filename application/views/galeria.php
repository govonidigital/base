<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach($galerias as $ga):
                echo "
                <div class='col-md-4'>
                    <div class='card mb-4 box-shadow'>
                        $ga->galeria
                        <div class='card-body'>
                        <p class='card-text'>$ga->tag</p>
                        <div class='d-flex justify-content-between align-items-center'>
                            <div class='btn-group'>
                            <a class='btn btn-primary btn-sm' href='".base_url('galeria_fotos/lista')."/$ga->id_galeria'>Ver galeria</a>
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