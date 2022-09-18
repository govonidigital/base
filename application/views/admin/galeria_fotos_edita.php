<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php foreach ($galeria_fotos as $gf){} ?>
<div class='container-fluid'>
    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/galerias_fotos/galeria_fotos_edita_salva'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <input type="hidden" id="id_galeria_fotos" name="id_galeria_fotos" value="<?php echo $gf->id_galeria_fotos; ?>"/>
                    <label for="titulo">Título da imagem
                    <i class="fas fa-question-circle" title="O título é opcional, apenas para identificar mais facilmente a quê a imagem se refere."></i>
                    </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $gf->titulo; ?>"/><br />
                    <label for="ordem">Ordem
                    <i class="fas fa-question-circle" title="Ordem em que as imagens aparecem."></i>
                    </label>
                    <input type="number" class="form-control" id="ordem" name="ordem" value="<?php echo $gf->ordem; ?>"/><br />
                    <label for="link">Link
                    <i class="fas fa-question-circle" title="Página para onde a imagem direciona quando clicado. Se não deve levar a nenhuma página, deixe o campo em branco."></i>
                    </label>
                    <input type="text" class="form-control" id="link" name="link" value="<?php echo $gf->link; ?>"/><br />
                    
                    <br />
                </div>
                <div class="col-12 col-md-4">
                    

                    <label for="preco">Ativo
                    <i class="fas fa-question-circle" title="Apenas imagens que estiverem ativas aparecerão."></i>
                    </label>
                    <select class="form-control" id="ativo" name="ativo">
                        <option value="SIM" <?php if ($gf->ativo == 'SIM') echo " selected='selected'" ?>>SIM</option>
                        <option value="NAO" <?php if ($gf->ativo == 'NAO') echo " selected='selected'" ?>>NÃO</option>
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