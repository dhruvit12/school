<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_Model extends CI_Model{
    function saverecords($data)
	{
        $this->db->insert('tblusers',$data);
        return true;
	}
}