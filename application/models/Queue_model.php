<?php

class Queue_model extends CI_Model
{
    var $column_search = array('date','employee_id'); // Set column field database for datatable searchable 

    // Insert into user table
    // function insert_employee($data)
    // {
    //     $emp_array = array(
    //         'first_name' => $data['first_name'],
    //         'middle_name' => $data['middle_name'],
    //         'last_name' => $data['last_name'],
    //         'nic' => $data['nic'],
    //         'dob' => $data['dob'],
    //         'gender' => $data['gender'],
    //         'telephone' => $data['telephone'],
    //         'address' => $data['address'],
    //         'email' => $data['email'],
    //         'profile_picture' => 'profile_picture',
    //         'role_id' => '1'
    //     );
    //     $this->db->insert('employee', $emp_array);

    //     $emp_login_arr = array(
    //         'employee_id' => $this->db->insert_id(),
    //         'username' => $data['username'],
    //         'password' => $data['password']
    //     );
    //     return $this->db->insert('employee_login', $emp_login_arr);
    // }

    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('queue');
        $this->db->join('employee', 'queue.employee_id = employee.id');
 
        $i = 0;
     
        foreach ($this->column_search as $item) // Loop column 
        {
            if(isset($_POST['search']['value'])) // If datatable send POST for search
            {
                if($i === 0) // First loop
                {
                    $this->db->group_start(); // Open bracket
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) // Last loop
                {
                    $this->db->group_end(); // Close bracket                    
                }
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // Order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else
        {
            $order = array('queue.id' => 'asc'); // Default order
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        {
            $this->db->limit($_POST['length'], $_POST['start']);            
        }
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from('queue');
        return $this->db->count_all_results();
    }
}