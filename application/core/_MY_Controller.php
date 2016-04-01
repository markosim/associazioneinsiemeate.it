<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();	
	}
    public function template($view, $vars = array(), $return = FALSE)
    {
        $this->load->library('parser');
        $data = array(
					'body'=> $this->load->view($view,$vars,TRUE)
					);
		$this->parser->parse('template/main', $data);
        
    }
}