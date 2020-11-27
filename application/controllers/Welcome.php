<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('home');
			$this->load->view('emplogin');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function emplogin()
	{
		$this->load->view('emplogin');
	}
	public function usermange()
	{
		$this->load->view('user_management');
	}
	public function useradd()
	{
		$this->load->view('user_add');
	}
	/* Customer Module */
	public function customers()
	{
		$this->load->view('customers');
	}
	public function addcustomer()
	{
		$this->load->view('add_customer');
	}
	function add_cust()
	{
		$this->load->model('cust');
		$this->form_validation->set_rules('cust_name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('cust_comp', 'Company Name', 'required|trim');
		$this->form_validation->set_rules('cust_mail', 'Email ID', 'required|trim');
		$this->form_validation->set_rules('cust_tel1', 'Contact Number', 'required|trim');
		if($this->form_validation->run() == TRUE) {
			$data = array (
				'cust_name'	=> $this->input->post('cust_name'),
				'cust_comp'	=> $this->input->post('cust_comp'),
				'cust_mail' => $this->input->post('cust_mail'),
				'cust_tel1' => $this->input->post('cust_tel1'),
				'cust_tel2' => $this->input->post('cust_tel2'),
				'cust_addr' => $this->input->post('cust_addr'),
				'cust_url' 	=> $this->input->post('cust_url')
			);
			$id = $this->cust->insert($data);
			if($id > 0)
			{
				redirect('welcome/customers', 'refresh');
			}
		} else {
			$this->addcustomer();
		}
	}
	/* Customer Module */
	/* Supplier Module */
	public function suppliers()
	{
		$this->load->view('suppliers');
	}
	public function addsupplier()
	{
		$this->load->view('add_supplier');
	}
	function add_supp()
	{
		$this->load->model('supp');
		$this->form_validation->set_rules('supp_name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('supp_comp', 'Company Name', 'required|trim');
		$this->form_validation->set_rules('supp_mail', 'Email ID', 'required|trim');
		$this->form_validation->set_rules('supp_tel1', 'Contact Number', 'required|trim');
		if($this->form_validation->run() == TRUE) {
			$data = array (
				'supp_name'	=> $this->input->post('supp_name'),
				'supp_comp'	=> $this->input->post('supp_comp'),
				'supp_mail' => $this->input->post('supp_mail'),
				'supp_tel1' => $this->input->post('supp_tel1'),
				'supp_tel2' => $this->input->post('supp_tel2'),
				'supp_addr' => $this->input->post('supp_addr'),
				'supp_url' 	=> $this->input->post('supp_url')
			);
			$id = $this->supp->insert($data);
			if($id > 0)
			{
				redirect('welcome/suppliers', 'refresh');
			}
		} else {
			$this->addsupplier();
		}
	}
	/* Supplier Module */
	/* Product Module */
	public function products()
	{
		$this->load->view('products');
	}
	public function addproduct()
	{
		$this->load->view('add_product');
	}
	function add_prod()
	{
		$this->load->model('prod');
		$this->form_validation->set_rules('prod_name', 'Product Name', 'required|trim');
		$this->form_validation->set_rules('prod_manu', 'Product Manufacturer', 'required|trim');
		$this->form_validation->set_rules('prod_partno', 'Email ID', 'required|trim');
		if($this->form_validation->run() == TRUE) {
			$data = array (
				'prod_name'		=> $this->input->post('prod_name'),
				'prod_manu'		=> $this->input->post('prod_manu'),
				'prod_partno' => $this->input->post('prod_partno'),
				'prod_desc' 	=> $this->input->post('prod_desc')
			);
			$id = $this->prod->insert($data);
			if($id > 0)
			{
				redirect('welcome/products', 'refresh');
			}
		} else {
			$this->addproduct();
		}
	}
	/* Product Module */
	public function addlog()
	{
		$this->load->view('add_log');
	}
	public function useredit()
	{
		$this->load->view('user_edit');
	}
	public function userdelete()
	{
		$this->load->view('user_del');
	}
	public function logout()
	{
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('useremail');
		$this->session->unset_userdata('usertype');
		// $this->load->view('emplogin');
		redirect('', 'refresh');
	}
	function userauthlogin()
	{
		$this->load->model('user');
		$this->form_validation->set_rules('useremail', 'Email ID', 'required|trim');
		$this->form_validation->set_rules('userpass', 'Password', 'required|trim');
		if($this->form_validation->run() == TRUE)
		{
			$data = array (
				'useremail' => $this->input->post('useremail'),
				'userpass' 	=> $this->input->post('userpass')
			);
			$umail 	= $data['useremail'];
			$upass 	= $data['userpass'];
			$query =
			$this->db->query("SELECT * FROM user WHERE useremail = '".$umail."'
			AND userpass = '".$upass."';");
			$row = $query->row();
			if (isset($row))
			{
				$userid 		= $row->userslno;
				$username 	= $row->username;
				$useremail 	= $row->useremail;
				$usertype 	= $row->usertype;
				$this->session->set_userdata('userid', $userid);
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('useremail', $useremail);
				$this->session->set_userdata('usertype', $usertype);
			}
			$row = $query->num_rows();
			if($row) {
				$this->dashboard();
				redirect('welcome/dashboard', 'refresh');
			} else {
				$this->useradd();
			}
		} else {
			$this->emplogin();
		}
	}
	function adduser()
	{
		$this->load->model('user');
		$this->form_validation->set_rules('username', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('useremail', 'Email', 'required|trim');
		$this->form_validation->set_rules('userpass', 'Password', 'required|trim');
		if($this->form_validation->run() == TRUE) {
			$data = array (
				'username'	=> $this->input->post('username'),
				'useremail' => $this->input->post('useremail'),
				'userpass' 	=> $this->input->post('userpass'),
				'usertype' 	=> $this->input->post('usertype')
			);
			$id = $this->user->insert($data);
			if($id > 0)
			{
				redirect('welcome/usermange', 'refresh');
			}
		} else {
			$this->emplogin();
		}
	}
	function deluser()
	{
		$data = array (
			'userslno'	=> $this->input->post('userslno')
		);
		$this->db->where('userslno', $data['userslno']);
		$this->db->delete('user');
		redirect('welcome/usermange', 'refresh');
	}
	function updateuser()
	{
		$data = array(
			'userslno'	=> $this->input->post('userslno'),
			'username'	=> $this->input->post('username'),
			'useremail' => $this->input->post('useremail'),
			'userpass' 	=> $this->input->post('userpass'),
			'usertype' 	=> $this->input->post('usertype')
		);
		$this->db->where('userslno', $data['userslno']);
		$this->db->replace('user', $data);
		redirect('welcome/usermange', 'refresh');
	}
}
