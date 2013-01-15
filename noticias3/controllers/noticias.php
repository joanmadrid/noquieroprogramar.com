<?php
class Noticias extends Controller 
{
	function Noticias()
	{
		parent::Controller();	
		$this->load->scaffolding('noticias');
	}
	
	function index()
	{
		$this->load->view('cabecera');
		
		$variables['query'] = $this->db->get('noticias');
		$this->load->view('noticias/index', $variables);
		
		$this->load->view('pie');
	}
	
	function leer()
	{
		$this->load->view('cabecera');
		
		$variables['numero'] = $this->uri->segment(3);
		$this->load->view('noticias/leer', $variables);
		
		$this->load->view('pie');
	}
}
?>