<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$this->load->view('portindex');
		$this->load->library('form_validation', 'email');
	}
	public function port()
	{
     
		
		
		$this->form_validation->set_rules('name', 'name', 'required|trim|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('phone', 'phone', 'required|trim');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		if ($this->form_validation->run()==true) {
			$data = $this->input->post();
			// print_r($data);
			$this->load->model('add');
             $this->add->add_datas($data);
		//   echo "yes";
		  $this->load->view('jay');
		} else {
        // echo validation_errors();
			$this->load->view('portindex');
		// 
		}
	// }
}}
