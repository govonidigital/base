<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach($blog as $bl):
                echo "
                <div class='col-md-4'>
                    <div class='card mb-4 box-shadow'>
                        $bl->nome
                        <div class='card-body'>
                        <p class='card-text'>$bl->resumo</p>
                        <div class='d-flex justify-content-between align-items-center'>
                            <div class='btn-group'>
                            <a class='btn btn-primary btn-sm' href='".base_url('blog/ver')."/$bl->id_blog'>Blog</a>
                            </div>
                            <small class='text-muted'>$bl->data</small>
                        </div>
                        </div>
                    </div>
                </div>";
            endforeach;
            ?>
        </div>
    </div>
</div>