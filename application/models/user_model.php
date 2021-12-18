<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function register($data) {
		$this->db->insert('users', $data);
	}

	public function reserve() {
		$data = [
			'date'         => $this->input->post('date'),
			'time'         => $this->input->post('time'),
			'guest'        => $this->input->post('guest'),
			'name'         => htmlspecialchars($this->input->post('name')),
			'email'        => htmlspecialchars($this->input->post('email')),
			'no_hp'        => $this->input->post('no_hp'),
			'date_created' => time(),
		];

		$this->db->insert('reservation', $data);

	}

	public function find($id){
			$result = $this->db->where('id', $id)->limit(1)->get('menu');
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return array();
			
			}
		}

	public function pesan(){
			date_default_timezone_set('Asia/Jakarta');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');

			$invoice =  array(
				'nama' => $nama,
				'alamat' => $alamat,
				'tgl_pesan' => date('Y-m-d H:i:s'), 
				'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d')+1,date('Y'))),

			);

			$this->db->insert('invoice',$invoice);
			$id_invoice= $this->db->insert_id();

			foreach ($this->cart->contents() as $item){
				$data = array(
					'id_invoice' => $id_invoice,
					'id_brg' => $item['id'],
					'nama_brg' => $item['name'],
					'jumlah' => $item['qty'],
					'harga' => $item['price'],
				);
				$this->db->insert('pesanan',$data);
			}
			return true;
		}



}
?>