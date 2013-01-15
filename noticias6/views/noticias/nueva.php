<fieldset>
	<p><?=$this->validation->error_string?></p>
    <legend>Nueva noticia</legend>            
    <form method="post" action="index.php/noticias/nueva">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="<?=$this->validation->titulo?>" />
        <br />
        <label for="cuerpo">Cuerpo</label>
		<textarea name="cuerpo" cols="30" rows="8" id="cuerpo"><?=$this->validation->cuerpo?></textarea>
        <br />
        <label for="submit"></label>
        <input type="submit" id="submit" value="Enviar" />
    </form>
</fieldset>