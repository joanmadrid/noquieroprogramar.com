<p>Resultados de la b&uacute;squeda '<strong><?=$_POST['buscar']?></strong>':</p>
<?php if($query->num_rows()>0): ?>
	<?php foreach($query->result() as $row): ?>
    	<h2><?=$row->titulo?> (puntuaci&oacute;n: <?=round($row->puntos, 2)?>)</h2>
        <p><?=$row->cuerpo?></p>
        <hr />
    <?php endforeach; ?>
<?php endif; ?>