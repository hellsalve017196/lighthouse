<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controll_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function newsletter_list()
    {
        $data = array();
        $query = $this->db->query("SELECT e_id,email FROM tbl_newsletter ORDER BY e_id DESC");

        if($query->num_rows() > 0)
        {
            $data = $query->result_array();
        }

        return $data;
    }

    function delete_newsletter_email($e_id)
    {
        $flag = false;

        if($this->db->query("DELETE FROM tbl_newsletter WHERE e_id = ".$e_id))
        {
            $flag = true;
        }

        return $flag;
    }

    function add_event($data)
    {
        $flag = false;

        if($this->db->insert('tbl_event',$data))
        {
            $flag = true;
        }

        return $flag;
    }

    function event_details($e_id)
    {
        $data = array();

        $query = $this->db->get_where('tbl_event',array('e_id'=>$e_id));

        if($query->num_rows() > 0)
        {
            $data = $query->row_array();
        }

        return $data;
    }

    function edit_event($data)
    {
        $flag = false;

        if($this->db->update('tbl_event',$data,array('e_id'=>$data['e_id'])))
        {
           $flag = true;
        }

        return $flag;
    }

    function delete_event($e_id)
    {
        $query = $this->db->get_where('tbl_event',array('e_id'=>$e_id));
        $flag = false;

        if($query->num_rows() > 0)
        {
            $template = $query->row_array();

            unlink('uploads/'.$template['image_banner']);
            if(($template['profile_file'] != '') and ($template['event_leaflet'] != ''))
            {
                unlink('uploads/'.$template['profile_file']);
                unlink('uploads/'.$template['event_leaflet']);
            }


            if($this->db->query("DELETE FROM tbl_event WHERE e_id=".$e_id))
            {
                $flag = true;
            }
        }

        return $flag;
    }

    function event_list()
    {
        $data = array();

        $query = $this->db->order_by('e_id','desc')->select('e_id,name,date_start,date_end,location')->get('tbl_event');

        if($query->num_rows() > 0)
        {
            $data = $query->result_array();
        }

        return $data;
    }

    function event_name_by_id($e_id)
    {
        $data = array();

        $query = $this->db->get_where('tbl_event',array('e_id'=>$e_id));

        if($query->num_rows() > 0)
        {
            $data = $query->row_array();
        }

        return $data;
    }

    function registration_list($e_id)
    {
        $data = array();

        $query = $this->db->get_where('tbl_registration',array('event_id'=>$e_id));

        if($query->num_rows() > 0)
        {
            $data = $query->result_array();
        }

        return $data;
    }

    function registration_all()
    {
        $data = array();

        $query = $this->db->get('tbl_registration');

        if($query->num_rows() > 0)
        {
            $data = $query->result_array();
        }

        return $data;
    }

    function delete_reg($r_id)
    {
        $flag = false;

        if($this->db->query("DELETE FROM tbl_registration WHERE r_id = ".$r_id))
        {
            $flag = true;
        }

        return $flag;
    }

    function num_of_reg()
    {
        $data = array();

        $query = $this->db->get('tbl_registration');

        if($query->num_rows() > 0)
        {
            $data = $query->result_array();
        }

        return $data;
    }
}