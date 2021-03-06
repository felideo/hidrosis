<div class="span12">
    <h1 class="page-header">Modulos</h1>
</div>

<div class="row-fluid">
    <div class="span12">
        <form method="post" action="<?php echo URL; ?>hidrocontrol/create">
            <div class="row-fluid">
                <div class="form-group span4">
                    <label>Associar ao Trecho</label>
                    <select name="hidrocontrol[id_trecho]" required class="span6">
                        <option>Selecione um Trecho</option>>
                        <?php foreach ($this->trecho_list as $key => $trecho) : ?>
                            <option value="<?php echo $trecho['id']; ?>"><?php echo $trecho['localizacao']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group span4">
                    <label>Trecho Anterior</label>
                    <select name="hidrocontrol[trecho_anterior]" required class="span6">
                        <option>Selecione um Trecho</option>>
                        <?php foreach ($this->anterior_trecho_list as $key => $trecho_anterior) : ?>
                            <option value="<?php echo $trecho_anterior['id']; ?>"><?php echo $trecho_anterior['localizacao']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group span4">
                    <div class="form-group span12">
                        <button type="submit" class="btn btn-primary" style="float: right;">Enviar</button>
                    </div>
                </div>
            </div>
       </form>
    </div>
</div>
<div style="display: block; clear: both;">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                                <thead>
                                    <tr role="row">
                                        <th aria-sort="descending" style="width: 30px;" colspan="1" rowspan="1" tabindex="0" class="sorting_desc">ID</th>
                                        <th style="width: 200px;" colspan="1" rowspan="1" tabindex="0" class="sorting">Localização</th>
                                        <th style="width: 200px;" colspan="1" rowspan="1" tabindex="0" class="sorting">Trecho Anterior</th>
                                        <th style="width: 30px;" colspan="1" rowspan="1" tabindex="0">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->hidrocontrol_list as $indice => $hidrocontrol) : ?>
                                        <tr role="row" class="gradeA odd">
                                            <td class="sorting_1"><?php echo $hidrocontrol['id']; ?></td>
                                            <td><?php echo $hidrocontrol['localizacao']; ?></td>
                                            <td><?php echo $hidrocontrol['trecho_anterior']; ?></td>
                                            <td>
                                                <?php echo '<a href="' . URL . 'hidrocontrol/delete/' . $hidrocontrol['id'] . '"><i class="fa fa-trash-o fa-fw"></i></a></td>'; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>