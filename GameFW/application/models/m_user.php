<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class m_user extends CI_Model{
	
	
	public function login($userdata)
	{
		$result = $this->db->get_where('user',
			array( 
				'user_name'=> $userdata['user_name'],
				'password' => $userdata['password'] 
			) 
		);
		return $result;
	}
	
	public function input($user)
	{

		if( $this->db->insert('user', $user) )
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampilAll()
	{
		$query = $this->db->get('biodata');
		return $query;
	}

	public function tampilByUser($nip)
	{
		$query = $this->db->get_where('biodata', array('nip' => $nip));
		return $query;
	}

	public function pilih($nip)
	{
		$query = $this->db->get_where('biodata', array('nip' => $nip))->row();
		return $query;
	}
	
	public function update($nip, $nama, $alamat, $jk)
	{
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'alamat' => $alamat,
			'jk' => $jk
		 );
		$this->db->where('nip',$nip);
		$this->db->update('biodata', $data);
	}

	public function delete($nip)
	{
		$this->db->delete('biodata', array('nip' => $nip));
	}
}
?>