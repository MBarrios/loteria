<div class="row">
    <div class="col-md-12">
        <div class="panel panel-dark" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    Mi Billetera
                </div>
            </div>

            <div class="panel-body">

                <div id="agregar">
                        <input type="hidden" id="oidu" name="oidu" value="<?= $this->session->userdata("lote_oid")?>">
                        <div class="row">
                            <div class="form-group">
                                <label for="saldo" class="col-md-2 control-label">Saldo Actual:</label>
                                <label for="saldo" class="col-md-3 control-label" style="font-size: 20px;">100.000,00 Bs</label>
                                <label for="saldo" class="col-md-2 control-label">Saldo Diferido:</label>
                                <label for="saldo" class="col-md-3 control-label" style="font-size: 20px;">100.000,00 Bs</label>
                            </div>
                        </div>
                    <hr>
                    <br>
                    <div class="row">
                            <div class="form-group">
                                <label for="saldo" class="col-md-2 control-label">Opcion:</label>
                                <div class="col-md-3">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" id="<?= $csrf['name']; ?>"
                                           value="<?= $csrf['hash']; ?>">
                                    <a href="#" onclick="Solicitar(<?= $this->session->userdata("lote_oid")?>)"  class="btn btn-orange"><i class="entypo-download"> Solcitar Dinero</i></a>
                                                                   </div>
                                <div class="col-md-3">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" id="<?= $csrf['name']; ?>"
                                           value="<?= $csrf['hash']; ?>">
                                    <a href="#" onclick="Agregar(<?= $this->session->userdata("lote_oid")?>)"  class="btn btn-blue"><i class="entypo-plus"> Agregar Saldo</i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<div class="row">
<div class="row fila-datos" id="fila-lista">
    <div class="col-md-12">
        <div class="panel panel-dark" data-collapsed="0">
            <!-- panel head -->
            <div class="panel-heading">
                <div class="panel-title">Historico de Saldos</div>
            </div>
            <!-- panel body -->
            <div class="panel-body">
                <div class="col-md-12" id="respuesta">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-responsive table-bordered" id="listaBancos">
                                <thead><tr>
                                    <th>Monto</th>
                                    <th>Movimiento</th>
                                    <th>Observacion</th
                                </tr></thead>
                                <tbody id="cuerpo">
                                <tr><td colspan="7">No posee Saldos Registrados</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

