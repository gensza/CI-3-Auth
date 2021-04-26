<?php

class Auth_m extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('user', $data);
    }
}