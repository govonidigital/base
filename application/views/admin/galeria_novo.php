
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>


<form action="<?php echo base_url('admin/galeria/novo_salva'); ?>" method="post" enctype="multipart/form-data"> 
<div class='container'>  
    <div class="row" style="background-color: #dddddd">

            
   

                <div class="col-12" style="padding-bottom: 10px; padding-top: 10px;">
                    <h1>Nova Galeria</h1> 
                </div>  

                <div class="col-12 col-md-4">
                    <label for="galeria"><b>Galeria</b></label>
                    <input type="text" class="form-control" id="galeria" name="galeria" required/><br/>
                </div> 
                <div class="col-12 col-md-4">
                    <label for="marca"><b>Tag</b></label>
                    <input type="text" class="form-control" id="tag" name="tag"/><br/>
                </div>  

                <div class="col-12 col-md-3">
                    <label for="ativo"><b>Ativo</b></label>
                    <select class="form-control" id="ativo" name="ativo">
                        <option value="SIM">SIM</option>
                        <option value="NAO">NÃO</option>
                    </select><br />
                </div>


                <div class="col-12">
                    <br /><br />
                    <button class="btn btn-primary" type="submit">Salvar</button>
                    <br /><br />
                </div>

         
                

        
    </div>
</div>
</form>

<script> 
  $('#codigo_summernote').summernote({
    tabsize: 2,
    height: 200
  });
</script>
  