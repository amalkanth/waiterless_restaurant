
<!DOCTYPE html>
<html>
<head>
<title>tablehome</title>
<style>
div.bdy{
color:black;


}

</style>
</head>
<body>
<div class="bdy">
<div id="container">
<?php echo form_open('table/settable'); ?>

<?php echo form_label('TABLENO :'); ?>


<select name="tableno">
<option>--select--</option>
<option> 2</option>
<option> 4</option>
<option> 6</option>
<option> 8</option>
<option> 10</option>
<option> 12</option>
<option> 14</option>
<option> 16</option>
<option> 20</option>

</select>


 


<?php echo form_submit(array('id' => 'submit', 'value' => 'SET')); ?>
<?php echo form_close(); ?>
</div>
</bdy>
</body>
</html>

