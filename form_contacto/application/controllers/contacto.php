<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Contacto extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');	
		$this->form_validation->set_rules('texto', 'Texto', 'xss_clean');	

		if($this->form_validation->run())
		{
			//print_r($_POST);	
			
			$this->load->library('email');

			$this->email->from('webmaster@noquieroprogramar.com', 'Lagarto');
			$this->email->to($_POST['email']);
			
			$this->email->subject('Contacto de tu web');
			$this->email->message($_POST['nombre']. ", se ha puesto en contacto contigo y te ha dicho: ".$_POST['texto']);
			
			$this->email->send();
			
			echo $this->email->print_debugger();
		}
		else
		{
			$this->load->view('contacto');
		}		
	}
}
?>