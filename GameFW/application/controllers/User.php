<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function index(){
		$this->load->helper('url');
        // load session
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
    }
}