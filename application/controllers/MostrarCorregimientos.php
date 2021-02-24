<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MostrarCorregimientos extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->getTemplate($this->load->view('accionesFormulario/mostrarCorregimientos','',TRUE));
	}

	public function getTemplate($view){
        $data = array(
            'head' => $this->load->view('layout/head','',TRUE),
            'nav' => $this->load->view('layout/nav','',TRUE),
            'aside' => $this->load->view('layout/aside','',TRUE),
            'content' => $view,
            'footer' => $this->load->view('layout/footer','',TRUE),
        );

        $this->load->view('dashboard',$data);
    }
}