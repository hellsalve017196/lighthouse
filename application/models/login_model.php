<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
    function check_user_and_pass($data)
    {
        $flag = false;

        $query = $this->db->get_where('tbl_log_info',$data);

        if($query->num_rows() == 1)
        {
            $this->session->set_userdata('admin_login','1');

            $cookie = array(
                'name'   => 'admin_login',
                'value'  => '1',
                'expire' => '3600',
                'path'   => '/',
            );

            $this->input->set_cookie($cookie);


            $flag = true;
        }

        return $flag;
    }


    function retrive_pass($email)
    {
        $data = array();

        $query = $this->db->get_where('tbl_log_info',array('email'=>$email));

        if($query->num_rows() == 1)
        {
            $data = $query->row_array();
        }

        return $data;
    }
}