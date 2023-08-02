<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaModel extends CI_Model {

    public function getPruebaData() {
        // Obtener los datos de la tabla "prueba"
        $query = $this->db->get('prueba');

        // Verificar si hay datos
        if ($query->num_rows() > 0) {
            return $query->result(); // Devolver un array con los resultados
        } else {
            return array(); // Devolver un array vacío si no hay datos
        }
    }
}
