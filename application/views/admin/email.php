<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }

.cardemail {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
    border: 1px solid #c9c9c9; 
    border-radius: 20px;
}


</style> 
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class="app-content content">
                <div class="content-wrapper cardemail shadow-sm">
                    <div class="content-body p-5">
                        <section id="pagination">
                            <form action="<?php echo base_url('admin/email/salva'); ?>" method="post">
                                <div class="row">
                                    <div class="col-12" style="padding-bottom: 10px; padding-top: 10px;">
                                        <center>
                                            <h3>Configurações do Email</h3>
                                            
                                            <?php 
                                            if (isset($retorno_teste)){
                                                echo "
                                                <div class='alert alert-info' role='alert'>
                                                $retorno_teste
                                                </div>
                                                ";
                                            } 
                                            ?>
                                            
                                        </center>
                                     
                                    </div>
                                    <div class="col-12 col-md-2"><br />
                                        <label for="protocol"><b>Protocolo</b></label>
                                    <input type="text" class="form-control" id="protocol" name="protocol" required value="<?php echo $email[0]->protocol;?>" />
                                    </div>
                                    <div class="col-12 col-md-6"><br />
                                        <label for="nome_email"><b>Nome Email</b></label>
                                    <input type="text" class="form-control" id="nome_email" name="nome_email" required value="<?php echo $email[0]->nome_email;?>" />
                                    </div>
                                    <div class="col-12 col-md-4"><br />
                                        <label for="smtp_host"><b>Smtp Host</b></label>
                                    <input type="text" class="form-control" id="smtp_host" name="smtp_host"  required value="<?php echo $email[0]->smtp_host;?>"/>
                                    </div>
                                    <div class="col-12 col-md-3"><br />
                                        <label for="smtp_port"><b>Smtp Port</b></label>
                                    <input type="text" class="form-control" id="smtp_port" name="smtp_port" required value="<?php echo $email[0]->smtp_port;?>" />
                                    </div>
                                    <div class="col-12 col-md-6"><br />
                                        <label for="smtp_user"><b>Smtp User</b></label>
                                    <input type="email" class="form-control" id="smtp_user" name="smtp_user" required value="<?php echo $email[0]->smtp_user;?>" />
                                    </div>
                                    <div class="col-12 col-md-3"><br />
                                        <label for="smtp_pass"><b>Smtp pass</b></label>
                                    <input type="password" class="form-control" id="smtp_pass" name="smtp_pass" required value="<?php echo $email[0]->smtp_pass;?>" />
                                    </div>
                                    <!-- <div class="col-12 col-md-3"><br />
                                        <label for="charset"><b>Charset</b></label>
                                    <input type="text" class="form-control" id="charset" name="charset" required value="<?php echo $email[0]->charset;?>" />
                                    </div> -->
                                    <!-- <div class="col-12 col-md-3"><br />
                                        <label for="subject"><b>Assunto</b></label>
                                    <input type="text" class="form-control" id="subject" name="subject" required value="<?php echo $email[0]->subject;?>" />
                                    </div> -->
                                    <div class="col-12 col-md-6"><br />
                                        <label for="mail_to"><b>Email para envio</b></label>
                                    <input type="email" class="form-control" id="mail_to" name="mail_to"  required value="<?php echo $email[0]->mail_to;?>" />
                                    </div><br/>
                                </div> 
                                <br/>
                                <input type="hidden" name="id_email" id="id_email" value="<?php echo $email[0]->id_email; ?>">
                                <center><button class="btn btn-primary" type="submit">Salvar</button></center>
                            </form>
                        </section>            
                    </div>
                </div>
            </div>

         </div>
    </div>

    <div class='row'>
        <div class='col-12 text-center py-3 mt-3'>
            <h3>Testar envio de email</h3>
            <form action="<?php echo base_url('admin/email/testar');?>" method='post' class="form-inline d-flex justify-content-center">
                <input type='text' value='' name='email_teste' placeholder='Email que vai receber o teste' class="form-control mr-2">
                <input type='submit' value='Testar' class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

