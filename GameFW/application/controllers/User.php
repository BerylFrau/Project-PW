<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('status') === 'login') {
			redirect(base_url('index.php/login/tampil_data'));
			return;
		}
		$this->load->view('login');
	}

	public function daftar() {
		$this->load->view('form');
	}

	public function input()
	{
		$user = array(
			'user_name' => $this->input->post('user_name'),
			'password' => ( $this->input->post('password') ),
			'email' => $this->input->post('email')
		);

		if( $this->m_user->input($user) )
		{
			redirect(base_url('index.php/User/login_form'));
		} else {
			$this->load->view('sign_up');
		}
	}
	public function user_login() 
	{
		$user_user = array(
			'user_name' => $this->input->post('user_name'),
			'password' => ( $this->input->post('password') )
		);
		$result = $this->m_user->login($user_user);
		if( $result->row() == null ) {
			redirect(base_url('index.php/User/login_form'));
			return;
		}
		$sess_user = array(
			'user_name' => $result->row('user_name'),
			'level' => $result->row('level'),
			'status' => 'login'
		);
		
		$this->session->set_userdata($sess_user);
		redirect(base_url('index.php/User/home_user'));		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/User/home'));
	}

	public function tampil_data()
	{
		if($this->session->userdata('status') !== 'login') {
			redirect(base_url('index.php/login/'));
			return;
		}
		else if($this->session->userdata('level') === '1') {
			$data["mhs"] = $this->m_user->tampilAll();
		} else {
			$nip = $this->session->userdata('nip');
			$data["mhs"] = $this->m_user->tampilByUser($nip);
		}
		$this->load->view('tampil_data', $data);
	}

	public function edit_data()
	{
		$nip = $this->uri->segment(3);
		$this->load->model('m_user');
		$data["mhs"] = $this->m_user->pilih($nip);
		$this->load->view('edit', $data);
	}

	public function update_data()
	{
		$nip = $this->input->post("nip");
		$nama = $this->input->post("nama");
		$alamat = $this->input->post("alamat");
		$jk = $this->input->post("jk");

		$this->load->model('m_user');
		$this->m_user->update($nip, $nama, $alamat, $jk);
		redirect(base_url("index.php/login/tampil_data"));
	}

	public function delete_data()
	{
		$nip = $this->uri->segment(3);
		$this->load->model('m_user');
		$this->m_user->delete($nip);
		redirect(base_url("index.php/login/tampil_data"));
	}
	
	public function login_form() {
		$this->load->view('sign_in');
	}
	
	public function home() {
		$this->load->view('home_game');
	}
	
	public function home_user() {
		$this->load->view('home_user');
	}
	
	public function input_form() {
		$this->load->view('sign_up');
	}
}