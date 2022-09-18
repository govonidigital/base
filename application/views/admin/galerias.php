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
                        <a class="btn btn-info" style="padding-left: 30px; padding-right: 30px;" href="<?php echo base_url('admin/galerias/galerias_novo'); ?>">Novo</a><br /><br />
                    </div>
                </div>
                <?php echo"
                <div class='row'>
                    <div class='col-md-12 table-responsive'>
                        <table class='table table-striped'>
                            <tr>
                                <th>
                                    Galeria
                                </th>
                                <th>
                                    Ativo
                                </th>
                                <th>
                                    Tag
                                </th>
                                <th>
                                    Ações
                                </th>
                            </tr>
                            "; foreach($galerias as $ga):
                                echo "<tr><td> $ga->galeria </td>
                                <td>$ga->ativo</td>
                                <td>$ga->tag</td>
                                <td><a href='".base_url('admin/galerias/galerias_edita')."/$ga->id_galeria' class='btn btn-primary btn-sm'>Editar</a>&nbsp;
                                <a href='".base_url('admin/galerias/galerias_deleta')."/$ga->id_galeria' class='btn btn-danger btn-sm'>Deletar</a></td></tr>";
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