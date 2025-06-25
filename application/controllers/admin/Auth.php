<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function register(){
         if($this->session->userdata('user_id')){
            redirect('admin/dashboard');
        }
        if($this->input->post()){
            // Check if email exists
            if($this->user_model->email_exists($email)){
                $this->session->set_flashdata('error', 'Email already exists!');
                redirect(admin_url('register'));
            }
            $data = [
                'name'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->user_model->register($data); // correct call
            redirect('admin/auth/login');
        }
        $this->load->view('admin/register');
    }
    private function email_exists($email)
    {
        return $this->db->where('email', $email)->get('users')->num_rows() > 0;
    }

    public function login(){
         if($this->session->userdata('user_id')){
            redirect('admin/dashboard');
        }
        if($this->input->post()){
            $email    = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->user_model->login($email, $password); // correct call

            if($user){
                $this->session->set_userdata('user_id', $user->id);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect('admin/auth/login');
            }
        }
        $this->load->view('admin/login');
    }

    public function logout(){
        $this->session->unset_userdata('user_id');
        redirect('admin/auth/login');
    }
}
