<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu{
    // se crea el arreglo que construira nuestro menu
    //  se le pasa como argumento  a nuestro constructor
private $arr_menu;
public function __construct($arr) {
    $this->arr_menu = $arr;


}

public function construirMenu(){
    //se crea  la cadena que vamos a retornar 
    $ret_menu = "<nav><ul>";
    // recorremos  el  arreglo que crea nuestro menu 
    foreach ($this->arr_menu as $opcion){
        $ret_menu .="<li>".$opcion."</li>";
    }
    // cerramos  nuestro menu
    $ret_menu .="</ul></nav>";
    return $ret_menu;

}
}
?>
