<?php

class Form_exam extends CI_Controller {
	
	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
			
		$this->form_validation->set_rules('username', 'Username','required', 'callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
					
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form');
		}
		else
		{
			$this->load->view('success');
		}
	}
	
	function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
}
?>