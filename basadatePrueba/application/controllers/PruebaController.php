<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('prueba');
    }

   

    public function index() {
        // Cargar el modelo que se encargará de interactuar con la tabla "prueba"
        verificar_autenticacion($this);
        // Cargar la vista y pasar los datos a la misma
        $this->load->view('prueba');
    }
}




