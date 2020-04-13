<?php
class loginModel extends CI_model
{
 
	public function getAdmin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
        return $this->db->get('mahasiswa')->row_array();
	}

	public function login($data) {
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            return true;
        }
        else {
            return false;
        }
	}
}
?>