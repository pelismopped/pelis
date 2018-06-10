<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{ 
	function __construct() {
        parent::__construct();
        $this->load->model('Movie_model');    /* Model is called in controller */
        $this->load->model('Movie_model_genero');
        $this->load->library('form_validation'); 
        $this->load->helper("url");        
		$this->load->helper('form');		
		//$this->load->database();
		
    }
    public function paginacion(){
		//$this->load->model('Movie_model');		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Welcome/index/';
		//Obtiene el total de registros a paginar 
		$config['total_rows'] = $this->Movie_model->get_total_pelis();
		//Obtiene el numero de registros a mostrar por pagina 
	    $config['per_page'] = '16';	
	    //Indica que segmento de la URL tiene la paginación, por default es 3
	    $config['uri_segment'] = '3';
	    //Se personaliza la paginación para que se adapte a bootstrap
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['last_link'] = FALSE;
	    $config['first_link'] = FALSE;
	    $config['next_link'] = '&raquo;';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo;';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $this->pagination->initialize($config);
  		// Se obtienen los registros a mostrar
	  	$desde = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		// Se obtienen los registros a mostrar
		$datos['pelis'] = $this->Movie_model->get_pelis($config['per_page'], $desde);  	    
		// Retorna los datos con el total de datos paguinados
		return $datos;
	    //Se llama a la vista para mostrar la información
    }
	public function index(){		
		$this->load->view('index');
		$this->load->view('container');   
		$ultimosArticulos['pelis'] = $this->Movie_model->get_listar_new_pelis();
		$this->load->view('banner_bottom',$ultimosArticulos);
	    //Se llama a la vista para mostrar la información y se adiciona la paguinacion
	   	$this->load->view('cuerpo', $this->paginacion());	   
	    // Se guarda el cache de la paguina
	    //$this->output->cache(5);
		$this->load->view('footer');	
	}
	//mostramos los comentarios con ajax con esta función
	public function buscar(){
		$search = $this->input->post('search');
		// Se llama al modelos buscar
		$query = $this->Movie_model->get_buscar($search);
		// Pregunta si el campo no esta vacio
		if( !empty($query) ) {
			foreach ($query as $row_services){	
				// Crea la lista con los resultados del modelo			
				echo '<div ><a class="suggest-element" title="'.utf8_encode($row_services['Titulo']).'" id="'.$row_services['id'].'">'.utf8_encode($row_services['Titulo']).'</a></div>';				
			}
		}else{
			echo '<div >No se encontraron datos</div>';				
			return FALSE;
		}
	}
	public function buscar_todos($id=NULL){
		$this->load->helper('form');
		$this->load->helper('url');
		$respuesta = $this->input->post('Search');
		$this->load->view('index');
		$this->load->view('container');
		if(!empty($respuesta)){
			
			$this->load->model('Movie_model');
			$datos['pelis'] = $this->Movie_model->get_buscar_todos($respuesta);
			if (empty($datos)){
				$this->load->view('cuerpo', $datos);
			}else{
				$this->load->view('busqueda', $datos);
			}
		}else{
			$this->load->view('cuerpo', $this->paginacion());
		    // Se crea el cache para toda la paguina
		    //$this->output->cache(5);			
		}
		$this->load->view('footer');	
	}
	public function BuscarCriterio($search=NULL){
		$this->load->helper('url');
		$this->load->view('index');
		$this->load->view('container');
		$this->load->model('Movie_model');
		$datos['pelis'] = $this->Movie_model->get_buscarCriterio($search);
		if (empty($datos)){
			$this->load->view('cuerpo', $datos);
		}else{
			$this->load->view('busqueda', $datos);
		}
		$this->load->view('footer');
	}
     //insertamos el nuevo comentario y lo validamos
    public function nuevoComentario($id) {
    	$this->load->helper('form');
        //$this->form_validation->set_rules('comentario', 'trim|required|xss_clean|min_length[5]');
        if ($this->form_validation->run() == TRUE) {
            $this->muestra($id);
        } else {
        	$autor = $this->input->post('autor');
            $respuesta = $this->input->post('comentario');
            $fecha = date('Y-m-d H:i:s');
            $insert = $this->Movie_model->insertComentarios($id,$autor,$respuesta,$fecha);
            $this->muestra($id);
        }
    }
	public function genero($genero){

		$this->load->helper('url');
		$this->load->view('index');
		$this->load->view('container');
		$this->load->model('Movie_model');	
        $ultimosArticulos['pelis'] = $this->Movie_model->get_genero_pelis($genero);
        $this->load->view('genero', $ultimosArticulos);
    	//$this->load->view('genero', $this->paginacion($pagina,$genero));    	
    	//$this->load->view('cuerpo', $this->paguinacion($pagina));
        $this->load->view('footer');
	}
	
	public function listar($var){

		$this->load->helper('url');
		$this->load->view('index');
		$this->load->view('container');
		$this->load->model('Movie_model');	
		//pido al modelo el genero de la pelicula que se desea ver		
		$ultimosArticulos['pelis'] = $this->Movie_model->get_listar_pelis($var);		
        $this->load->view('listar', $ultimosArticulos);
        $this->load->view('footer');
	}
	public function Top(){

		$this->load->view('index');
		$this->load->view('container');
		$this->load->model('Movie_model');	
		//Pide al modelo el genero de la pelicula que se desea ver		
		$ultimosArticulos['pelis'] = $this->Movie_model->get_listar_top_pelis();		
        $this->load->view('top', $ultimosArticulos);
        $this->load->view('footer');
	}
	public function Contactenos(){

		$this->load->helper('url');
		$this->load->view('index');
		$this->load->view('container');
		$this->load->view('contactenos');	
		//pido al modelo el genero de la pelicula que se desea ver		
        $this->load->view('footer');
	}
	public function pais($pais){

		$this->load->helper('url');
		$this->load->view('index');
		$this->load->view('container');
		$this->load->model('Movie_model');	
		//pido al modelo el pais de la pelicula que se desea ver
		$ultimosArticulos['pelis'] = $this->Movie_model->get_pais_pelis($pais);		        
        $this->load->view('pais', $ultimosArticulos);
        $this->load->view('footer');
	}
	public function muestra($id){

		$this->load->view('index');
		$this->load->view('container');

		//pido al modelo la pelicula que se desea ver
        $ultimosArticulos['pelis'] = $this->Movie_model->get_id_pelis($id);

       	$ultimosArticulos['posts'] = $this->Movie_model->get_id_comentario($id);
        $ultimosArticulos['tops'] = $this->Movie_model->get_listar_top_pelis();
        $this->load->view('peli', $ultimosArticulos);
        $this->load->view('footer');
	}
}