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
echo $title;
?>
<div class="dropdown" >
  <p class="dropdown11">&nbsp;</p>
  <p class="dropdown11">
  <form action="../admin/addsubcategoryvalidation" method="post"> 
    <select name="category" id="category">
      <option>-------select category---</option>
      <?php 
if(isset($name))
{
	foreach($name as $row)
	{
		?>
      <option value="<?php echo $row["cat_id"]; ?>"   >
        <?php  echo $row["cat_name"]; ?>
        
        </option>
      <?php 	
		
	}
	
}
?>
    </select>
  </p>
</div>


  <p>
    <label for="cat_name">subcategory name:</label>
  </p>
  <p>
    <input type="text" name="subcat_name" id="subcat_name" />
    <br>
    <br>
    
    <input type="submit" name="submit" id="submit" value="ADD" />
  </p>
</form>
</div>
