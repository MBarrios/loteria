<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 * @author
 * @since
 *
 */


class Usuario extends CI_Model {

    var $token = null;

    function __construct() {
        $this -> load -> database();
    }
    function validarCuenta($arg = null) {
        $existe = $this -> db -> query("SELECT * FROM k_usuarios WHERE login='{$arg['username']}' AND clave=sha1('{$arg['password']}')");
        $cant = $existe->num_rows();
        $respuesta = array("login_status"=>"invalid");
        if($cant > 0){
            $this->_entrarAdmin($existe->row());
            $respuesta = array("login_status"=>"success");
        }else{
            $this->_salir();
        }
        return $respuesta;
    }

    private function _entrarAdmin($usu) {
        $newuser = array(
            'lote_login'  => $usu->login,
            'lote_cedula'  => $usu->cedula,
            'lote_email'     => $usu->email,
            'lote_tipo' => $usu->tipo,
            'lote_nombre'=> $usu->nombre,
            'lote_apellido'=> $usu->apellido,
            'lote_oid'=> $usu->id,
        );
        $this->session->set_userdata($newuser);
    }
    private function _salir() {
        $this->session->sess_destroy();
    }
    function __destruct() {
        unset($this -> Usuario);
    }
    function crearCliente($data){
        $resp =array("resp"=>0,"mensaje"=>'');
        $insertar = array(
            "nombre"=>$data['nom'],
            "apellido"=>$data["ape"],
            "cedula"=>$data["ced"],
            "telefono"=>$data["tel"],
            "movil"=>$data["cel"],
            "direccion"=>$data["direc"],
            "email"=>$data["email"],
            "login"=>$data["ced"],
            "clave"=>sha1($data["password"])
        );
        $val1 = $this->db->query("SELECT * FROM k_usuarios WHERE email ='".$data['email']."'");
        if($val1 -> num_rows() > 0) return array("resp"=>0,"mensaje"=>'Email ya se encuentra registrado');
        $val2 = $this->db->query("SELECT * FROM k_usuarios WHERE cedula ='".$data['ced']."'");
        if($val2 -> num_rows() > 0) return array("resp"=>0,"mensaje"=>'Cedula de Identidad ya se encuentra registrado');
        if($this->db->insert("k_usuarios", $insertar)){
            /* if ($data['tipoCuenta'] == 1){
                 $insertar2=array("idu"=> $this->db->insert_id());
                 $this->db->insert("cui_sol_empresa", $insertar2);
             }*/
            return array("resp"=>1,"mensaje"=>'Se Registro con Exito, ya puede Ingresar');
        }else{
            return array("resp"=>0,"mensaje"=>'Error al Ingresar');
        }
    }
}
