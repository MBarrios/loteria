<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
        //$this->load->helper(array('form'));

    }

    public function index()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        //$this->load->model("servicios","servi");
        $data['vista'] = "principal/principal";
        $data['js'] = array("general/global","principal/app","principal/inicio");
        $data['cate'] = $this->servi->menuCategorias();
        $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp');
    }

    public function nosotros()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->model("servicios","servi");
        $data['vista'] = "principal/about";
        $data['js'] = array("general/global","principal/app");
        $data['cate'] = $this->servi->menuCategorias();
        $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp');
    }

    public function contactenos()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->model("servicios","servi");
        $data['vista'] = "principal/contact";
        $data['js'] = array("general/global","principal/app");
        $data['cate'] = $this->servi->menuCategorias();
        $this->load->view('principal/plantilla',$data);
    }

    public function login(){
        $this->load->model("servicios","servi");
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $data['vista'] = "principal/login_cliente";
        $data['cate'] = $this->servi->menuCategorias();
        $data['js'] = array("general/global","logincliente","principal/app");
        $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp',$data);
    }

    function validarCliente(){
        $this->load->model('usuario', 'Usuario');
        $resp = $this->Usuario->validarCuentaCliente($_POST);
        echo json_encode($resp);
    }

    function registrarCliente(){
        $this->load->model('usuario', 'Usuario');
        $resp = $this->Usuario->crearCliente($_POST);
        echo json_encode($resp);
    }

    function inicio(){
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->model("servicios","servi");
        $datos["vista"] = "inicio";
        $datos['cate'] = $this->servi->menuCategorias();

        $data['js'] = array("general/global","principal/app");
        $this->load->view("incluir/head");
        $this->load->view("principal/dashboart",$datos);
        $this->load->view("incluir/script");
    }

    function sinacceso(){
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $datos["vista"] = "sinacceso";
        $this->load->view("incluir/head");
        $this->load->view("principal/dashboart",$datos);
        $this->load->view("incluir/script");
    }

    function blog(){
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->model("servicios","servi");
        $data['vista'] = "principal/blog";
        $data['js'] = array("general/global","principal/app");
        $this -> load -> database();
        $js = array();
        $lst = $this->db->query("SELECT * FROM blog where estatus=0 order by fecha desc");
        $data['cate'] = $this->servi->menuCategorias();
        $data["lista"] = $lst->result();
        $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp',$js);
    }

    function detalleblog($id){
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->model("Utilidades","Util");
        $this->load->model("Servicios","servi");
        $data['vista'] = "principal/detalleblog";
        $js['js'] = array("general/global","principal/app","detalleblog");

        $lst = $this->db->query("SELECT * FROM blog where estatus=0 and id=".$id." ");
        $data['cate'] = $this->servi->menuCategorias();
        $data["blog"] = $lst->row();
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp',$js);
    }

    function guardarComentario(){
        $resp = $this->db->insert("comment",$_POST);
        if($resp) echo "Se guardo con exito.";
        else echo "Error al guardar";
    }

    function listaComentarios($id){

        $result = $this->db->query("SELECT * FROM comment where idblog=".$id." order by fecha desc");
        echo json_encode($result->result());
    }

    function obtenerRecientes($limit){
        $this->load->model("servicios","servi");
        $logueado = false;
        $tipo = false;
        if($this->session->userdata("cui_login")) {
            $logueado=true;
            $tipo = $this->session->userdata("cui_tipo");
        }
        $productos=$this->servi->recientes($limit);
        $datos = array("logueado"=>$logueado,"tipo"=>$tipo,"datos"=>$productos);
        echo json_encode($datos);
    }

    function obtenerEntradasRecientes($limit){
        $this->load->model("servicios","servi");
        $logueado = false;
        $tipo = false;
        if($this->session->userdata("cui_login")) {
            $logueado=true;
            $tipo = $this->session->userdata("cui_tipo");
        }
        $productos=$this->servi->recientesEntradas($limit);
        $datos = array("logueado"=>$logueado,"tipo"=>$tipo,"datos"=>$productos);
        echo json_encode($datos);
    }

    function obtenerDestacados($limit){
        $this->load->model("servicios","servi");
        $logueado = false;
        $tipo = false;
        if($this->session->userdata("cui_login")) {
            $logueado=true;
            $tipo = $this->session->userdata("cui_tipo");
        }
        $productos=$this->servi->destacados($limit);
        $datos = array("logueado"=>$logueado,"tipo"=>$tipo,"datos"=>$productos);
        echo json_encode($datos);
    }

    function productos($met=null,$offset=0,$order = ""){
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $logueado = false;
        $nivel = 9;
        if($this->session->has_userdata('cui_login')){
            $logueado = true;
            $nivel = $this->session->has_userdata('cui_nivel');
        }
        $data['logueado'] = $logueado;
        $data['nivel'] = $nivel;

        $porPagina = 12;
        $this->load->model("servicios","servi");
        $data['vista'] = "principal/productos";
        $js['js'] = array("general/global","principal/app","productos");
        $data['cate'] = $this->servi->menuCategorias();
        if(isset($_POST['buscar'])) $met = 's-'.$_POST['buscar'];
        $data["lista"] = $this->servi->buscarProductos($met,$offset,$porPagina,$order);
        $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp',$js);
    }

    function producto($id){

        $logueado = false;
        $nivel = 9;
        if($this->session->has_userdata('cui_login')){
            $logueado = true;
            $nivel = $this->session->has_userdata('cui_nivel');
        }
        $data['logueado'] = $logueado;
        $data['nivel'] = $nivel;
        $this->load->model("Utilidades","Util");
        $this->load->model("Servicios","servi");
        $data['vista'] = "principal/detalleproducto";
        $js['js'] = array("general/global","principal/app","detalleproducto");
        $data['cate'] = $this->servi->menuCategorias();

        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['csrf'] = $csrf;
        $data['producto'] = $this->servi->datosProducto($id);
         $this->load->view('principal/plantilla',$data);
        $this->load->view('incluir/scriptp',$js);
    }

    function salir(){
        session_destroy();
        $array_items = array('cui_login', 'cui_email','cui_tipo','cui_nombre','cui_apellido');

        $this->session->unset_userdata($array_items);
        redirect(site_url('admin'));
    }
}
