<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getAllMenu($limit,$start) {
		return $query = $this->db->get('menu',$limit,$start)->result_array();
	}

	public function addNewMenu() {
		$data = [

			'nama' => $this->input->post('nama'),
			'tipe' => $this->input->post('tipe'),
			'keterangan' => $this->input->post('keterangan'),
			'harga' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar'),
			'stok' => 1,

		];

		$this->db->insert('menu', $data);

	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('menu');
	}

	public function getMenuById($id) {
		return $this->db->get_where('menu', ['id' => $id ])->row_array();
	}

	public function update() {
		$data = [
				"nama" => $this->input->post('nama', true),
				"tipe" => $this->input->post('tipe', true),
				"keterangan" => $this->input->post('keterangan', true),
				"harga" => $this->input->post('harga', true),
				"gambar" => $this->input->post('gambar', true),
				"stok" => $this->input->post('stok', true),
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('menu', $data);
	}

	public function getAllUsers() {
		return $query = $this->db->get('users')->result_array();
	}

	public function getAllReservations(){
		return $query = $this->db->get('reservation')->result_array();
	}

	public function deleteR($id) {
		$this->db->where('id', $id);
		$this->db->delete('reservation');
	}

	public function getSearchMenu($keyword) {
		$this->db->like('nama', $keyword);
		$this->db->or_like('tipe', $keyword);
		$this->db->or_like('keterangan', $keyword);
		$this->db->or_like('harga', $keyword);
		$this->db->or_like('stok', $keyword);
		return $this->db->get('menu')->result_array();
	}

	public function getSearchUsers($keyword) {
		$this->db->like('name', $keyword);
		$this->db->or_like('username', $keyword);
		$this->db->or_like('no_hp', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('role_id', $keyword);
		return $this->db->get('users')->result_array();
	}

	public function getSearchReservations($keyword) {
		$this->db->like('date', $keyword);
		$this->db->or_like('time', $keyword);
		$this->db->or_like('guest', $keyword);
		$this->db->or_like('name', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('no_hp', $keyword);
		$this->db->or_like('date_created', $keyword);
		return $this->db->get('reservation')->result_array();
	}

	public function showInvoice(){
		return $query = $this->db->get('invoice')->result();
	}

	public function showPesanan(){
		return $query = $this->db->get('pesanan')->result();
	}

	public function getAllComment(){
		return $query = $this->db->get('contact')->result_array();
	}

	public function getReviewById($id) {
		return $this->db->get_where('contact', ['id' => $id ])->row_array();
	}

	public function updateComent($id) {
		$data = [
				"status" => 'activated',
			];

			$this->db->where('id',$id);
			$this->db->update('contact', $data);
	}

	public function deleteComent($id) {
		$this->db->where('id',$id);
		$this->db->delete('contact');

	}

}
?>