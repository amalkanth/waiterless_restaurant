<head>
<style>
body{
	background-color: grey;
}
.bdy{
padding-left: 260px;
background-color: grey;
}
.tbl{
 padding-left:0px;	
}

.mnu{
 padding-left: 300px;	
}
tr:hover{background-color:#f5f5f5}
th {
    background-color: #4CAF50;
    color: black;
}
tr {
    background-color: #4CAF50;
    color: black;
    font-style: italic;
}


</style>
</head>

<body>
<div class="bdy">

 <p><a href="../admin/additem" class="btn btn-info ">ADD ITEM</a> 
   <a href="../admin/additem" class="btn btn-info ">EDIT ITEM</a>
   <a href="../admin/removeitem" class="btn btn-info ">REMOVE ITEM</a><br></br>
   <a href="../admin/addcategory" class="btn btn-primary ">ADD / REMOVE CATEGORY</a>
 <a href="../admin/addsubcategory" class="btn btn-primary ">ADD / REMOVE SUBCATEGORY</a></p>
 <p>
   <?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waiterless_restaurant");
$qu=mysqli_query($con,"SELECT tbl_item.item_id,tbl_item.item_name,tbl_item.price,tbl_item.description,tbl_image.path
                       FROM tbl_item
                       LEFT JOIN tbl_image ON tbl_item.item_id = tbl_image.item_id
                       ORDER BY tbl_item.item_id");
?> <div class="tbl">
 <table width="500" border="5" cellpadding="10">
   <tr>
     <th width="103">item_id</th>
     <th width="260"> item_name </th>
     <th width="107">price</th>
   </tr>
   <tr>
     
   <tr>
   
  <?php
				while($data=mysqli_fetch_array($qu))
				{
					$item_id=$data["item_id"];
					$item_name=$data["item_name"];
					$item_price=$data["price"];
					echo "<br>";
 ?>                 
                <tr>
               <td><?php echo $item_id;?></td>
                <td><?php echo $item_name;?></td>
               <td><?php echo $item_price?></td>
              </tr>
               
   <?php		
				}
				?>
   </table>
   </div>
 </div>

</div>
