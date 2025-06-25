<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('admin_url'))
{
    function admin_url($uri = '')
    {
        return base_url('admin/' . $uri);
    }
}

if ( ! function_exists('get_admin_header'))
{
    function get_admin_header()
    {
       	$CI = &get_instance();  // CodeIgniter instance le lo
        $CI->load->view('admin/layouts/header');
        $CI->load->view('admin/layouts/sidebar');
    }
}
if ( ! function_exists('get_admin_footer'))
{
    function get_admin_footer()
    {
        $CI = &get_instance();
        $CI->load->view('admin/layouts/footer');
    }
}
