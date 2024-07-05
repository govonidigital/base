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
                <div class="content-wrapper card shadow-sm" style="border-radius: 20px;">
                    <div class="content-body">
                        <section id="pagination">
                            <div class="row p-2">
                                <div class="col-md-12"><br />
                                    <a class="btn btn-info" style="padding-left: 30px; padding-right: 30px;" href="<?php echo base_url('admin/banners/banner_novo'); ?>">Novo</a><br /><br />
                                </div>
                            </div>
                            <?php echo"
                            <div class='row'>
                                <div class='col-md-12 table-responsive'>
                                    <table class='table table-striped'>
                                        <tr>
                                            <th>
                                                Banner
                                            </th>
                                            <th>
                                                Link
                                            </th>
                                            <th>
                                                Ativo
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                        "; foreach($banners as $ba):
                                            echo "<tr>
                                            <td><img src='".base_url('assets/img/banner/')."$ba->imagem' style='height: 40px; width: auto;'/></td>
                                            <td>$ba->link</td>
                                            <td>$ba->ativo</td>
                                            <td><a href='".base_url('admin/banners/banner_edita')."/$ba->id_banner' class='btn btn-primary btn-sm'>Editar</a>&nbsp;
                                            <a href='#' class='btn btn-danger btn-sm deletar' data-id='$ba->id_banner'>Deletar</a></td></tr>";
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

<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="modalExcluir" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExcluir">Excluir Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir este banner?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="#" id="btnExcluir" class="btn btn-danger">Excluir</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.deletar').click(function(){
            var id = $(this).data('id');
            $('#modalExcluir').modal('show');
            $('#btnExcluir').attr('href', '<?php echo base_url('admin/banners/banner_deleta'); ?>/'+id);
        });
    });

</script>


 