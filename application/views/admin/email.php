<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style> 
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class="app-content content">
                <div class="content-wrapper card">
                    <div class="content-body">
                        <section id="pagination">
                            <form action="<?php echo base_url('admin/email/salva'); ?>" method="post">
                                <div class="row">
                                    <div class="col-12" style="padding-bottom: 10px; padding-top: 10px;">
                                        <center>
                                            <h3>Configurações da Loja Virtual</h3>
                                        </center>
                                        <hr/>
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
                                    <div class="col-12 col-md-3"><br />
                                        <label for="charset"><b>Charset</b></label>
                                    <input type="text" class="form-control" id="charset" name="charset" required value="<?php echo $email[0]->charset;?>" />
                                    </div>
                                    <div class="col-12 col-md-3"><br />
                                        <label for="subject"><b>Assunto</b></label>
                                    <input type="text" class="form-control" id="subject" name="subject" required value="<?php echo $email[0]->subject;?>" />
                                    </div>
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
</div>

