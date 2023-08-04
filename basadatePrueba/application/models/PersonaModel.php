<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaModel extends CI_Model {
    public function crear_persona($datos) {
        $this->db->insert('Persona', $datos);
    }
    // Otros métodos del modelo para obtener, editar o realizar otras operaciones con personas
}
