<head>
	<style>
	.bdy{
	padding-left: 355px;
	left: auto;
	}
	</style>
</head>



<body>
	<div class="bdy">
	<h3><?php echo $name['item_name'];
?> added ..choose an image</h3>

	

<div id="container">
 
<?php echo  form_open_multipart('admin/addimagevalidation')?>
 
<input type="file" name="userfile" />
 <input type ="hidden" name="id" id="id" value="<?php echo $name['item_id'];?>">
<p><input type="submit" name="submit" value="submit" /></p>
 
<?php echo form_close();?>
 
</div>
 
</body>
</html>

</div>
