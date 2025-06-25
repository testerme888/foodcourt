<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_site_header'))
{
    function get_site_header()
    {
       	$CI = &get_instance();  // CodeIgniter instance le lo
        $CI->load->view('site/layouts/header');
    }
}
if ( ! function_exists('get_site_footer'))
{
    function get_site_footer()
    {
        $CI = &get_instance();
        $CI->load->view('site/layouts/footer');
    }
}
