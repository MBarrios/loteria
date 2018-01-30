<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {
    public $img = "";
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
    }

    function cliente(){
        if($this->session->has_userdata('lote_email')) {
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $datos['csrf'] = $csrf;
            $datos["vista"] = "admin/configurar/DatosBasicos";
            $this->load->view("admin/incluir/head");
            $this->load->view('admin/dashboart', $datos);
            $js["vista"] = "configurar/DatosBasicos.js";
            $this->load->view("admin/incluir/script", $js);
        }else{
            redirect(site_url("admin"));
        }
    }
    function BCliente(){
        if($this->session->has_userdata('lote_email')) {
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $datos['csrf'] = $csrf;
            $datos["vista"] = "admin/configurar/BCliente";
            $this->load->view("admin/incluir/head");
            $this->load->view('admin/dashboart', $datos);
            $js["vista"] = "configurar/BCliente.js";
            $this->load->view("admin/incluir/script", $js);
        }else{
            redirect(site_url("admin"));
        }
    }
    function Billetera(){
        if($this->session->has_userdata('lote_email')) {
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $datos['csrf'] = $csrf;
            $datos["vista"] = "admin/configurar/Billetera";
            $this->load->view("admin/incluir/head");
            $this->load->view("admin/incluir/BBilletera");
            $this->load->view('admin/dashboart', $datos);
            $js["vista"] = "configurar/Billetera.js";
            $this->load->view("admin/incluir/script", $js);
        }else{
            redirect(site_url("admin"));
        }
    }
    function listarMisBancos(){
        $this->load->model("configuracionl","Conf");
        echo json_encode($this->Conf->listarMisBancos());
    }
    function listarMisMovimiento(){
        $this->load->model("configuracionl","Conf");
        echo json_encode($this->Conf->listarMisMovimiento());
    }
    function RegistrarBanco(){
        $this->load->model("configuracionl","Conf");
        echo $this->Conf->RegistrarBanco($_POST);
    }
    function EliminarCta(){
        $this->load->model("configuracionl","Conf");
        echo $this->Conf->EliminarCta($_POST);
    }
    public function Cced(){
        $this->load->model("configuracionl","Conf");
        $datos = $this->Conf->Cced();
        echo json_encode($datos);
    }

}
