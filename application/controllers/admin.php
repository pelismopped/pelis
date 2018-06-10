<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct() {

        parent::__construct();

       $this->load->model('Movie_admin');    /* Model is called in controller */

    }
	public function index(){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//Validating Name Field

		$this->form_validation->set_rules('Titulo', 'Titulo');

		//$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

		//Validating Email Field

		$this->form_validation->set_rules('Titulo_original', 'Titulo_original');

		//$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

		//Validating Mobile no. Field

		$this->form_validation->set_rules('Anio', 'Anio', 'required|regex_match[/^[0-9]{4}$/]');
		//$this
		//Validating Address Field

		$this->form_validation->set_rules('Genero', 'Genero', 'required|min_length[2]|max_length[45]');



		$this->form_validation->set_rules('Pais', 'Pais', 'required|min_length[2]|max_length[20]');

		$this->form_validation->set_rules('Descripcion', 'Descripcion');

		$this->form_validation->set_rules('Imagen', 'Imagen');

		//$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');



		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin');

		} else {

			//Setting values for tabel columns

			$data = array(

			'Titulo' => $this->input->post('Titulo'),

			'Titulo_original' => $this->input->post('Titulo_original'),

			'Anio' => $this->input->post('Anio'),

			'Genero' => $this->input->post('Genero'),

			'Pais' => $this->input->post('Pais'),

			'Descripcion' => $this->input->post('Descripcion'),

			'Imagen' => $this->input->post('Imagen')

			);

			//Transfering data to Model

			$this->Movie_admin->add_movie($data);

			$data['message'] = 'Data Inserted Successfully';

			//Loading View

			$this->load->view('admin');

		}

	}

}