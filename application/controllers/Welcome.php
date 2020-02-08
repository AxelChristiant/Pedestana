<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		
	}

	public function about()
	{
		$this->load->view('Welcome/about');
	}

	public function services()
	{
		$this->load->view('Welcome/services');
	}
}