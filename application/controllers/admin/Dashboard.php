<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct(){
		
        parent::__construct();
       
    }

    public function index(){
    	$data = [];
    	$data['title'] = "Dashboard";
        $this->load->view('admin/dashboard',$data);
    }
}
