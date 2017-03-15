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