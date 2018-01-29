jQuery(document).ready(function() {
    listar()
});
function listar(){
    jQuery.ajax({
        url: urlConf + "listarMisBancos/",
        type:"GET",
        dataType:"json",
        success: function (tabla) {
            if(tabla.cant != 0){
                jQuery('#listaBancos').DataTable( {
                    destroy: true,
                    columns: [
                        { data: 'tipo' },
                        { data: 'banco' },
                        { data: 'ncuenta' },
                        { data: 'historico' },
                        { data: 'eliminar' },
                    ],
                    data: tabla.datos,
                    ordering:  false,
                    scrollX: true,
                    "sPaginationType": "bootstrap",

                    "sDom": "<'row hidden-xs'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-sm-6 hidden-xs col-left'i><'col-sm-6 col-xs-12 col-right'p>>",
                    "oTableTools": {
                        "aButtons": [
                            {
                                "sExtends":"print",
                                "sButtonText":"Imprimir"
                            }
                        ]
                    },
                    "aLengthMenu": [[10, 25, 5, -1], [10, 25, 5, "Todo"]],
                    "bStateSave": true,
                    "language": {
                        "lengthMenu": "Mostar _MENU_ filas por pagina",
                        "zeroRecords": "Nada que mostrar",
                        "info": "Mostrando _PAGE_ de _PAGES_",
                        "infoEmpty": "No se encontro nada",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "search": "Buscar"
                    },
                } );
            }else{
                jQuery("#cuerpo").html('<tr><td colspan="7">No posee bienes registrados</td></tr>')
            }
            //alert(JSON.stringify(tabla));


        }
    });
}

function guardar(){
    var oidU = jQuery("#oidu").val();
    var banco = jQuery("#banco").val();
    var tipo = jQuery("#tipo").val();
    var ncuenta = jQuery("#numero").val();
    jQuery.ajax({
        url : urlConf + "RegistrarBanco",
        data: "oidU="+oidU+"&banco="+banco+"&tipo="+tipo+"&ncuenta="+ncuenta+"&csrf_token_cuimed="+jQuery("#csrf_token_cuimed").val(),
        type : 'POST',
        success : function(rep) {
            jQuery('form').each (function(){
                this.reset();
            });
            listar();
            jQuery('#msj').html(rep);
            jQuery('#mensajes').modal('show', {backdrop: 'static'});
        }
    });
    return false;
}
function EliminarCta(id){
    jQuery.ajax({
        url: urlConf + "EliminarCta",
        data: "id="+id+"&csrf_token_cuimed="+jQuery("#csrf_token_cuimed").val(),
        type: 'POST',
        success: function (rep) {
            jQuery('#msj').html(rep);
            jQuery('#mensajes').modal('show', {backdrop: 'static'});
            listar();
        }
    });
}

