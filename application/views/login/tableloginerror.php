<!DOCTYPE html>
<html>
<head>
<title>tablelogin</title>
</head>
<body>
<div id="container">
<h1>invalid credentials</h1>
<?php echo form_open('login/tablevalidation'); ?>

<?php echo form_label('USERNAME:'); ?>
<?php echo form_input(array('id' => 'username', 'name' => 'username')); ?>
<?php echo form_label('PASSWORD:'); ?>
<?php echo form_password(array('id' => 'password', 'name' => 'password')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'LOGIN')); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>

