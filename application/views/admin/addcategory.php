


<head>
<style>
.bdy{
padding-left: 270px;
 padding-top: 50px;
}

</style>

</head>


<div class="bdy">

<?php 
echo $title;
echo "<br><br>";

?>


<form action="../admin/addcategoryvalidation" method="post">
  <label for="cat_name">category name:</label>
  <input type="text" name="cat_name" id="cat_name" /><br><br>
  <input type="submit" name="submit" id="submit" value="ADD" />
</form>
</div>