<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller { 
	function __construct() {

       parent::__construct();

      // $this->load->model('login_model/login_user');    /* Model is called in controller */        

    }
    public function index(){ 

		 $datos= array();

		 $this->load->view(base_url().'login/iniciar_sesion', $datos);

 	}

 	public function iniciar_sesion(){

 		$this->load->view('iniciar_sesion');

 		if($this->input->post()){

 			$username  = $this->input->post('username');

 			$password = $this->input->post('password');

 			$this->load->model('login_model');

 			$usuario = $this->login_model->login_user($username,$password);

 			if($usuario){

 				$usuario_data = array( 					

 					'id' => $usuario->id,

 					'nombre' =>$usuario->username,

 					'logueado' =>TRUE

 				);

 				$this->session->set_userdata($usuario_data);

	 			//if($usuario->perfil == 'administrador'){

	 			//redirect(base_url().'admin',$usuario_data);

	 			redirect(base_url().'login/logueado');

	 			//}

 			}else{

 				redirect('login/iniciar_sesion');

 				//redirect(base_url().'admin',$usuario);

 			}

 		}else{



 			//$this->iniciar_sesion();

 		}

 	}

 	public function logueado(){

 		if($this->session->userdata('logueado')){

         $data = array();

         $data['nombre'] = $this->session->userdata('nombre');

         $this->load->view('admin', $data);

	     }else{

	        redirect(base_url().'login/iniciar_sesion');

	     }

 	} 	

 	public function cerrar_sesion() {

      $usuario_data = array(

         'logueado' => FALSE

      );

      $this->session->set_userdata($usuario_data);

      redirect('login/iniciar_sesion');

   }

}