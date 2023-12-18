<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CodigoPrueba extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
    }

    function index(){
        $this->load->view('codigoprueba/bienvenido');
    }

    function holaMundo(){
        $this->load->view('codigoprueba/headers');
        $this->load->view('codigoprueba/bienvenido');
    }
}
?>