<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waiters extends CI_Controller {
	public function __construct() {
			parent::__construct();

			//mengecek apakah user sudah login, jika belum login kembalikan ke menu login
			if(!$this->session->userdata('username')) {
				redirect('auth/login');
			}
			else if ($this->session->userdata('role_id') == 2) {
				redirect('main');
			}
		}

public function reservation() {
		$data['title'] = 'ALL RESERVATION';
		$data['allReservations'] = $this->admin_model->getAllReservations();

		if( $this->input->post('keyword') ) {
			$keyword = $this->input->post('keyword');
			$data['allReservations'] = $this->admin_model->getSearchReservations($keyword);
		}

		$this->load->view('templates/header',$data);
		$this->load->view('admin/allReservations',$data);
		$this->load->view('templates/footer');
	}

	public function deleteReservation($id) {
		$this->admin_model->deleteR($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reservation berhasil dihapus!</div>');
		redirect('admin/reservation');
	}

	public function invoice(){
		$data['title'] = 'INVOICE';
		$data['invoice'] = $this->admin_model->showInvoice();
		$data['pesanan'] = $this->admin_model->showPesanan();

		$this->load->view('templates/header',$data);
		$this->load->view('admin/invoice',$data);
		$this->load->view('templates/footer');
	
	}
}
?>