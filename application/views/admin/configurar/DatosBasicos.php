<?php
$nombre = $this->session->userdata("lote_nombre");
$apellido = $this->session->userdata("lote_apellido");
$cedula = $this->session->userdata("lote_cedula");
$telefono = $this->session->userdata("lote_tipo");
$celular = $this->session->userdata("lote_tipo");
$direccion = $this->session->userdata("lote_apellido");
$correo= $this->session->userdata("lote_email");
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-dark" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    Datos Personal
                </div>
            </div>

            <div class="panel-body">

                <form role="form" id="frmPersona" class="form-horizontal form-groups-bordered" action="#" method="post" onsubmit="return guardar();">
                    <input type="hidden" name="id" id="id" value="" />
                    <div class="form-group">
                        <label for="cedula" class="col-sm-3 control-label">Cedula</label>
                        <div class="col-sm-2">
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="V" selected="selected">V</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required="required" value="<?=$cedula;?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Nombre Completo</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required="required"  value="<?=$nombre;?>">
                        </div>
                    </div>
                     <div class="form-group">
                            <label for="nombre" class="col-sm-3 control-label">Apellido</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required="required"  value="<?=$apellido;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion" class="col-sm-3 control-label">Dirección</label>

                        <div class="col-sm-5">
                            <textarea class="form-control" id="direccion" name="direccion" placeholder="Dirección" required="required" value="<?=$direccion?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telf" class="col-sm-3 control-label">Telefonos</label>
                        <div class="col-sm-2">
                            <div class="input-group minimal">
                                <input type="text" class="form-control" id="telf" name="telf" placeholder="Teléfono local"  required="required"  value="<?=$telefono;?>">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group minimal">
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="teléfono celular"  required="required"  value="<?=$celular;?>">
                                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="e-mail" required="required"  value="<?=$correo;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-green btn-icon icon-left">
                                Guardar / Editar
                                <i class="fa fa-save"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>