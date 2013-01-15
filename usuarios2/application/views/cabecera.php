<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de usuarios</title>
<base href="<?=base_url()?>" />
<link rel="stylesheet" href="css/estilo.css" type="text/css" />
</head>
<body>

	<div id="exterior">
    	
        <div id="header">
        	<h1>Sistema de Usuarios</h1>
            <ul>
            	<li><a href="index.php/usuarios/registrar">Registro</a></li>
                <?php 
				$centinela = new Centinela();
				if(!$centinela->check(0, FALSE)): 
				?>
                <li><a href="index.php/usuarios/login">Login</a></li>
                <?php else: ?>
				<li><a href="index.php/usuarios/logout">Logout</a></li>                
                <?php endif; ?>
                <li><a href="index.php/usuarios/privado">Zona privada</a></li>                               
                <li><a href="nqp_usuarios_2.rar">Descargar este taller</a></li>
            </ul>
        </div>
        
        <div id="contenido">