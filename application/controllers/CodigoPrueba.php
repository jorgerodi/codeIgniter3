<?php
if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class CodigoPrueba extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper( 'mihelper' );
        $this->load->helper( 'form' );
        $this->load->model( 'codigoprueba_model' );
    }

    function index() {
        $this->load->library( 'menu', array( 'Inicio', 'Contacto', 'Cursos' ) );
        $data[ 'mi_menu' ] = $this->menu->construirMenu();
        $this->load->view( 'codigoprueba/headers' );
        $this->load->view( 'codigoprueba/bienvenido', $data );
    }

    function holaMundo() {
        $this->load->view( 'codigoprueba/headers' );
        $this->load->view( 'codigoprueba/bienvenido' );
    }

}
?>