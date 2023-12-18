<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CodigoPrueba extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('form');
        $this->load->model('codigoprueba_model');
    }

    function index(){
        $this->load->library('menu',array('Inicio', 'Contacto', 'Cursos'));
        $data['mi_menu']= $this->menu->construirMenu();
        $this->load->view('codigoprueba/headers');
        $this->load->view('codigoprueba/bienvenido', $data);
    }

    function holaMundo(){
        $this->load->view('codigoprueba/headers');
        $this->load->view('codigoprueba/bienvenido');
    }

    function nuevo(){
        $this->load->view('codigoprueba/headers');
        $this->load->view('codigoprueba/formulario');

    }

    function recibirDatos(){
        $data = array(
            'nombre' => $this->input->post('nombre'),    
            'videos' => $this->input->post('videos'),
            'comentarios' => $this->input->post('comentarios')
        );
        $this->codigoprueba_model->crearCurso($data);
        $this->load->view('codigoprueba/headers');
        $this->load->view('codigoprueba/bienvenido');
       
    }
}
?>