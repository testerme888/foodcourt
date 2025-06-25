<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // Yaha koi login check nahi — ye public hai
    }

    public function index(){
        $data['title'] = 'Samrit Food';
         // Fetch uploaded slider images
	    $data['slider_images'] = $this->db->get('slider_images')->result();

	    // Fetch uploaded food items
	    $data['food_items'] = $this->db->get('food_items')->result();
        $this->load->view('site/home', $data);
    }

    public function state($id){
        $data['title'] = ucwords(get_state($id)->state);
        $this->load->view('site/state/index', $data);
    }
    public function about(){
        $data['title'] = 'About Us';
        $this->load->view('site/about', $data);
    }

    public function contact(){
        $data['title'] = 'Contact';
        $this->load->view('site/contact', $data);
    }
}
