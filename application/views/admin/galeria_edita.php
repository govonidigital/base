
<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
    .btn-light{
        color: black !important;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>


<?php foreach($galeria as $g){} ?>

<div class='container'>  
    
    <form action="<?php echo base_url('admin/galerias/galerias_edita_salva'); ?>" method="post" enctype="multipart/form-data"> 
        <div class="row py-2" style="background-color: #dddddd">

        
   

                <div class="col-12">
                    <h1>Editar Galeria</h1> 
                </div>  
                <div class="col-6">
                    <label for="galeriaa"><b>Galeria</b></label>
                    <input type="text" class="form-control" id="galeriaa" name="galeriaa" value="<?php echo $g->galeriaa; ?>" required/><br/>
                </div> 
                <div class="col-6">
                    <label for="marca"><b>Tag</b></label>
                    <input type="text" class="form-control" id="tag" name="tag" value="<?php echo $g->tag; ?>"/><br/>
                </div>  

                <div class="col-12 col-md-3">
                    <label for="ativo">Ativa</label>
                    <select class="form-control" id="ativo" name="ativo">
                        <option value="SIM" <?php if ($g->ativo == 'SIM') echo " selected='selected'" ?>>SIM</option>
                        <option value="NAO" <?php if ($g->ativo == 'NAO') echo " selected='selected'" ?>>NÃO</option>
                    </select><br />
                </div>

                <div class="col-12">
                    <input type="hidden" id="id_galeria" name="id_galeria" value='<?php echo $b->id_galeria; ?>'/>

                    <br /><br />
                    <button class="btn btn-primary" type="submit">Salvar</button>
                    <br /><br />
                </div>
           
                
            </div>
        
        </div>
    </form>
</div>


<script> 
  $('#codigo_summernote').summernote({
    tabsize: 2,
    height: 200
  });
</script>
  