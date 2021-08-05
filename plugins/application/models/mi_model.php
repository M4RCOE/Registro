<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mi_model extends CI_Model {
  
    public function guarda_dato($datos){
		$this->db->insert('tiempo',$datos);
	}

	public function get_dato($id){
		
		
        $this->db->where('id',$id);
		$query = $this->db->get('tiempo');  
		
		return $query->row();      
	}

	public function update_dato($id, $datos){
		$this->db->update('tiempo', $datos, array('id' => $id));
	}

	public function get_usuario($nombre, $cve){
		$query = $this->db->get_where('user_control', array('nombre' => $nombre, 'clave' => $cve));
		return $query->row_array();    
	}
	 

	public function get_user(){
	 
		$query = $this->db->get('usuarios');  
		return $query->result_array(); 
		   
	}
}