<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
			parent::__construct();

			//mengecek apakah user sudah login, jika belum login kembalikan ke menu login
			if(!$this->session->userdata('username')) {
				redirect('auth/login');
			}
		}

	public function profile() {

		$data['title'] = "PROFILE";
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('templates/footer');
	}

	public function reservation() {
		$data['title'] = "RESERVATION";
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');
		$this->form_validation->set_rules('guest', 'Guest', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('no_hp', 'Phone', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('user/reservation', $data);
			$this->load->view('templates/footer');

		}

		else {
			$this->user_model->reserve();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Thank you, your table has already booked!</div>');
			redirect('user/reservation');
		}

	}

	public function cart($id) //function login
	{
		

		$barang = $this->user_model->find($id);

		$data = array(
        'id'      => $barang->id,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama,
        
		);

			$this->cart->insert($data);
			redirect('main/menu');
	}

	public function keranjang(){
		$data['title'] = "CART";
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('user/cart',$data);
		$this->load->view('templates/footer');
	}

	public function hapus(){
		$this->cart->destroy();
		redirect('main/menu');
	}

	public function bayar(){
		$data['title'] = "PAYMENT";
		$this->load->view('templates/header');
		$this->load->view('user/bayar');
		$this->load->view('templates/footer');

	}

	public function pemesanan(){
		$data['user'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
		
		$is_processed = $this->user_model->pesan();
		if($is_processed){
		$this->cart->destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih! Pesanan anda akan diproses</div>');
		redirect('main/menu');
		} else {
			echo "Maaf, Pesanan Anda Gagal";
		}
		
	}


}
?>