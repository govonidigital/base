<?php foreach($codigos as $c){} ?>
<?php if (!empty($mensagem)): ?>
  <div class="alert alert-success">
      <?= $mensagem ?>
  </div>
<?php endif; ?>

<div class='container'>
    <div class='row mt-5'>
        <div class='col-12'>
            <div class="app-content content">
                <div class="content-wrapper card shadow-sm" style="border-radius: 20px;">
                    <div class="content-body">
                        <section id="pagination">
                            <div class="card p-4 shadow-sm" style="border-radius: 20px;">
                                <h3 class="text-center mt-5 mb-4">Códigos do Head</h3>
                                <form action="<?php echo base_url('admin/codigos/salva'); ?>" method="post">
                                    <div class="form-group mb-3">
                                        <label for="google_analytics"><b>Google Analytics</b></label>
                                        <input type="text" class="form-control" id="google_analytics" 
                                            name="google_analytics" value="<?php echo $c->google_analytics; ?>">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="facebook_pixel"><b>Pixel Facebook</b></label>
                                        <input type="text" class="form-control" id="facebook_pixel" 
                                            name="facebook_pixel" value="<?php echo $c->facebook_pixel; ?>">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="css"><b>CSS</b></label>
                                        <textarea class="form-control" id="css" name="css" rows="5"><?php echo $c->css; ?></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="tags"><b>Tags</b></label>
                                        <textarea class="form-control" id="tags" name="tags" rows="5"><?php echo $c->tags; ?></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="js"><b>JS</b></label>
                                        <textarea class="form-control" id="js" name="js" rows="5"><?php echo $c->js; ?></textarea>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary px-4">Concluir Edição</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
