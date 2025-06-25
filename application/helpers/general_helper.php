<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_state'))
{
    function get_state($id = '')
    {
        $CI = &get_instance(); 
        if(is_numeric($id)){
            return $CI->db->where('id',$id)->get('states')->row();
        }
        return $CI->db->get('states')->result();
    }
}

