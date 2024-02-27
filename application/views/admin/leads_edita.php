
<?php foreach ($leads as $l){} ?>
<div class='container'>
    <div class="row">
        <div class="col-12"><br /><br />
            <form action="<?php echo base_url('admin/leads/novo_salva'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">

                <div class="col-12 col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value='<?php echo $l->nome; ?>'/><br /><br />

                    <label for="nome">Telefone</label>
                    <input type="text" class="form-control" id="fone" name="fone" value='<?php echo $l->fone; ?>'/><br /><br />

                </div>

                <div class="col-12 col-md-6">

                    <label for="nome">Email</label>
                    <input type="text" class="form-control" id="email" name="email"  value='<?php echo $l->email; ?>'/><br /><br />

                    <label for="nome">Data Cadastro</label>
                    <input type="text" class="form-control" disabled value='<?php echo $l->cadastro; ?>'/><br /><br />
                </div>


            </div>
            <div class="row">

                <div class="col-12">
                    <label for="texto">Mensagem</label>
                    <textarea class="form-control" id="msg"  name="msg" rows="4"><?php echo $l->msg; ?></textarea>
                </div>

            </div>
            <br />
            <center><button>Adicionar</button></center><br><br>
            </form>
        </div>
    </div>
</div>