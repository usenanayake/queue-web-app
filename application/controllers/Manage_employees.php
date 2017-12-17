<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_employees extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Employee_model');
    }

    public function index()
    {
        $this->load->view('manage_employees');
    }

    public function get_employee_list_ajax()
    {
        $list = $this->Employee_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $employee) {
            $no++;
            $row = array();
            // $row[] = $no;
            $row[] = $employee->first_name;
            $row[] = $employee->last_name;
            $row[] = $employee->name;
            $row[] = $employee->nic;
            $row[] = $employee->telephone;

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Employee_model->count_all(),
                        "recordsFiltered" => $this->Employee_model->count_filtered(),
                        "data" => $data,
                );

        // Output to json format
        echo json_encode($output);
    }
}