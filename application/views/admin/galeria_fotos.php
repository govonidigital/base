<style>
    td{
        padding-left: 10px;
        padding-right: 10px;
    }
</style>

<div class="app-content content">
    <div class="content-wrapper card">
        <div class="content-body">
            <section id="pagination">
                <div class="row">
                    <div class="col-md-12"><br />
                        <a class="btn btn-info" style="padding-left: 30px; padding-right: 30px;" href="<?php echo base_url('admin/galeria_fotos/galeria_fotos_novo'); ?>">Novo</a><br /><br />
                    </div>
                </div>
                <?php echo"
                <div class='row'>
                    <div class='col-md-12 table-responsive'>
                        <table class='table table-striped'>
                            <tr>
                                <th>
                                    Título
                                </th>
                                <th>
                                    Imagem
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    Ordem
                                </th>
                                <th>
                                    Ativo
                                </th>
                                <th>
                                    Ações
                                </th>
                            </tr>
                            "; foreach($galeria_fotos as $gf):
                                echo "<tr><td> $gf->titulo </td>
                                <td><img src='".base_url('assets/img/galeria_fotos/')."$gf->imagem' style='height: 40px; width: auto;'/></td>
                                <td>$gf->link</td>
                                <td>$gf->ordem</td>
                                <td>$gf->ativo</td>
                                <td>$gf->tipo</td>
                                <td><a href='".base_url('admin/galeria_fotos/galeria_fotos_edita')."/$gf->id_galeria_fotos' class='btn btn-primary btn-sm'>Editar</a>&nbsp;
                                <a href='".base_url('admin/galeria_fotos/galeria_fotos_deleta')."/$gf->id_galeria_fotos' class='btn btn-danger btn-sm'>Deletar</a></td></tr>";
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