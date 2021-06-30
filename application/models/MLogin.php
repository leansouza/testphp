<?php 

class MLogin extends CI_Model {

    protected $Login_table_name = "login";

    public function check_login($user, $password) {

        $query = $this->db->get_where($this->Login_table_name, array('login' => $user, "password" =>$password));
        return $query->row();
    }

}