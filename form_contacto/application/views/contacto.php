<html>
	<head>
    	<title>NoQuieroProgramar.com - Formulario de contacto</title>
    </head>    
    <body>
    	<div id="contacto">
        
			<?php echo validation_errors(); ?>        
        
        	<fieldset>
            	<legend>Formulario de contacto</legend>
                
                <form action="" method="post">
                	<label for="f_nombre">Nombre</label>
                    <input type="text" name="nombre" id="f_nombre" value="<?php echo set_value('nombre'); ?>" />
                    <br />
                    <label for="f_email">Email</label>
                    <input type="text" name="email" id="f_email" value="<?php echo set_value('email'); ?>" />
                    <br />
                    <label for="f_texto">Texto</label>
                    <textarea name="texto" id="f_texto"><?php echo set_value('texto'); ?></textarea>
                    <br />
                    <label for="f_enviar"></label>
                    <input type="submit" id="f_enviar" />
                </form>
            </fieldset>
        </div>
    </body>
</html>