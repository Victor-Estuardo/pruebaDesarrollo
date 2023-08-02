<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaController extends CI_Controller {

    public function index() {
        // Cargar el modelo que se encargará de interactuar con la tabla "prueba"
        $this->load->model('PruebaModel');

        // Obtener los datos de la tabla "prueba"
        $data['prueba_data'] = $this->PruebaModel->getPruebaData();

        // Cargar la vista y pasar los datos a la misma
        $this->load->view('prueba_view', $data);
    }
}
