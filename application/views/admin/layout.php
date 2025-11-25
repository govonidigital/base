

<div class='container '>
    <div class='row mt-5'>
        <div class='col-12'>
            <div class="app-content content">
                <div class="content-wrapper card shadow-sm" style="border-radius: 20px;">
                    <div class="content-body">
                        <section id="pagination">

                            <div class="row p-3">
                                <div class="col-md-12">
                                    <h3 class="mt-5">Configurações Layout</h3>
                                    <hr>
                                </div>
                            </div>

                            <form action="<?= base_url('admin/layout/salvar'); ?>" method="post" enctype="multipart/form-data">
                                <!-- Linha de seleção de layout e fonte -->
                                <div class="row px-3">
                                    <div class="col-md-3 mb-3">
                                        <label for="template"><b>Template</b></label>

                                        <select class="form-control" id="template" name="template">
                                            <?php
                                                $itens = new DirectoryIterator('./application/views');
                                                $lista = array('admin','errors','fixo','personalizado','.','..');

                                                foreach($itens as $item){
                                                    if($item->gettype() === 'dir'){
                                                        $nome = $item->getFilename();
                                                        if (!in_array($nome,$lista)){

                                                            $sel = ($config->template == $nome) ? "selected" : "";

                                                            echo "<option value='$nome' $sel>$nome</option>";
                                                        }
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <br />
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label><b>Fonte</b></label>
                                       <select name="fonte" class="form-control">
                                                <?php 
                                                    $fontes = ['Arial','Helvetica','Verdana','Tahoma','Times New Roman','Georgia','Roboto','Poppins','Lato','Montserrat'];

                                                    foreach ($fontes as $fonte) {
                                                        $sel = ($config->fonte == $fonte) ? "selected" : "";
                                                        echo "<option value='$fonte' $sel>$fonte</option>";
                                                    }
                                                ?>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label><b>Tamanho da Fonte</b></label>
                                        <select name="fonte_tamanho" class="form-control">
                                            <?php 
                                                for ($i = 10; $i <= 40; $i++) {
                                                    $sel = ($config->fonte_tamanho == $i) ? "selected" : "";
                                                    echo "<option value='$i' $sel>$i px</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                           
                                <hr>

                                <!-- CORES -->
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <h4>Cores da Página</h4>
                                    </div>

                                    <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor Fundo</b></label>
                                        <input type="color" name="cor_fundo" class="form-control" value="<?= $config->cor_fundo ?>">
                                    </div>

                                    <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor 1</b></label>
                                        <input type="color" name="cor_1" class="form-control" value="<?= $config->cor_1 ?>">
                                    </div>

                                      <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor 2</b></label>
                                        <input type="color" name="cor_2" class="form-control" value="<?= $config->cor_2 ?>">
                                    </div>

                                      <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor 3</b></label>
                                        <input type="color" name="cor_3" class="form-control" value="<?= $config->cor_3 ?>">
                                    </div>

                                    <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor Fonte</b></label>
                                        <input type="color" name="cor_fonte" class="form-control" value="<?= $config->cor_fonte ?>">
                                    </div>

                                    <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor Fonte 1</b></label>
                                        <input type="color" name="cor_fonte_1" class="form-control" value="<?= $config->cor_fonte_1 ?>">
                                    </div>
                                    
                                    <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor Fonte 1</b></label>
                                        <input type="color" name="cor_fonte_2" class="form-control" value="<?= $config->cor_fonte_2 ?>">
                                    </div>
                                    
                                    <div class="col-md-3 mb-3 mt-3">
                                        <label><b>Cor Fonte 3</b></label>
                                        <input type="color" name="cor_fonte_3" class="form-control" value="<?= $config->cor_fonte_3 ?>">
                                    </div>
                                </div>
                              
                                <hr>

                                <!-- PRÉ-VISUALIZAÇÃO 
                                <div class="row px-3 mb-4">
                                    <div class="col-md-12">
                                        <h4>Pré-visualização do Layout</h4>

                                        <div id="preview-box" 
                                            style="
                                                border: 2px solid #ccc; 
                                                border-radius: 15px; 
                                                padding: 20px; 
                                                margin-top: 15px;
                                                background: <?= $config->cor_fundo ?>;
                                                color: <?= $config->cor_fonte ?>;
                                                font-family: <?= $config->fonte ?>;
                                                font-size: <?= $config->fonte_tamanho ?>px;
                                            ">

                                            <div class="text-center mb-3">
                                                <?php if (!empty($config->logo_1)): ?>
                                                    <img id="preview-logo1"
                                                        src="<?= base_url('assets/img/layout/'.$config->logo_1) ?>"
                                                        style="max-width:150px;">
                                                <?php else: ?>
                                                    <img id="preview-logo1" style="display:none;">
                                                <?php endif; ?>
                                            </div>

                                            <h3 class="text-center">Título do Seu Site</h3>
                                            <p class="text-center">Este é um texto de demonstração para visualizar o estilo atual do layout.</p>

                                            <?php if (!empty($config->logo_2)): ?>
                                                <div class="text-center mt-3">
                                                    <img id="preview-logo2"
                                                        src="<?= base_url('assets/img/layout/'.$config->logo_2) ?>"
                                                        style="max-width:120px;">
                                                </div>
                                            <?php else: ?>
                                                <img id="preview-logo2" style="display:none;">
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>-->


                              <!-- IMAGENS -->
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <h4>Imagens do Layout</h4>
                                    </div>

                                    <!-- LOGO 1 -->
                                    <div class="col-md-6 mb-4 mt-3">
                                        <label><b>Logo Principal</b></label>
                                        <input type="file" name="logo_1" class="form-control">

                                        <?php if (!empty($config->logo_1)): ?>
                                            <div class="mt-2 d-flex align-items-center">
                                                <img src="<?= base_url('assets/img/layout/'.$config->logo_1) ?>"
                                                    style="max-width: 120px; border-radius: 10px; border: 2px solid #ccc; margin-right:10px;">
                                                <a href="<?= base_url('admin/layout/deletar_imagem/logo_1') ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Deseja excluir esta imagem?');">
                                                Excluir
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- LOGO 2 -->
                                    <div class="col-md-6 mb-4 mt-3">
                                        <label><b>Logo Secundária</b></label>
                                        <input type="file" name="logo_2" class="form-control">

                                        <?php if (!empty($config->logo_2)): ?>
                                            <div class="mt-2 d-flex align-items-center">
                                                <img src="<?= base_url('assets/img/layout/'.$config->logo_2) ?>"
                                                    style="max-width: 120px; border-radius: 10px; border: 2px solid #ccc; margin-right:10px;">
                                                <a href="<?= base_url('admin/layout/deletar_imagem/logo_2') ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Deseja excluir esta imagem?');">
                                                Excluir
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- FAVICON -->
                                    <div class="col-md-6 mb-4 mt-1">
                                        <label><b>Favicon</b></label>
                                        <input type="file" name="favicon" class="form-control">

                                        <?php if (!empty($config->favicon)): ?>
                                            <div class="mt-2 d-flex align-items-center">
                                                <img src="<?= base_url('assets/img/layout/'.$config->favicon) ?>"
                                                    style="max-width: 50px; border-radius: 5px; border: 2px solid #ccc; margin-right:10px;">
                                                <a href="<?= base_url('admin/layout/deletar_imagem/favicon') ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Deseja excluir esta imagem?');">
                                                Excluir
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <div class="row px-3 mb-4">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary btn-lg" style="padding-left: 40px; padding-right: 40px;">
                                            Salvar Configurações
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function atualizarPreview() {
    let box = document.getElementById("preview-box");

    // Atualiza cores
    box.style.background = document.querySelector("input[name='cor_fundo']").value;
    box.style.color = document.querySelector("input[name='cor_fonte']").value;

    // Atualiza fonte
    box.style.fontFamily = document.querySelector("[name='fonte']").value;

    // Atualiza tamanho da fonte
    let fsize = document.querySelector("[name='fonte_tamanho']").value;
    if (fsize > 0) box.style.fontSize = fsize + "px";
}

// Monitorar mudanças
document.querySelectorAll("input[type='color'], input[name='fonte_tamanho'], select[name='fonte']")
    .forEach(el => el.addEventListener("input", atualizarPreview));


// Pré-visualização das logos quando escolher arquivo novo
document.querySelector("input[name='logo_1']").addEventListener("change", function(e) {
    let img = document.getElementById("preview-logo1");
    img.src = URL.createObjectURL(e.target.files[0]);
    img.style.display = "block";
});

document.querySelector("input[name='logo_2']").addEventListener("change", function(e) {
    let img = document.getElementById("preview-logo2");
    img.src = URL.createObjectURL(e.target.files[0]);
    img.style.display = "block";
});
</script>
