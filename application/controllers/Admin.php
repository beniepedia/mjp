<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin/index.html';
            $config['first_url'] = base_url() . 'admin/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Admin_model->total_rows($q);
        $admin = $this->Admin_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'admin_data' => $admin,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('admin/users_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Admin_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'oauth_provider' => $row->oauth_provider,
		'oauth_uid' => $row->oauth_uid,
		'ipaddr' => $row->ipaddr,
		'name' => $row->name,
		'date' => $row->date,
		'phone' => $row->phone,
		'email' => $row->email,
		'password' => $row->password,
		'gender' => $row->gender,
		'address' => $row->address,
		'image' => $row->image,
		'role_id' => $row->role_id,
		'is_active' => $row->is_active,
		'date_created' => $row->date_created,
		'last_login' => $row->last_login,
	    );
            $this->load->view('admin/users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/create_action'),
	    'id_user' => set_value('id_user'),
	    'oauth_provider' => set_value('oauth_provider'),
	    'oauth_uid' => set_value('oauth_uid'),
	    'ipaddr' => set_value('ipaddr'),
	    'name' => set_value('name'),
	    'date' => set_value('date'),
	    'phone' => set_value('phone'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	    'gender' => set_value('gender'),
	    'address' => set_value('address'),
	    'image' => set_value('image'),
	    'role_id' => set_value('role_id'),
	    'is_active' => set_value('is_active'),
	    'date_created' => set_value('date_created'),
	    'last_login' => set_value('last_login'),
	);
        $this->load->view('admin/users_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'oauth_provider' => $this->input->post('oauth_provider',TRUE),
		'oauth_uid' => $this->input->post('oauth_uid',TRUE),
		'ipaddr' => $this->input->post('ipaddr',TRUE),
		'name' => $this->input->post('name',TRUE),
		'date' => $this->input->post('date',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'gender' => $this->input->post('gender',TRUE),
		'address' => $this->input->post('address',TRUE),
		'image' => $this->input->post('image',TRUE),
		'role_id' => $this->input->post('role_id',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
	    );

            $this->Admin_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'oauth_provider' => set_value('oauth_provider', $row->oauth_provider),
		'oauth_uid' => set_value('oauth_uid', $row->oauth_uid),
		'ipaddr' => set_value('ipaddr', $row->ipaddr),
		'name' => set_value('name', $row->name),
		'date' => set_value('date', $row->date),
		'phone' => set_value('phone', $row->phone),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'gender' => set_value('gender', $row->gender),
		'address' => set_value('address', $row->address),
		'image' => set_value('image', $row->image),
		'role_id' => set_value('role_id', $row->role_id),
		'is_active' => set_value('is_active', $row->is_active),
		'date_created' => set_value('date_created', $row->date_created),
		'last_login' => set_value('last_login', $row->last_login),
	    );
            $this->load->view('admin/users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'oauth_provider' => $this->input->post('oauth_provider',TRUE),
		'oauth_uid' => $this->input->post('oauth_uid',TRUE),
		'ipaddr' => $this->input->post('ipaddr',TRUE),
		'name' => $this->input->post('name',TRUE),
		'date' => $this->input->post('date',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'gender' => $this->input->post('gender',TRUE),
		'address' => $this->input->post('address',TRUE),
		'image' => $this->input->post('image',TRUE),
		'role_id' => $this->input->post('role_id',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
	    );

            $this->Admin_model->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $this->Admin_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('oauth_provider', 'oauth provider', 'trim|required');
	$this->form_validation->set_rules('oauth_uid', 'oauth uid', 'trim|required');
	$this->form_validation->set_rules('ipaddr', 'ipaddr', 'trim|required');
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('date', 'date', 'trim|required');
	$this->form_validation->set_rules('phone', 'phone', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('gender', 'gender', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	$this->form_validation->set_rules('image', 'image', 'trim|required');
	$this->form_validation->set_rules('role_id', 'role id', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-07-22 19:52:14 */
/* http://harviacode.com */