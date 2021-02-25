<?php

class ModelsCorregimientos extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    // paciente
    public function guardar($corregimiento)
    {
        $this->db->trans_start();
        $this->db->insert('informacion', $corregimiento);
        $this->db->trans_complete();
        return !$this->db->trans_status() ? false : true;
    }
    public function obtenerCorregimientos(){
        $sql = $this->db->order_by('id_corregimiento', 'ASC')->get('informacion');
        return $sql->result();
    }
    public function getCorregimientos($id_corregimiento)
    {
        $this->db->select('*');
        $this->db->from('informacion');
        $this->db->where('id_corregimiento', $id_corregimiento);
        $query1 = $this->db->get();
        $query1->result();
        return   $query1->row_array();
    }
    public function actualizar($_idcorregimiento, $data){
        $this->db->where('id_corregimiento', $_idcorregimiento);
        $this->db->update('informacion', $data);
    }
    public function contarRegistros(){
        $this->db->select();
        $this->db->from($this->informacion);
        $sql=$this->db->get();
        return $sql->result();
    }
    // metodos para la paginacion
    public function paginar($page_size,$offset){
        $sql = $this->db->limit($page_size,$offset)->get('informacion');
        return $sql->result();
    }
    public function contarDatos(){
        $sql = $this->db->order_by('id_corregimiento', 'ASC')->get('informacion');
        return $sql->num_rows();
    }
}