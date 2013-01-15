<?php
	class Imagenes extends Controller 
	{
	
		function Imagenes()
		{
			parent::Controller();	
		}
		
		function index()
		{
			if($this->uri->segment(3)=="do")
			{
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '5000';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload', $config);
			
				if(!$this->upload->do_upload("imagen"))
				{
					echo $this->upload->display_errors();
				}	
				else
				{
					$data = $this->upload->data();
					$this->db->query("INSERT INTO `imagenes` (`imagen`, `fecha`, `ip`) VALUES (?, ?, ?)", array($data['file_name'], time(), $_SERVER['REMOTE_ADDR']));

					$config['image_library'] = 'gd2';
					$config['source_image'] = $config['upload_path'].$data['file_name'];
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 200;
					$config['height'] = 200;				
					
					$this->load->library('image_lib', $config);					
					$this->image_lib->resize();						
					
					$this->load->view('cabecera');
					$this->load->view('imagenes/subido', $data);
					$this->load->view('pie');						
					
				}
			}
			else
			{
				$this->load->view('cabecera');
				$this->load->view('imagenes/subir');
				$this->load->view('pie');			
			}
		}
	}
?>