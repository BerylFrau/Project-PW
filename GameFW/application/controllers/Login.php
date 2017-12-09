<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('status') === 'login') {
			redirect(base_url('index.php/login/tampil_data'));
			return;
		}
		$this->load->view('sign_in');
	}

	public function daftar() {
		$this->load->view('form');
	}

	public function input_data()
	{

		$users_user = array(
			'id_user' => $this->input->post('id_user'),
			'user_name' => $this->input->post('user_name'),
			'password' => sha1( $this->input->post('password') ),
		);

		if( $this->model_user->input($users_user) )
		{
			redirect(base_url('index.php/login'));
		} else {
			$this->load->view('login');
		}
	}
	public function user_login() 
	{
		$user_users = array(
			'user_name' => $this->input->post('user_name'),
			'password' => sha1( $this->input->post('password') )
		);
		$result = $this->model_user->login($user_users);
		if( $result->row() == null ) {
			redirect(base_url('index.php/login'));
			return;
		}
		$sess_user = array(
			'user_name' => $result->row('user_name'),
			'id_user' => $result->row('id_user'),
			'status' => 'login'
		);
		
		$this->session->set_userdata($sess_user);
		redirect(base_url('index.php/login/tampil_data'));		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

	public function tampil_data()
	{
		if($this->session->userdata('status') !== 'login') {
			$this->load->view('home_game');
			return;
		}
		 else {
			$npm = $this->session->userdata('id_user');
			$data["game"] = $this->model_user->tampilByUser($id_user);
		}
		$this->load->view('tampil_data', $data);
	}

	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */