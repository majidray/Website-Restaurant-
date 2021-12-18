<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$data['title'] = 'HOME';

		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');

	}

	public function menu() {
		$data['title'] = 'MENU';
		$config['base_url']     = site_url('main/menu');
        $config['total_rows']   = $this->db->count_all('menu');
        $config['per_page']     = 6;
        $config['per_pagesub']     = 4;

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
        $config['cur_tag_open']		='<li class="page-item active "><span class="page-link">';
        $config['cur_tag_close']	='</span></li>';
        $config['next_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['next_tagl_close']	='<span aria-hidden="true">&raquo</span></span></li>';
        $config['prev_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['prev_tagl_close']	='</span>Next</li>';
        $config['first_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['first_tagl_close']	='</span></li>';
        $config['last_tag_open']		='<li class="page-item "><span class="page-link">';
        $config['last_tagl_close']	='</span></li>';

        $config['base_url']     = site_url('main/menu');
        $config['total_rows']   = $this->db->count_all('menu'); 
        $config['total_rows1']   = $this->db->count_all('menu',array('tipe'=> 1));
        $config['total_rows2']   = $this->db->count_all('menu',array('tipe'=> 2)); 
        $config['total_rows3']   = $this->db->count_all('menu',array('tipe'=> 3)); 
        $config['total_rows4']   = $this->db->count_all('menu',array('tipe'=> 4)); 

        $config['per_page']     = 6;
        $config['per_pagesub']     = 4;

        $config['uri_segment']  = 3;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $choice1                 = $config["total_rows1"] / $config['per_pagesub'];

        $config['last_tagl_close']	='</span></li>';
        $this->pagination->initialize($config);
        
        $data['page']           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['resultAll'] = $this->main_model->get_menu_all($config["per_page"],$data['page']);
		$data['resultSavories'] = $this->main_model->get_menu_savories();
		$data['resultDumplings'] = $this->main_model->get_menu_dumplings();
		$data['resultDeserts'] = $this->main_model->get_menu_deserts();
		$data['resultDrinks'] = $this->main_model->get_menu_drinks();

		$data['pagination'] = $this->pagination->create_links();
		

		$this->load->view('templates/header',$data);
		$this->load->view('menu');
		$this->load->view('templates/footer');

	}

	public function contact() {
		$data['title'] = 'CONTACT';

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required|trim');
		$this->form_validation->set_rules('message', 'Message', 'required|trim');
		
		if( $this->form_validation->run() == FALSE ) {

			$this->load->view('templates/header', $data);
			$this->load->view('contact');
			$this->load->view('templates/footer');

		}

		else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'subject' => htmlspecialchars($this->input->post('subject', true)),
				'message' => htmlspecialchars($this->input->post('message', true)),
				'status' => 'hold',
			];

			$this->db->insert('contact', $data);

			$this->session->set_flashdata('message', 'Thank you for ur suggestion');
			redirect('main/contact');
		}

	}

	public function about() {
		$data['title'] = 'ABOUT';

		$data['result'] = $this->main_model->getAllComment();
		$this->load->view('templates/header',$data);
		$this->load->view('about',$data);
		$this->load->view('templates/footer');

	}

}

?>