<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chi_siamo extends CI_Controller { 
	
	function __construct(){
		parent::__construct();
	}
    
	public function index()
	{
		$this->load->model('ainsiemeate');
		$data['slides'] = $this->ainsiemeate->get_slides() ;
        
        $this->load->view('template/header');
        $this->load->view('navbar_top');
        $this->load->view( 'slider' , $data);
		$this->load->view( 'chi_siamo');
		$this->load->view('template/footer');
	}
}