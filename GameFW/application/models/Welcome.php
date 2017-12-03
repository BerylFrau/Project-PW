<?php
class m_user extends CI_Model{
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get(){
		// $query = $this->db->query('SELECT * FROM users');
		$query = $this->db->get('users');
		return $query->result_array();
	}
}