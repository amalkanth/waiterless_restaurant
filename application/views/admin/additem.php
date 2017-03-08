<head>
<style>
.bdy{
padding-left: 270px;
 padding-top: 50px;
}

</style>

</head>


<div class="bdy">


  <label for="category"></label>
  <select name="category" id="category">
      <option>---------select category----------</option> 
      <?php
	      $q="select cat_name from tbl_main_category";
		  $result=mysqli_query($result);
		  while($row=mysqli_fetch_array($result))
		   {
			   $cat=$row[0];
			   echo $cat;
			   ?>
               
         <option> $cat</option>
         <?php
		   }
	  
	  ?>
  </select><br><br>
  
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
  
<input type="submit" name="submit" id="submit" value="Submit" />
<?php echo form_close();?>
</div>
