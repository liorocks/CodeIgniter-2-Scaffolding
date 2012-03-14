<p><?php echo anchor('scaffolding'.$table_url, '&lt; '.$this->lang->line('scaff_view_all'));?></p>

<?php echo form_open('scaffolding/update/'.$this->uri->segment(3).$table_url); ?>

<table border="0" cellpadding="3" cellspacing="1">
<?php foreach($fields as $field): ?>

<?php if ($field->primary_key == 1) continue; ?>

<tr>
	<td><?php echo  $field->name; ?></td>
	
	<?php if ($field->type == 'blob'): ?>
	<td><textarea class="textarea" name="<?php echo $field->name;?>" cols="60" rows="10" ><?php $f = $field->name; echo form_prep($query->$f); ?></textarea></td>
	<?php else : ?>
	<td><input class="input" value="<?php $f = $field->name; echo form_prep($query->$f); ?>" name="<?php echo $field->name; ?>" size="60" /></td>
	<?php endif; ?>
	
</tr>
<?php endforeach; ?>
</table>

<input type="submit" class="submit" value="Update" />

<?php echo form_close(); 

/* End of file edit.php */
/* Location: ./application/views/scaffolding/edit.php */