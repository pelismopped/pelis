<?php
class Movie_model_genero extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function get_genero_pelis($genero){
		//$this->db->select('*');
		$this->db->select('*');
		$this->db->from('pelis');
		$this->db->where('Genero', $genero);
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();	
		return $resultado;
		//return $this->db->count_all('pelis');
				
        //$query = $this->db->get();
        //return $query->result_array();
	}
	function get_pelis($porpagina,$segmento,$genero){
		$this->db->select('*');
		$this->db->from('pelis');
		$this->db->where('Genero', $genero);
		//$consulta = $this->db->limit($porpagina,$segmento);
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();	
		return $resultado;
	}
}