<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<div class='container-fluid'>
    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/galeria_fotos/novo_salva'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_galeria" value="<?php echo $id_galeria; ?>"/>
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <label for="titulo">Título da imagem
                    <i class="fas fa-question-circle" title="O título é opcional, apenas para identificar mais facilmente a quê a foto se refere."></i>
                    </label>
                    <input type="text" class="form-control" id="titulo" name="titulo"/><br />
                    <label for="ordem">Ordem da galeria
                    <i class="fas fa-question-circle" title="Ordem em que os imagens aparecem."></i>
                    </label>
                    <input type="text" class="form-control" id="ordem" name="ordem"/><br />
                    <label for="link">Link
                    <i class="fas fa-question-circle" title="Página para onde o imagem direciona quando clicado. Se não deve levar a nenhuma página, deixe o campo em branco."></i>
                    </label>
                    <input type="text" class="form-control" id="link" name="link"/><br />
                    <br />
                </div>
                <div class="col-12 col-md-4">
                    <label for="ativo">Ativo
                    <i class="fas fa-question-circle" title="Apenas imagens que estiverem ativos aparecerão no carrossel."></i>
                    </label>
                    <select class="form-control" id="ativo" name="ativo">
                        <option value="SIM">SIM</option>
                        <option value="NAO">NÃO</option>
                    </select><br />
                    <label for="arquivo">Imagem
                    <i class="fas fa-question-circle" title="A dimensão das imagens deve ser de no máximo 2000x1000px, e o tamanho máximo de 2MB"></i>
                    </label><br/>
                    <input type="file" name="imagem" id="imagem" required/><br />
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <br />
            <center><button>Adicionar</button></center>
            </form>
        </div>
    </div>
</div>