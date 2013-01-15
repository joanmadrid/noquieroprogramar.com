<p><strong>Tu imagen se ha subido correctamente!</strong></p>
<p>
	<strong>Link de tu imagen</strong>
    <br />
    <a href="<?=base_url();?>uploads/<?=$file_name?>"><?=base_url();?>uploads/<?=$file_name?></a>
</p>
<p>
	<strong>Para foro</strong>
    <br />
    <textarea cols="50" rows="5">[url=<?=base_url();?>uploads/<?=$file_name?>][img]<?=base_url();?>uploads/<?=$file_name?>[/img][/url]</textarea>
</p>
<p>
	<strong>Para foro con miniatura</strong>
    <br />
    <a href="<?=base_url();?>uploads/<?=$file_name?>"><img src="<?=base_url();?>uploads/<?=$raw_name?>_thumb<?=$file_ext?>" /></a>
    <br />
    <textarea cols="50" rows="5">[url=<?=base_url();?>uploads/<?=$file_name?>][img]<?=base_url();?>uploads/<?=$raw_name?>_thumb<?=$file_ext?>[/img][/url]</textarea>
</p>