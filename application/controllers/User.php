<?php

class User extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('user_model');

    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function home()
    {
        $this->load->view('home');
    }

    // public function insertUser(){
    //     $this->input->get_post();
    //     $this->input->get();
    // }

    public function create()
    {

        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
        ];

        $this->form_validation->set_rules('first_name', 'Firstname', 'required');
        $this->form_validation->set_rules('last_name', 'Lastname', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            $this->load->view('auth/login');
        }

        $stats = $this->user_model->insertUser($data);

        if ($stats == TRUE) {
            $this->session->set_flashdata('error', 'ERROR!');
            redirect(base_url('User/register'));

        } else {
            $this->session->set_flashdata('error', 'ERROR!');
            redirect(base_url('User/register'));
        }
        // $this->user_model->
        // $this->session->set_flashdata('message','success'); // temporary
        // if(isset( $this->session->flashdata('message'))){
        //     echo $this->session->flashdata('message');
        // }
        // $admin_data['username'] = ; 
        // $this->session->set_userdata('admin_data',$admin_data);
        // redirect();
    }

    public function login()
    {
        $firstname = $this->input->post('first_name');
        $lastname = $this->input->post('last_name');
        $user_id = $this->user_model->userLogin($firstname, $lastname);

        if ($user_id == TRUE) {
            $result = [
                'first_name' => $user_id['first_name'],
                'last_name' => $user_id['last_name'],
                'email'=> $user_id['email'],
                'gender'=> $user_id['gender'],
            ];

            $this->session->set_userdata($result);
            $this->session->set_flashdata('success', 'successfull');
            redirect(base_url('User/home'));

        }
        // if ($user_id) {
        //     
        //     redirect(base_url('User/home'));
        // }
    }
}