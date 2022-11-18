<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php foreach ($blog as $bl){} ?>
<div class='container-fluid'>
    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/blog/blog_edita_salva'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <label for="nome">Nome
                    <i class="fas fa-question-circle" title="Nome do Blog."></i>
                    </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $bl->nome; ?>"/><br />
                    <br />
                    <label for="data">Data
                    <i class="fas fa-question-circle" title="Data de publicação."></i>
                    </label>
                    <input type="date" class="form-control" id="data" name="data" value="<?php echo $bl->data; ?>"/><br />
                    <br />
                </div>
                <div class="col-12 col-md-4">
                    <label for="resumo">Resumo
                    <i class="fas fa-question-circle" title="Descrição simples do assunto."></i>
                    </label>
                    <input type="text" class="form-control" id="resumo" name="resumo" value="<?php echo $bl->resumo; ?>"/><br /><br />
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <label for="texto">Texto</label>
                    <textarea class="form-control" id="texto"  name="texto" rows="4"><?php echo $bl->texto; ?></textarea>
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <br />
            <center><button>Salvar</button></center>
            </form>
        </div>
    </div>
</div>