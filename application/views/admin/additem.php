<head>
<style>

.bdy{
	padding-left: 355px;
	left: auto;
}
.dropdown{
left-padding:390px;
}
.dropdown1 {left-padding:390px;
}
.dropdown11 {
	left-padding: 390px;
	left: auto;
}
</style>
</head>

<body>
<div class="bdy">

<?php 
$sty= array(
 
        'style' => 'color: #000;'
);

?>
<div class="dropdown" >
  <p class="dropdown11">&nbsp;</p>
  <p class="dropdown11"> 
    <select name="select">
      <option>-------select category---</option>
      <?php 
if(isset($name))
{
	foreach($name as $row)
	{
		?>
      <option value=<?php $row["cat_id"]; ?> id="cat_id" name="cat_id">
        <?php  echo $row["cat_name"];$id=$row["cat_id"]; ?>
        
        </option>
      <?php 	
		
	}
	
}
?>
    </select>
  </p>
</div>
  
  <label for="subcategory"></label>
  <select name="subcategory" id="subcategory">
    <option>------select subcategory---------</option> 
      <?php
	      $q="select subcategory_name from tbl_sub_category";
		  $result=mysqli_query($result);
		  while($row=mysqli_fetch_array($result))
		   {
			   $cat=$row[0];
			   ?>
               
         <option> $cat</option>
         <?php
		   }
	  
	  ?>
  </select><br><br>
<label for="price"></label>
 price(INR):<input type="text" name="price" id="price" />  
  
  
<br><br><br>description<br>
<label for="description"></label>
<textarea name="description" id="description" cols="45" rows="5"></textarea>
<br><br>
  <input type="file" name="userfile" size="20" /></br></br>
<input type="submit" name="submit" id="submit" value="Submit" />
<?php echo form_close();?>
</div>
