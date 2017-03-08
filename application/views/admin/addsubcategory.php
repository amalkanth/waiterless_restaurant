<head>
<style>

.bdy{
padding-left: 355px;
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
<?php

    
 
 echo form_dropdown('cat_name',$name,'cat_name',$sty);
  echo form_open('admin/addsubcategoryvalidation');
  
  echo form_close();
//echo $ar[0]->cat_name;
  ?>

<select>
<option>-------select---</option>
<?php 
if(isset($name))
{
	foreach($name as $row)
	{
		?>
		<option value=<?php $row["cat_id"]; ?>>
		<?php  echo $row["cat_name"]; ?>
		
		</option>
	<?php 	
		
	}
	
}
?>
</select>
</div>