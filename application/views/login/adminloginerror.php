invalid credentials
<body>
<h1>ADMIN LOGIN</h1>
<div id="container">

<?php echo form_open('login/adminvalidation'); ?>
<?php  echo validation_errors();?>
<?php echo form_label('USERNAME :'); ?>
<?php echo form_input(array('id' => 'username', 'name' => 'username')); ?>
<?php echo form_label('PASSWORD:'); ?>
<?php echo form_password(array('id' => 'password', 'name' => 'password')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'LOGIN')); ?>
<?php echo form_close(); ?>
</div>
</body>

