<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 * @author
 * @since
 *
 */


class Configuracionl extends CI_Model {

    var $token = null;

    function __construct() {
        $this -> load -> database();
    }
    function Cced(){
            $persona = $this->db->query("SELECT * FROM k_usuarios WHERE cedula='19997832' ");
            if($persona->num_rows() > 0){
                $datos = array("filas"=>$persona->num_rows(),"datos"=>$persona->result());
            }
        return $datos;
    }
    function datosUsuario($id){
        $query = $this->db->query("Select * from k_usuarios WHERE cedula=".$id);
        return $query -> result();
    }
    function listarMisBancos(){
        $id = $this->session->userdata("lote_oid");
        $qr = $this->db->query("SELECT * FROM cuentas_clientes WHERE oidU=".$id." ");
        $datos=array("cant"=>0);
        if($qr->num_rows() >0){
            $rs = $qr->result();
            $rss=array();
            foreach ($rs as $fila){
                $btn ='<a href="#" onclick="EliminarCta('.$fila->id.')"  class="btn btn-danger"><i class="entypo-trash"></i></a>';
                $btn2 ='<a href="#" onclick="Historico('.$fila->id.')"  class="btn btn-info"><i class="entypo-check"></i></a>';

                $rss[] = array(
                    "tipo"=>$fila->tipo,
                    "banco"=>$fila->banco,
                    "ncuenta"=>$fila->ncuenta,
                    "historico"=>$btn2,
                    "eliminar"=>$btn,
                );
            }
            $datos = array("cant"=>1,"datos"=>$rss);
        }
        return $datos;
    }
    function EliminarCta($datos){
        $datos = array_map('trim',$datos);
        $this -> db -> where('id', $datos["id"]);
        $this->db->delete('cuentas_clientes');
        return "Se Elimino con exito";
    }
    function RegistrarBanco($datos){
        $msj="";
        $datos = array_map('trim',$datos);
        $insertar = array(
            "oidU" => $datos['oidU'],
            "banco" => $datos['banco'],
            "tipo" => $datos['tipo'],
            "ncuenta" => $datos["ncuenta"],
        );

        $rs2 = $this->db->insert("cuentas_clientes",$insertar);
        if($rs2) {
            $msj="Se guardo con exito";
        }else{
            $msj= "Error al guardar";
        }
        // }
        return $msj;
    }

}
