<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    // Propiedad protegida
    protected $output;

    public function __construct() {
        parent::__construct();
        // Inicializa la propiedad o realiza otras configuraciones
        $this->output = 'Texto inicial'; // O lo que necesites
    }

    // Método por defecto que se llama cuando accedes al controlador
    public function index() {
        // Carga la vista pasando la propiedad output
        $this->load->view('welcome_message', ['output' => $this->getOutput()]);
    }

    // Método para obtener el valor de la propiedad protegida
    public function getOutput() {
        return $this->output;
    }
	// Método para modificar la salida
    public function setOutput($output) {
        $this->output = $output;
    }
}