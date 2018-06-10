<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie_admin extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function add_movie($data){
	   /* $data = array(
	       'Titulo' => $this->input->post('Titulo'),	       
	      'Titulo_original' => $this->input->post('Titulo_original'),
	      'Anio' => $this->input->post('Anio'),
	      'Genero' => $this->input->post('Genero'),

	      'Pais' => $this->input->post('Pais'),
	      'Descripcion' => $this->input->post('Descripcion'),
	      'Imagen' => $this->input->post('Imagen'),

	    );*/
	    $this->db->insert('pelis',$data);
	}
}