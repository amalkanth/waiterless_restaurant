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

<h3>ITEM DETAILS ADDED SUCCESFULLY PLEASE SELECT AN IMAGE FOR YOUR ITEM</h3>
<?php
echo $name['item_name'];
echo $name['item_id'];
$n=$name['item_name'];
$id=$name['item_id'];


?>

<form action="addimagevalidation" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="hidden" name="name" id="name" value="<?php echo $n;?>">
     <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

</div>
