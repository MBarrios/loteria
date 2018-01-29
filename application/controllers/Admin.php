<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author: Mauricio Barrios
 * E-mail: mjbr.poet@gmail.com
 *
 */
class Admin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
    }
    public function index()
    {
        if($this->session->has_userdata('lote_email')){
            redirect(base_url("admin/inicio"));
        }else{
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $data['csrf'] = $csrf;
            $this->load->view('admin/login',$data);
        }

    }
    function validarUsuarioAdmin(){
        $this->load->model('usuario', 'Usuario');
        echo json_encode($this->Usuario->validarCuenta($_POST));
    }
    function RegistrarUsuario(){
        $this->load->model('usuario', 'Usuario');
        echo json_encode($this->Usuario->crearCliente($_POST));
    }
    function registrarme(){
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->view('admin/registro',$data);
    }
    function inicio(){
        if($this->session->has_userdata('lote_email')) {
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $datos['csrf'] = $csrf;
            $this->load->model("usuario", "Usuario");
            $datos["vista"] = "admin/configurar/inicio";
            $this->load->view("admin/incluir/head");
            $this->load->view('admin/dashboart', $datos);
            $js["vista"] = "configurar/inicio.js";
            $this->load->view("admin/incluir/script", $js);
        }else{
            redirect(site_url("admin"));
        }
    }

    function salir(){
        session_destroy();
        $array_items = array('lote_login', 'lote_email','lote_tipo','lote_nombre','lote_apellido','lote_tipo');

        $this->session->unset_userdata($array_items);
        redirect(site_url('admin'));
    }
}
