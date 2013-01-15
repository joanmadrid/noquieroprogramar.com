<fieldset>
	<legend>Subir imagen</legend>
	<form action="index.php/imagenes/index/do" method="post" enctype="multipart/form-data">
		<label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen" />
        <br />
        <label></label>
        <input type="submit" value="Subir" />
	</form>
</fieldset>