<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model{
    public function index($email,$password){
        // $pass=verifyHash($password);
        $data=array(
        'email'=>$email,
        'password'=>$password);
                // echo "<pre>";print_r($data);exit;
        $query=$this->db->where($data);
        $login=$this->db->get('tblusers');
        
        if($login!=NULL){
        
            return $login->row();
        
    }  
    }
}