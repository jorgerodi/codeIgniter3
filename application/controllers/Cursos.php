<?php
if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Cursos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model( 'codigoprueba_model' );
        $this->load->helper( 'mihelper' );
        $this->load->helper( 'form' );
        
    }
public function index(){
    $this->load->view( 'codigoprueba/headers' );
    $data['cursos'] = $this->codigoprueba_model->obtenerCursos();
    $this->load->view('cursos/cursos', $data);
}
    function nuevo() {
        $this->load->view( 'codigoprueba/headers' );
        $this->load->view( 'cursos/formulario' );

    }

    function recibirDatos() {
        $data = array(
            'nombre' => $this->input->post( 'nombre' ),
            'videos' => $this->input->post( 'videos' ),
            'comentarios' => $this->input->post( 'comentarios' )
        );
        $this->codigoprueba_model->crearCurso( $data );
        $this->load->view( 'codigoprueba/headers' );
        $this->load->view( 'codigoprueba/bienvenido' );

    }
}
?>