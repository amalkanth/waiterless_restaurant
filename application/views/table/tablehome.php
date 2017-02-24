
<!DOCTYPE html>
<html>
<head>
<title>tablehome</title>
</head>
<body>
<div id="container">
<h1>TABLE HOME</h1>
<?php echo form_open('table/settable'); ?>

<?php echo form_label('TABLENO :'); ?>
<?php echo form_input(array('id' => 'table_no', 'name' => 'table_no')); ?>


<?php echo form_submit(array('id' => 'submit', 'value' => 'SET')); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>

