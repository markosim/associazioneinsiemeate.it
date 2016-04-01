<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatti extends CI_Controller { 
	
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
		$this->load->view( 'contatti');
		$this->load->view('template/footer');
	}
}
