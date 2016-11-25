<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu');
		$this->data['pagetitle'] = 'Atrexa Bar';
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->helper('formfields');
		$this->data['title'] = 'Atrexa Bar (Server)';
		$this->data['pagebody'] = 'Welcome to Atrexa Bar'

		$this->render();
	}

}
