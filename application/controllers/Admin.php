<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
			parent::__construct();

			//mengecek apakah user sudah login, jika belum login kembalikan ke menu login
			if(!$this->session->userdata('username')) {
				redirect('auth/login');
			}
			else if ($this->session->userdata('role_id') != 1) {
				redirect('main');
			}
		}

		public function menuAdmin() {
		$config['base_url']     = site_url('admin/menuAdmin');
        $config['total_rows']   = $this->db->count_all('menu'); 
        $config['per_page']     = 6 ;
        $config['uri_segment']  = 3;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $config['num_links']    = floor($choice);

        $config['first_link']	= 'First';
        $config['last_link']	= 'Last';
        $config['next_link']	= 'Next';
        $config['prev_link']	= 'Prev';
        $config['full_tag_open']	= '<div class="pagging center-text"><nav><ul class= "pagination justify-content-center">';
        $config['full_tag_close']	= '</ul></nav></div>';
        $config['num_tag_open']		= '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']	='</span></li>';
        $config['cur_tag_open']		='<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']	='</span></li>';
        $config['next_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['next_tagl_close']	='<span aria-hidden="true">&raquo</span></span></li>';
        $config['prev_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['prev_tagl_close']	='</span>Next</li>';
        $config['first_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['first_tagl_close']	='</span></li>';
        $config['last_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['last_tagl_close']	='</span></li>';
        $this->pagination->initialize($config);
        $data['page']           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['title'] = 'MENU ADMIN';

			$data['allMenu'] = $this->admin_model->getAllMenu($config["per_page"],$data['page']);
			if( $this->input->post('keyword') ) {
				$keyword = $this->input->post('keyword');
				$data['allMenu'] = $this->admin_model->getSearchMenu($keyword);

				$this->load->view('templates/header',$data);
				$this->load->view('admin/menuAdmin2',$data);
				$this->load->view('templates/footer');
			} else{
			$data['pagination'] = $this->pagination->create_links();

			$this->load->view('templates/header',$data);
			$this->load->view('admin/menuAdmin',$data);
			$this->load->view('templates/footer');
		}



	}

	//kalau pakai modal
/*	public function addMenu() {

		$this->admin_model->addNewMenu();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan!</div>');
		redirect('admin/menuAdmin');

	}*/

	//kalau gak pake modal
	public function addMenu() {
		$data['title'] = 'Add Menu';

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tipe', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header',$data);
			$this->load->view('admin/addMenu');
			$this->load->view('templates/footer');
		}

		else {

			$this->admin_model->addNewMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan!</div>');
			redirect('admin/menuAdmin');
		
		}

	}

	public function deleteMenu($id) {
		$this->admin_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus!</div>');
		redirect('admin/menuAdmin');
	}

	public function updateMenu($id) {

		$data['title'] = 'Update Menu';
		$data['result'] = $this->admin_model->getMenuById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tipe', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
		$this->form_validation->set_rules('stok', 'Stok', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header',$data);
			$this->load->view('admin/updateMenu',$data);
			$this->load->view('templates/footer');
		}

		else {

			$this->admin_model->update();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil diupdate!</div>');
			redirect('admin/menuAdmin');

		}
	}

	public function allUsers() {
		$data['title'] = 'ALL USERS';

		$data['allUsers'] = $this->admin_model->getAllUsers();

		if( $this->input->post('keyword') ) {
			$keyword = $this->input->post('keyword');
			$data['allUsers'] = $this->admin_model->getSearchUsers($keyword);
		}

		$this->load->view('templates/header',$data);
		$this->load->view('admin/allUsers',$data);
		$this->load->view('templates/footer');

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



	public function contactAdmin(){
    $data['title'] = 'ContactAdmin';

		$data['review'] = $this->admin_model->getAllComment();
		$this->load->view('templates/header',$data);
		$this->load->view('admin/contactAdmin',$data);
		$this->load->view('templates/footer');
	
	}

	public function updateStatus($id){
		$this->admin_model->updateComent($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Coment ini berhasil diaktivasi!</div>');
		redirect('admin/contactAdmin');
                                      
	}                                       
                                           
	public function deleteReview($id){
		$this->admin_model->deleteComent($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Coment berhasil dihapus!</div>');
		redirect('admin/contactAdmin');
	}



}
?>