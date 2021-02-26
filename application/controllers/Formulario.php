<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library(array('form_validation'));
		$this->load->library('upload');
		$this->load->helper(array('corregimientos/corregimientos_rules', 'string'));
		$this->load->model('ModelsCorregimientos');
	}
	public function index()
	{
		$this->getTemplate($this->load->view('accionesFormulario/formulario', '', TRUE));
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

		var_dump($longitud);

		$longitud  = 'longitud';
		$config['upload_path'] = 'upload/';
		$config['file_name'] = "nombre_archivo";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($longitud)) {
			echo $this->upload->display_errors();
			return;
		}
		echo $data['uploadSuccess'] = $this->upload->data();
		// $this->form_validation->set_rules(obtenerReglasCorregimientos());
		// if ($this->form_validation->run() == FALSE) {
		// ;
		//     $this->getTemplate($this->load->view('accionesFormulario/formulario', '', TRUE));
		// 	$this->output->set_status_header(400);
		// } else {
		// 	$corregimiento = array(
		// 		'nombrecorregimiento' => $nombrecorregimiento,
		// 		'municipio' => $municipio,
		// 		'veredas' => $veredas,
		// 		'pobladores' => $pobladores,
		// 		'ubicacionlatitud' => $ubicacionlatitud,
		// 		'area' => $area,
		// 		'longitud' => $longitud,
		// 		'nautoridadprincipal' => $nautoridadprincipal,
		// 		'nautoridadpolicial' => $nautoridadpolicial,
		// 		'miembrosjal' => $miembrosjal,
		// 		'jal' => $jal,
		// 		'codigodane' => $codigodane,
		// 		'numeroadministrativo' => $numeroadministrativo
		// 	);
		// 	if (!$this->ModelsCorregimientos->guardar($corregimiento)) {
			  
		// 		$this->output->set_status_header(500);
		// 	} else {
		// 		$this->session->set_flashdata('msg', 'El corregimiento ' .$nombrecorregimiento .' fue registrado exitosamente');
		// 		redirect(base_url('formulario/mostrarCorregimientos'));

		// 	}
		// }
	
	}

	public function guardarimagen($longitud)
	{
		$longitud  = 'longitud';
		$config['upload_path'] = '../../images/';
		$config['file_name'] = "nombre_archivo";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($longitud)) {
			echo $this->upload->display_errors();
			return;
		}
		echo $data['uploadSuccess'] = $this->upload->data();
	}
	public function  buscarlistado($page = 1){
		redirect("/formulario/mostrarCorregimientos/1?busqueda=".$this->input->get('busqueda')."&campo=".$this->input->get('campo'));
	}
	public function mostrarCorregimientos($page = 1)
	{
		$page--;
		$busqueda= $this->input->get('busqueda');
		$campo=$this->input->get('campo');

		if ($page < 0) {
			$page = 0;
		}
		$page_size = 20;
		$offset = $page * $page_size;
	
		$data['corregimientos'] = $this->ModelsCorregimientos->paginar($page_size, $offset,$busqueda,$campo);
		$data["current"] = $page + 1;
		$data["busqueda"] = $busqueda;
		$data["campo"]=$campo;
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


		$this->form_validation->set_rules(obtenerReglasCorregimientos());
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
				'longitud' => $longitud,
				'nautoridadprincipal' => $nautoridadprincipal,
				'nautoridadpolicial' => $nautoridadpolicial,
				'miembrosjal' => $miembrosjal,
				'jal' => $jal,
				'codigodane' => $codigodane,
				'numeroadministrativo' => $numeroadministrativo
			);
			$this->ModelsCorregimientos->actualizar($id_corregimiento, $corregimiento);
			$this->session->set_flashdata('msg', 'El registro identificado con el id :' . $id_corregimiento . ' fue actualizado correctamente');
			redirect(base_url('formulario/mostrarCorregimientos'));
		}
	}
	public function eliminar()
	{
		$id_corregimiento = $this->input->post('id_corregimiento', true);
		if (empty($id_corregimiento)) {
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede ser vacio')));
		} else {
			$this->ModelsCorregimientos->borrarCorregimiento($id_corregimiento);
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
