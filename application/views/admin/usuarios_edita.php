<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<?php foreach ($usuario as $u){} ?>
<div class='container'>
    <div class="row">
        <div class="col-12"><br /><br />

            <form action="<?php echo base_url('admin/usuarios/edita_salva'); ?>" method="post" enctype="multipart/form-data">

            <div class="row">
            <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $u->id_usuario; ?>"/>



            <div class="col-12 col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value='<?php echo $u->email;?>'/><br />
                </div>

                <div class="col-12 col-md-6">
                    <label for="nome">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" value='000000'/><br />
                </div>

            </div>


            <center><button type='submit'>Salvar</button></center><br><br>
            </form>
        </div>
    </div>
</div>