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
    public function obtenerCorregimientos()
    {
        $sql = $this->db->order_by('id_corregimiento', 'ASC')->get('informacion');
        return $sql->result();
    }
   
    public function actualizar($_idcorregimiento, $data)
    {
        $this->db->where('id_corregimiento', $_idcorregimiento);
        $this->db->update('informacion', $data);
    }
    
    public function borrarCorregimiento($id_corregimiento,$estatus)
    {
        $this->db->where('id_corregimiento', $id_corregimiento);
        $this->db->update('informacion', $estatus);

    }
    // metodos para la paginacion
    public function paginar($page_size, $offset, $busqueda, $campo)
    {

        $this->db->select();
        $this->db->from('informacion');
        $this->db->limit($page_size, $offset);
        if ($busqueda != "" && $campo != "") {
            $this->db->group_start();
            if ($campo == "id_corregimiento") {
                $this->db->where("id_corregimiento", $busqueda);
            }
            if ($campo == "nombrecorregimiento") {
                $this->db->like('nombrecorregimiento',  $busqueda);
            }
            if ($campo == "municipio") {
                $this->db->like("municipio", $busqueda);
            }
            if ($campo == "veredas") {
                $this->db->like("veredas", $busqueda);
            }
            if ($campo == "pobladores") {
                $this->db->like("pobladores", $busqueda);
            }
            if ($campo == "ubicacionlatitud") {
                $this->db->like("ubicacionlatitud", $busqueda);
            }
            if($campo =="area"){
                $this->db->like("area", $busqueda);
            }
            if($campo =="nautoridadprincipal"){
                $this->db->like("nautoridadprincipal", $busqueda);
            }
            if($campo =="nautoridadpolicial"){
                $this->db->like("nautoridadpolicial", $busqueda);
            }
            if($campo =="miembrosjal"){
                $this->db->like("miembrosjal", $busqueda);
            }
            if ($campo == "jal") {
                $this->db->like("jal", $busqueda);
            }
            if ($campo == "codigodane") {
                $this->db->like("codigodane", $busqueda);
            }
            if ($campo == "numeroadministrativo") {
                $this->db->like("numeroadministrativo", $busqueda);
            }
            $this->db->group_end();
        }

        $sql = $this->db->get();
        return $sql->result();
    }

    public function contarDatos()
    {
        $sql = $this->db->order_by('id_corregimiento', 'ASC')->get('informacion');
        return $sql->num_rows();
    }
    public function contarRegistros($busqueda)
    {
        $this->db->select();
        $this->db->from('informacion');
        if ($busqueda != "") {
            $this->db->like("nombrecorregimiento", $busqueda);
        }
        $sql = $this->db->get();
        return $sql->num_rows();
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
}
