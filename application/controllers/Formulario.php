<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library(array('form_validation'));
		$this->load->library('upload');
		$this->load->helper(array('corregimientos/corregimientos_rules_helper.php', 'string'));
		$this->load->model('ModelsCorregimientos');
	}
	public function index()
	{
		$this->load->view('formulario');
	}
	public function store()
	{
		$nombrecorregimiento = $this->input->post('nombrecorregimiento');
		$municipio = $this->input->post('municipio');
		$veredas = $this->input->post('veredas');
		$pobladores = $this->input->post('pobladores');
		$ubicacionlatitud = $this->input->post('ubicacionlatitud');
		$area = $this->input->post('area');
		$longitud = $this->input->post('longitud');
		$nautoridadprincipal = $this->input->post('nautoridadprincipal');
		$nautoridadpolicial = $this->input->post('nautoridadpolicial');
		$miembrosjal = $this->input->post('miembrosjal');
		$jal = $this->input->post('jal');
		$codigodane = $this->input->post('codigodane');
		$numeroadministrativo = $this->input->post('numeroadministrativo');

		// $this->form_validation->set_rules(obtenerReglasCorregimientos());
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('formulario');
		//     $this->output->set_status_header(400);
		// }else{

		// }
		$corregimiento = array(
			'nombrecorregimiento' => $nombrecorregimiento,
			'municipio' => $municipio,
			'veredas' => $veredas,
			'pobladores' => $pobladores,
			'ubicacionlatitud' => $ubicacionlatitud,
			'area' => $area,
			'longitud' => $longitud,
			'nautoridadprincipal' => $nautoridadprincipal,
			'nautoridadpolicial' => $nautoridadpolicial,
			'miembrosjal' => $miembrosjal,
			'jal' => $jal,
			'codigodane' => $codigodane,
			'numeroadministrativo' => $numeroadministrativo
		);
		if(!$this->ModelsCorregimientos->guardar($corregimiento)){
			$this->output->set_status_header(500);
		}else{
			$this->session->set_flashdata('msg','El corregimiento fue registrado exitosamente');
			redirect('formulario');
		}
	}
}
