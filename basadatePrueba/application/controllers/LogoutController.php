<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutController extends CI_Controller {

    public function logout() {
        // Eliminar la sesión del usuario
        $this->session->unset_userdata('id_usuario');

        // Redirigir a la página de inicio de sesión o a donde desees
        redirect('LoginController');
    }

}