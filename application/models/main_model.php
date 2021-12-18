<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
	public function get_menu_all($limit,$start){
		return $query= $this->db->get('menu',$limit,$start)->result();
	}
	
	public function get_menu_savories(){
		$query = $this->db->get_where('menu',array('tipe'=> 1));
		return $query->result();
	}

	public function get_menu_dumplings(){
		$query = $this->db->get_where('menu',array('tipe'=> 2));
		return $query->result();
	}

	public function get_menu_deserts(){
		$query = $this->db->get_where('menu',array('tipe'=> 3));
		return $query->result();
	}

	public function get_menu_drinks(){
		$query = $this->db->get_where('menu',array('tipe'=> 4));
		return $query->result();
	}

	public function getAllComment(){
		return $query = $this->db->get('contact')->result_array();
	}
}
?>