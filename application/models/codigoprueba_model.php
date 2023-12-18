<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigoprueba_model extends CI_Model {
    function __construct(){
        parent::__construct();
        // se carga la base de datos
        $this->load->database();
    }
    function crearCurso ($data){
        // se crea  la funcion para insertar datos
        $this->db->insert("cursos",array(
            'nombreCurso'=>$data['nombre'],
            'videosCurso'=>$data['videos'],
            'extra'=>$data['comentarios']
        ));
    }
}
?>