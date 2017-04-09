<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_by_username_password($username, $password)
    {
        $query = $this->db->query("select * from t_admin where username='$username' and password='$password'");
        return $query->row();
    }
    public function save($name,$mail,$message){
        $sql = "insert into contact(C_name,C_mail,C_message) values('$name','$mail','$message')";
        $rs = $this->db->query($sql);
        return $rs;
    }
}

?>
