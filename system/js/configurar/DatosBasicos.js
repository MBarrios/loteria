jQuery(document).ready(function() {
    jQuery("#cedula").on("blur",function(){
        consultar();
    });
    if(jQuery("#cedula").val() != '') consultar();
});
function consultar(){
        jQuery.ajax({
            url : urlConf  + "Cced/",
            type : 'POST',
            contentType : false,
            processData : false,
            cache : false,
            dataType : "json",
            success : function(json) {
                //alert(JSON.stringify(json));
                if(json.filas != 0){
                    llenar(json.datos[0]);
                }else{
                    vaciar();
                }

            }
        });
}
function llenar(dat){
    jQuery("#id").val(dat.id);
    jQuery("#nombre").val(dat.nombre);
}

function vaciar(){
    jQuery("#id").val("");
    jQuery("#nombre").val("");
}


function guardar(){
    var datos = jQuery("#frmPersona").serialize();
    jQuery.ajax({
        url : sUrlP + "registrarPersonal",
        data : datos,
        type : 'POST',
        success : function(rep) {
            jQuery('form').each (function(){
                this.reset();
            });
            jQuery('#msj').html(rep);
            jQuery('#mensajes').modal('show', {backdrop: 'static'});
        }
    });
    return false;
}

