<?php
echo $message;

?>
 <body>
<h1>REGISTER HERE</h1>
<div id="container">

<?php echo form_open('table/userregistervalidation'); ?>
<?php  echo validation_errors();?>
<?php echo form_label('USERNAME :'); ?>
<?php echo form_input(array('id' => 'username', 'name' => 'username')); ?>
<?php echo form_label('PASSWORD:'); ?>
<?php echo form_password(array('id' => 'password', 'name' => 'password')); ?>
<?php echo form_label('EMAILID :'); ?>
<?php echo form_input(array('id' => 'emailid', 'name' => 'emailid')); ?>
<?php echo form_label('PHONENO :'); ?>
<?php echo form_input(array('id' => 'phno', 'name' => 'phno')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'LOGIN')); ?>
<?php echo form_close(); ?>
</div>
</body>

 