<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title><?php echo $title; ?></title>

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/scaffolding/stylesheet.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='expires' content='-1' />
<meta http-equiv='pragma' content='no-cache' />

</head>
<body>

<div id="header">
<div id="header_left">
<h3>Tables List:</h3>
<select name="tables" id="tables" onchange="document.location.href = this.options[this.selectedIndex].value">
	<option value="#">select table</option>
<?php foreach( $tables as $table ) : ?>
	<option value="<?php echo site_url('scaffolding') . '?table=' . $table; ?>"<?php echo ( isset( $_GET['table'] ) && $_GET['table'] == $table ) ? ' selected="selected"' : ""; ?>><?php echo $table ?></option>}
<?php endforeach; ?></select>
</div>
<div id="header_right">

<?php echo anchor('scaffolding'.$table_url, $this->lang->line('scaff_view_records')); ?> &nbsp;&nbsp;|&nbsp;&nbsp;
<?php echo anchor('scaffolding/add'.$table_url,  $this->lang->line('scaff_create_record')); ?>
</div>
</div>
<br clear="all">
<div id="outer">
<?php

/* End of file header.php */
/* Location: ./application/views/scaffolding/header.php */