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
}