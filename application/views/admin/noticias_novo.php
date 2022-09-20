<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php foreach ($noticias as $no){} ?>
<div class='container-fluid'>
    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/noticias/noticia_novo_salva'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <label for="nome">Nome
                    <i class="fas fa-question-circle" title="Nome da notícia."></i>
                    </label>
                    <input type="text" class="form-control" id="nome" name="nome"/><br />
                    <br />
                    <label for="data">Data
                    <i class="fas fa-question-circle" title="Data de publicação."></i>
                    </label>
                    <input type="date" class="form-control" id="data" name="data"/><br />
                    <br />
                </div>
                <div class="col-12 col-md-4">
                    <label for="resumo">Resumo
                    <i class="fas fa-question-circle" title="Descrição simples do assunto."></i>
                    </label>
                    <input type="text" class="form-control" id="resumo" name="resumo"/><br /><br />
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-8">
                    <label for="texto">Texto</label>
                    <textarea class="form-control" id="texto"  name="texto" rows="4"></textarea>
                </div>
                <div class="col-12 col-md-2"></div>
            </div>
            <br />
            <center><button>Adicionar</button></center>
            </form>
        </div>
    </div>
</div>