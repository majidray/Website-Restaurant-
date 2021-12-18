<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	//fungsi untuk mengecek user sudah login atau belum, jika sudah maka user tidak bisa mengakses menu login atau register
		private function _check() {

			if($this->session->userdata('username')) {
				redirect('main');
			}

		}

	public function login() {

		//panggil function _check()
			$this->_check();

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

		//jika form validationnya salah
		if( $this->form_validation->run() == FALSE ) {

			$this->load->view('templates/login_header');
			$this->load->view('auth/login');
			$this->load->view('templates/login_footer');

		}

		//jika form_validation benar
		else {
			$this->_login();
		}

	}

	private function _login() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$users = $this->db->get_where('users', ['username' => $username])->row_array();

		//jika usernamenya sudah terdaftar ada
		if($users) {
			if(password_verify($password, $users['password'])) {
				$data = [
					'username' => $users['username'],
					'role_id' => $users['role_id']
				];

				$this->session->set_userdata($data);
				redirect('main');
			}

			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('auth/login');
			}
		}

		else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth/login');
		}

	}

	public function register() {

		//panggil function _check()
			$this->_check();

		//form rules
		$this->form_validation->set_rules('name', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[users.username]', ['is_unique' => 'This username has already registered!']);
		$this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[4]|matches[password]');

		//jika form validationnya salah
		if( $this->form_validation->run() == FALSE ) {

			$this->load->view('templates/login_header');
			$this->load->view('auth/register');
			$this->load->view('templates/login_footer');

		}

		//jika form validation nya benar
		else {

			$data = [
				'name'     => htmlspecialchars($this->input->post('name', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'no_hp'    => htmlspecialchars($this->input->post('no_hp', true)),
				'alamat'   =>htmlspecialchars($this->input->post('alamat', true)),
				'email'    => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'  => 2
			];

			$this->user_model->register($data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please login</div>');
			redirect('auth/login');

		}
	
	}			//tutup registration()

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		redirect('main');
	}

}
?>