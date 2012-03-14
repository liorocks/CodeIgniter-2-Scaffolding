<?php  $this->load->view('scaffolding/header');  ?>

<p><?php echo $this->lang->line('scaff_no_data'); ?></p>
<p><?php echo anchor('scaffolding/add'.$table_url, $this->lang->line('scaff_create_record')); ?></p>

<?php $this->load->view('scaffolding/footer'); 

/* End of file no_data.php */
/* Location: ./application/views/scaffolding/no_data.php */