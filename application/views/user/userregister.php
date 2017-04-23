<head><?php


?>
<style>
.modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
</style>
</head>
 <body>
 <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          
          <h4><span></span> Please enter your details to register as a new customer</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        <?php echo "</br></br></br>".$message;?>
<h1>REGISTER HERE</h1>
<div id="container">

<?php echo form_open('table/userregistervalidation'); ?>
<?php  echo validation_errors();?>
<?php echo form_label('USERNAME :'); ?>
<?php echo form_input(array('id' => 'username', 'name' => 'username')); ?></br></br>
<?php echo form_label('PASSWORD:'); ?>
<?php echo form_password(array('id' => 'password', 'name' => 'password')); ?></br></br>
<?php echo form_label('EMAILID :'); ?>
<?php echo form_input(array('id' => 'emailid', 'name' => 'emailid')); ?></br></br>
<?php echo form_label('PHONENO :'); ?>
<?php echo form_input(array('id' => 'phno', 'name' => 'phno')); ?></br></br>
<?php echo form_submit(array('id' => 'submit', 'value' => 'REGISTER')); ?>
<?php echo form_close(); ?>
</div>
</div>
</div>

</body>

 