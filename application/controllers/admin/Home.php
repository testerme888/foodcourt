<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function __construct(){
		
        parent::__construct();
       
    }

    public function index(){
    	$data = [];
    	$data['title'] = "Home page";
    	 // Fetch uploaded slider images
	    $data['slider_images'] = $this->db->get('slider_images')->result();

	    // Fetch uploaded food items
	    $data['food_items'] = $this->db->get('food_items')->result();

        $this->load->view('admin/home/index',$data);
    }
     public function upload_slider_image() {

     	$upload_path = './uploads/home/slider_images/';
     	if (!is_dir($upload_path)) {
	        mkdir($upload_path, 0777, true);
	    }
        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            $image_path = 'uploads/home/slider_images/' . $data['file_name'];

            $this->db->insert('slider_images', ['image_path' => $image_path]);

            echo json_encode(['status' => 'success', 'path' => base_url($image_path), 'id' => $this->db->insert_id()]);
        } else {
            echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
        }
    }

    // Remove slider image
    public function delete_slider_image() {
        $id = $this->input->post('id');
        $query = $this->db->get_where('slider_images', ['id' => $id])->row();
        if ($query) {
            if (file_exists($query->image_path)) {
                unlink($query->image_path);
            }
            $this->db->delete('slider_images', ['id' => $id]);
            echo json_encode(['status' => 'success']);
        }
    }

    // Upload food item with image
    public function upload_food_item() {

        $upload_path = './uploads/home/food_images/';
	    if (!is_dir($upload_path)) {
	        mkdir($upload_path, 0777, true);
	    }

	    $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('food_image')) {
            $data = $this->upload->data();
            $image_path = 'uploads/home/food_images/' . $data['file_name'];

            $this->db->insert('food_items', [
                'name'       => $this->input->post('name'),
                'link'       => $this->input->post('link'),
                'image_path' => $image_path
            ]);

            echo json_encode([
                'status'    => 'success',
                'path'      => base_url($image_path),
                'name'      => $this->input->post('name'),
                'link'      => $this->input->post('link'),
                'id'        => $this->db->insert_id()
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
        }
    }

    // Remove food item
    public function delete_food_item() {
        $id = $this->input->post('id');
        $query = $this->db->get_where('food_items', ['id' => $id])->row();
        if ($query) {
            if (file_exists($query->image_path)) {
                unlink($query->image_path);
            }
            $this->db->delete('food_items', ['id' => $id]);
            echo json_encode(['status' => 'success']);
        }
    }
}
