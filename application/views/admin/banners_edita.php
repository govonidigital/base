<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php foreach ($banners as $ba){} ?>
<div class='container-fluid'>
    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/banners/banner_edita_salva'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <label for="link">Link
                    <i class="fas fa-question-circle" title="Página para onde o banner direciona quando clicado. Se não deve levar a nenhuma página, deixe o campo em branco."></i>
                    </label>
                    <input type="text" class="form-control" id="link" name="link" value="<?php echo $ba->link; ?>"/><br />
                    
                    <br />
                </div>
                <div class="col-12 col-md-4">
                    <label for="preco">Ativo
                    <i class="fas fa-question-circle" title="Apenas banners que estiverem ativos aparecerão no carrossel."></i>
                    </label>
                    <select class="form-control" id="ativo" name="ativo">
                        <option value="SIM" <?php if ($ba->ativo == 'SIM') echo " selected='selected'" ?>>SIM</option>
                        <option value="NAO" <?php if ($ba->ativo == 'NAO') echo " selected='selected'" ?>>NÃO</option>
                    </select><br />
                    
                    <label for="arquivo">Trocar Imagem
                    <i class="fas fa-question-circle" title="A dimensão das imagens deve ser de no máximo 2000x1000px, e o tamanho máximo de 2MB"></i>
                    </label><br/>
                    <input type="file" name="imagem" id="imagem"/><br />
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <br />
            <center><button>Salvar</button></center>
            </form>
        </div>
    </div>
</div>