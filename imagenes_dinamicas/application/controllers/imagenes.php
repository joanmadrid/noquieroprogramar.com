<?php

class Imagenes extends Controller {

	function Imagenes()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view("imagen");	
	}
	
	function muestraImagen($width, $height, $ratio)
	{
		$config['source_image'] = "imagen.jpg";	
		$config['maintain_ratio'] = $ratio;
		$config['dynamic_output'] = TRUE;
		$config['width'] = $width;
		$config['height'] = $height;
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
}

?>