<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function login_user($username,$password){
		$this->db->select('*');
		$this->db->from('users');
		//$users=$this->db->where('username',$username);
		$pass=$this->db->where('password',$password);
        $query = $this->db->get();
		$resultado = $query->row();
      	return $resultado;
	 }
}