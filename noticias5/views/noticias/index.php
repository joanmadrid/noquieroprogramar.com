<?php if($query->num_rows()>0): ?>
	<?php foreach($query->result() as $row): ?>
    	<h2><?=$row->titulo?></h2>
        <p><?=$row->cuerpo?></p>
        <hr />
    <?php endforeach; ?>
<?php endif; ?>
<?=$this->pagination->create_links()?>