<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library(array('form_validation'));

		$this->load->helper(array('corregimientos/corregimientos_rules', 'string'));
		$this->load->model('ModelsCorregimientos');
		$this->load->helper('date');
	}
	public function index()
	{
	
		$this->getTemplate($this->load->view('accionesFormulario/formulario','', TRUE));
	}

	public function store()
	{
		$nombrecorregimiento = $this->input->post('nombrecorregimiento');
		$municipio = $this->input->post('municipio');
		$veredas = $this->input->post('veredas');
		$pobladores = $this->input->post('pobladores');
		$ubicacionlatitud = $this->input->post('ubicacionlatitud');
		$area = $this->input->post('area');
		$longitudnombre=$this->input->post('longitudnombre');
		$longitud =  $_FILES["longitud"]["name"];
		$nautoridadprincipal = $this->input->post('nautoridadprincipal');
		$nautoridadpolicial = $this->input->post('nautoridadpolicial');
		$miembrosjal = $this->input->post('miembrosjal');
		$jal = $this->input->post('jal');
		$codigodane = $this->input->post('codigodane');
		$numeroadministrativo = $this->input->post('numeroadministrativo');

		
	
	
		$this->form_validation->set_rules(obtenerReglasCorregimientos());
		if ($this->form_validation->run() == FALSE) {
			$this->getTemplate($this->load->view('accionesFormulario/formulario', '', TRUE));
			$this->output->set_status_header(400);
		} else {
			$corregimiento = array(
				'nombrecorregimiento' => $nombrecorregimiento,
				'municipio' => $municipio,
				'veredas' => $veredas,
				'pobladores' => $pobladores,
				'ubicacionlatitud' => $ubicacionlatitud,
				'area' => $area,
				'longitud' => $this->guardarimagen($longitud,$longitudnombre),
				'nautoridadprincipal' => $nautoridadprincipal,
				'nautoridadpolicial' => $nautoridadpolicial,
				'miembrosjal' => $miembrosjal,
				'jal' => $jal,
				'codigodane' => $codigodane,
				'numeroadministrativo' => $numeroadministrativo,
				'estatus' => 1,
				'fechae'=>""
			);
			if (!$this->ModelsCorregimientos->guardar($corregimiento)) {
				$this->output->set_status_header(500);
			} else {
				$this->session->set_flashdata('msg', 'El corregimiento ' . $nombrecorregimiento . ' fue registrado exitosamente');
				redirect(base_url('formulario/mostrarCorregimientos'));
			}
		}
	}

	public function guardarimagen($longitud,$longitudnombre)
	{
	
		var_dump($longitud);
		$formato= explode( '.', $longitud) ;
		$longitud='longitud';
		$config['upload_path'] = 'upload/';
		$config['file_name'] = $longitudnombre;
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($longitud)) {
			echo $this->upload->display_errors();
			return;
		}
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		return $config['upload_path'].$config['file_name'].".".$formato[1];
	

	}
	public function  buscarlistado($page = 1)
	{
		redirect("/formulario/mostrarCorregimientos/1?busqueda=" . $this->input->get('busqueda') . "&campo=" . $this->input->get('campo') . "&num_registros=" . $this->input->get('num_registros'));
	}
	public function mostrarCorregimientos($page = 1)
	{
	
		$page--;
		$num_registros = $this->input->get('num_registros');
		$busqueda = $this->input->get('busqueda');
		$campo = $this->input->get('campo');
		$page_size = 20;

		if ($page < 0) {
			$page = 0;
		}
		if ($num_registros != "" && $num_registros != null && is_numeric($num_registros)) {
			$page_size = $num_registros;
		}

		$offset = $page * $page_size;

		$data['corregimientos'] = $this->ModelsCorregimientos->paginar($page_size, $offset, $busqueda, $campo);
		$data["current"] = $page + 1;
		$data["busqueda"] = $busqueda;
		$data["num_registros"] = $num_registros;
		$data["campo"] = $campo;
		$data["last_pag"] = ceil($this->ModelsCorregimientos->contarRegistros($busqueda) / $page_size);
		$this->ModelsCorregimientos->obtenerCorregimientos();
		$this->getTemplate($this->load->view('accionesFormulario/mostrarCorregimientos', array('data' => $data), TRUE));
	}
	public function editar($id_corregimiento = 0)
	{
		$corregimientos = $this->ModelsCorregimientos->getCorregimientos($id_corregimiento);
		$view = $this->load->view('accionesFormulario/editarCorregimiento', array('corregimientos' => $corregimientos), true);
		$this->getTemplate($view);
	}

	public function actualizar()
	{
		$datestring = '%Y-%m-%d  %H:%i:%s';
		$time = time();
	 
		$id_corregimiento = $this->input->post('id_corregimiento');
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
	


		$this->form_validation->set_rules(actualizarReglasCorregimientos());
		if ($this->form_validation->run() == FALSE) {
			$this->getTemplate($this->load->view('accionesFormulario/editarCorregimiento', '', TRUE));
			$this->output->set_status_header(400);
		} else {
			$corregimiento = array(
				'nombrecorregimiento' => $nombrecorregimiento,
				'municipio' => $municipio,
				'veredas' => $veredas,
				'pobladores' => $pobladores,
				'ubicacionlatitud' => $ubicacionlatitud,
				'area' => $area,
				'nautoridadprincipal' => $nautoridadprincipal,
				'nautoridadpolicial' => $nautoridadpolicial,
				'miembrosjal' => $miembrosjal,
				'jal' => $jal,
				'codigodane' => $codigodane,
				'numeroadministrativo' => $numeroadministrativo,
				'fechae' =>  mdate($datestring, $time)
			);
			$this->ModelsCorregimientos->actualizar($id_corregimiento, $corregimiento);
			$this->session->set_flashdata('msg', 'El registro identificado con el id :' . $id_corregimiento . ' fue actualizado correctamente');
			redirect(base_url('formulario/mostrarCorregimientos'));
		}
	}
	public function eliminar()
	{
		$id_corregimiento = $this->input->post('id_corregimiento', true);
		$estatus = array(
			'estatus' => 0
		);
		if (empty($id_corregimiento)) {
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede ser vacio')));
		} else {
			$this->ModelsCorregimientos->borrarCorregimiento($id_corregimiento,	$estatus);
			$this->output
				->set_status_header(200);
		}
	}

	public function getTemplate($view)
	{
		$data = array(
			'head' => $this->load->view('layout/head', '', TRUE),
			'nav' => $this->load->view('layout/nav', '', TRUE),
			'aside' => $this->load->view('layout/aside', '', TRUE),
			'content' => $view,
			'footer' => $this->load->view('layout/footer', '', TRUE),
		);

		$this->load->view('dashboard', $data);
	}
}
