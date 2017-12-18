<?php

class Employee_model extends CI_Model
{
    var $column_order = array(null, 'first_name', 'middle_name', 'last_name', 'nic', 'dob', 'gender', 'telephone', 'address', 'email', 'role_id'); // Set column field database for datatable orderable
    var $column_search = array('first_name', 'middle_name', 'last_name', 'nic', 'dob', 'gender', 'telephone', 'address', 'email', 'role_id'); // Set column field database for datatable searchable 

    // Insert into user table
    function insert_employee($data)
    {
        $emp_array = array(
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'nic' => $data['nic'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'telephone' => $data['telephone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'profile_picture' => 'profile_picture',
            'role_id' => '1'
        );
        $this->db->insert('employee', $emp_array);

        $emp_login_arr = array(
            'employee_id' => $this->db->insert_id(),
            'username' => $data['username'],
            'password' => $data['password']
        );
        return $this->db->insert('employee_login', $emp_login_arr);
    }

    // Send verification email to user's email id
    function send_email($to_email)
    {
        $from_email = 'queue.ivantha';
        $subject = 'Queue : Verify your email address';
        $message = 'Dear user,<br/><br/>Please click on the below activation link to verify your email address.<br /><br />'
            . site_url('New_employee/verify/') . md5($to_email) . '<br/><br/>Thanks!<br/>Queue Team';

        // Configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'queue@ivantha';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);

        // Send mail
        $this->email->from($from_email, 'Queue');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }

    // Activate user account
    public function verify_email()
    {

        $data = array(
            'verified' => 1
        );
        $this->db->where('md5(email)', $this->uri->segment(3));
        return $this->db->update('employee', $data);
    }

    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->join('role', 'employee.role_id = role.id');

        $i = 0;

        foreach ($this->column_search as $item) // Loop column 
        {
            if (isset($_POST['search']['value'])) // If datatable send POST for search
            {
                if ($i === 0) // First loop
                {
                    $this->db->group_start(); // Open bracket
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) // Last loop
                {
                    $this->db->group_end(); // Close bracket                    
                }
            }
            $i++;
        }

        if (isset($_POST['order'])) // Order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $order = array('employee.id' => 'asc'); // Default order
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
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
        $this->db->from('employee');
        return $this->db->count_all_results();
    }

    // Get employee list by applying a like querry on name
    public function get_doctors($name_part)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->join('role', "employee.role_id = role.id AND role.name = 'Doctor'");
        $this->db->like('employee.first_name', $name_part);
        $this->db->or_like('employee.middle_name', $name_part);
        $this->db->or_like('employee.last_name', $name_part);

        // Order result
        $order = array('employee.first_name' => 'asc', 'employee.middle_name' => 'asc', 'employee.last_name' => 'asc');
        $this->db->order_by(key($order), $order[key($order)]);

        // Retrieve rows
        $query = $this->db->get();
        return $query->result();
    }

    // Get employee details for sign in
    public function get_employee_id($username, $password)
    {
//        $username = $this->db->escape($username);
//        $password = $this->db->escape($password);

        $this->db->select('*');
        $this->db->from('employee_login');
        $this->db->where('employee_login.username', $username);
        $this->db->where('employee_login.password', $password);

        // Retrieve rows
        $query = $this->db->get();
        return $query->result();
    }
}