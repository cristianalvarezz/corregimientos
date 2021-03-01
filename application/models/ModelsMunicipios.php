<?php

class ModelsMunicipios extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    function obtenerMunicipios(){
        $query = $this->db-> query('SELECT id,nombre FROM municipios');


        if ($query->num_rows() > 0) {
    
            foreach($query->result() as $row){
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->nombre, ENT_QUOTES);
            }
    
    
            $query->free_result();
            return $arrDatos;
         }
    
    }
}