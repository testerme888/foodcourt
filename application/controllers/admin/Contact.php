<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller {

	public function __construct(){
		
        parent::__construct();
       
    }

    public function index(){
    	$data = [];
    	$data['title'] = "Dashboard";
        $this->load->view('admin/dashboard',$data);
    }
    public function category(){
    	$data = [];
    	$data['title'] = "Dashboard";
        $this->load->view('admin/dashboard',$data);
    }
}
