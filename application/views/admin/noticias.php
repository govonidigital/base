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
                            <div class="row">
                                <div class="col-md-12"><br />
                                    <a class="btn btn-info" style="padding-left: 30px; padding-right: 30px;" href="<?php echo base_url('admin/noticias/noticia_novo'); ?>">Novo</a><br /><br />
                                </div>
                            </div>
                            <?php echo"
                            <div class='row'>
                                <div class='col-md-12 table-responsive'>
                                    <table class='table table-striped'>
                                        <tr>
                                            <th>
                                                Noticia
                                            </th>
                                            <th>
                                                Resumo
                                            </th>
                                            <th>
                                                Data
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                        "; foreach($noticias as $no):
                                            echo "<tr>
                                            <td>$no->nome</td>
                                            <td>$no->resumo</td>
                                            <td>$no->data</td>
                                            <td><a href='".base_url('admin/noticias/noticia_edita')."/$no->id_noticia' class='btn btn-primary btn-sm'>Editar</a>&nbsp;
                                            <a href='".base_url('admin/noticias/noticia_deleta')."/$no->id_noticia' class='btn btn-danger btn-sm'>Deletar</a></td></tr>";
                                        endforeach;
                                        echo "
                                    </table>
                                </div>    
                            </div>
                            <div class='row' style='margin-bottom: 30px; margin-top: 30px;'>
                                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12' style='font-size: 12px;'>
                                </div>   
                            </div>"; 
                            ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>