<div class="modal fade" id="Billetera">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Información</h4>
            </div>

            <div class="modal-body" style="text-align: center">
                <div class="row">
                    <p>Estimado Usuario, Est&aacute; Seguro que desea retirar el total de fondos de su cuenta? De ser asi, recuerde que
                        será transferido a cualquiera de sus cuentas Afiliadas, en un lapso de 48 horas h&aacute;biles....<br><br>
                    </p>
                </div>
                <div class="row">
                    <p style="text-align: center">
                        <a href="#" onclick="SSolicitar(<?= $this->session->userdata("lote_oid")?>)"  class="btn btn-blue"><i class="entypo-check">Estoy Seguro y Quiero Retirar</i></a>
                    </p>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>