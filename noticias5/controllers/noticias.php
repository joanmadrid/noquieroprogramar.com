<?php
class Noticias extends Controller 
{
	function Noticias()
	{
		parent::Controller();	
		//$this->load->scaffolding('noticias');
	}
	
	function index()
	{
		$this->load->view('cabecera');		
		
		$this->load->library('pagination');
		
		$config['base_url'] = base_url()."index.php/noticias/index/";
		$config['total_rows'] = $this->db->count_all_results('noticias');
		$config['per_page'] = '5';	
		
		$this->pagination->initialize($config); 		
		
		$variables['query'] = $this->db->get('noticias', $config['per_page'], (int)$this->uri->segment(3));
		$this->load->view('noticias/index', $variables);
		
		$this->load->view('pie');
	}
	
	function nueva()
	{
		$this->load->library('validation');
			
		$reglas['titulo'] = "required";
		$reglas['cuerpo'] = "required";
		
		$this->validation->set_rules($reglas);
		
		$campos['titulo'] = "Titulo";
		$campos['cuerpo'] = "Cuerpo de la noticia";
	
		$this->validation->set_fields($campos);
			
		if(!$this->validation->run())
		{
			//Se ejecutara este codigo si es la primera vez que mostramos el formulario
			//o que los datos del formulario mandados no superan la validacion
			$this->load->view('cabecera');			
			$this->load->view('noticias/nueva');			
			$this->load->view('pie');			
		}
		else
		{
			//Cuando los datos sean correctos ejecutaremos esto de aqui
			$this->db->insert('noticias', $_POST);
			redirect('noticias/index');
		}	
	}
}
?>