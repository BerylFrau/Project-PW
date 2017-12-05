<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function index(){
		
		if($this->session->userdata('status') === 'login') {
			redirect(base_url('index.php/user/welcome'));
			return;
		}
		
		/*$this->load->view('login');
		}
        $this->load->library('session');
        if (!isset($_SESSION['email'])){
            $this->load->view('sign_in');
        }else{
            // ngambil param id dari user 
            $id = $this->input->get('id');
            $this->load->model('m_user');
            $data['response'] = $this->m_user->get($id);
            $this->load->view('viw_home', $data);
        }
		*/
    }
	public function login_form() {
		$this->load->view('sign_in');
	}
}