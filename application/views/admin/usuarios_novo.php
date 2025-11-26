<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>




    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/usuarios/novo_salva'); ?>" method="post" enctype="multipart/form-data">
            
            <div class="row">
                
                <div class="col-12 col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email"/><br />
                </div>

                <div class="col-12 col-md-6">
                    <label for="nome">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha"/><br />
                </div>

            </div>
            
            <center><button type='submit'>Adicionar</button></center>
            </form>
        </div>
    </div>
