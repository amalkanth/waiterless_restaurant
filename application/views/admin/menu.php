<head>
<style>

.bdy{
padding-left: 255px;
}
</style>
</head>

<body>
<div class="bdy">

 <a href="../admin/additem" class="btn btn-info ">ADD ITEM</a> 
 <a href="../admin/additem" class="btn btn-info ">EDIT ITEM</a>
  <a href="../admin/removeitem" class="btn btn-info ">REMOVE ITEM</a><br></br>
  <a href="../admin/addcategory" class="btn btn-primary ">ADD / REMOVE CATEGORY</a>
  <a href="../admin/addsubcategory" class="btn btn-primary ">ADD / REMOVE SUBCATEGORY</a>
 
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waiterless_restaurant");
$qu=mysqli_query($con,"select * from tbl_item group by sub_id");
				while($data=mysqli_fetch_array($qu))
				{
					$item_id=$data["item_id"];
					$item_name=$data["item_name"];
					echo $item_id ; echo "  ";echo $item_name; echo "<br><br>";
				}
				?>
				
    

</div>
