<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Employee_model');
        $this->load->helper(array('url'));
        $this->load->library(array('session'));
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function signin()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $result = $this->Employee_model->get_employee_id($_POST['username'], $_POST['password']);

            if(sizeof($result) == 1){
                // Set session user data
                $this->session->set_userdata('userid', $result[0]->employee_id);
                $this->session->set_userdata('username', $result[0]->employee_id);
                $this->session->set_userdata('password', $result[0]->employee_id);
                redirect('Dashboard');
            }else{
                // Error
                $this->session->set_flashdata('login_msg', '<div class="alert alert-danger text-center">Incorrect username / password</div>');
                redirect('Login');
            }
        }
    }

    public function signout()
    {
        // Unset session user data
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->sess_destroy();

        redirect('Login');
    }
}