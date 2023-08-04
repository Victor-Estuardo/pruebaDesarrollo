<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar la biblioteca session
        $this->load->library('session');
    }

    public function crear_persona() {
        // Obtener los datos del formulario para crear una nueva persona
        $nombre = $this->input->post('nombre');
        $DPI = $this->input->post('DPI');
        $direccion = $this->input->post('direccion');
        $telefono = $this->input->post('telefono');

        // Obtener el id_usuario de la sesión o de la cookie, según cómo estés almacenando el usuario que inició sesión
        $id_usuario = $this->session->userdata('id_usuario'); // O el valor almacenado en la cookie si usaste cookies

        // Debug: Imprimir el valor de id_usuario para verificar si se obtiene correctamente
        echo "id_usuario obtenido: " . $id_usuario;

        // Crear un array con los datos de la persona a insertar
        $datos_persona = array(
            'nombre' => $nombre,
            'DPI' => $DPI,
            'direccion' => $direccion,
            'telefono' => $telefono,
            'fecha_crear' => date('Y-m-d'), // Fecha actual
            'usario_crear' => $id_usuario,
            'fecha_mod' => null, // Aún no se ha modificado, por lo que es null
            'usuario_mod' => null // También será el usuario que crea la persona en este caso
        );

        // Insertar la nueva persona en la tabla Persona
        $this->load->model('PersonaModel');
        $this->PersonaModel->crear_persona($datos_persona);
    }

}
