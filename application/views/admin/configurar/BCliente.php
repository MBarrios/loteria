<div class="row">
    <div class="col-md-12">
        <div class="panel panel-dark" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    Registrar Banco
                </div>
            </div>

            <div class="panel-body">
                <div class="col-md-12">
                <div id="agregar">
                    <form role="form" id="frmUsuario" class="form-horizontal" action="#" method="post" onsubmit="return guardar();">
                        <input type="hidden" id="oidu" name="oidu" value="<?= $this->session->userdata("lote_oid")?>">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label style="font-weight: bold">Beneciciario:</label><label><?= $this->session->userdata("lote_nombre")?>&nbsp;<?= $this->session->userdata("lote_apellido")?></label><br>
                                    <label style="font-weight: bold">C&eacute;dula de Identidad:</label> <label><?= $this->session->userdata("lote_cedula")?></label><br>
                                    <label style="font-weight: bold">Correo: </label><label><?= $this->session->userdata("lote_email")?></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-3">
<select class="form-control" name="banco" id="banco">
    <option value="Venezuela">Venezuela</option>
    <option value="Provincial">Provincial</option>
    <option value="Mercantil">Mercantil</option>
    <option value="Banesco">Banesco</option>
</select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="tipo" id="tipo">
                                        <option value="Corriente">Corriente</option>
                                        <option value="Ahorro">Ahorro</option>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="numero" name="numero" placeholder="N de Cuenta" required/>
                                </div>
                                <div class="col-md-3">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" id="<?= $csrf['name']; ?>"
                                           value="<?= $csrf['hash']; ?>">
                                    <button type="submit" class="btn btn-green btn-icon" id="btnGuardar">Guardar <i
                                                class="fa fa-save"></i></button>                                </div>
                            </div>
                        </div>
                        <hr>
                    </form>
                    <br>
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
                <div class="panel-title">Mis Bancos Registrados</div>
            </div>
            <!-- panel body -->
            <div class="panel-body">
                <div class="col-md-12" id="respuesta">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-responsive table-bordered" id="listaBancos">
                                <thead><tr>
                                    <th>Tipo</th>
                                    <th>Banco</th>
                                    <th>N. cuenta</th>
                                    <th>Historico</th>
                                    <th>Eliminar</th>


                                </tr></thead>
                                <tbody id="cuerpo">
                                <tr><td colspan="7">No posee Cuentas registrados</td></tr>
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

