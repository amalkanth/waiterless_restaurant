<?php //view to add item names ?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
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

	<script type="text/javascript" language="javascript">
	function loaddist(cat_id)
	{

		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4)
			{
				
				document.getElementById("subcategory").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","../assets/ajax/ajaxsub.php?cat_id="+cat_id,true);
		xmlhttp.send();
	}


	function loadsubid(sub_id)
	{
		
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4)
			{
				
				document.getElementById("item_id").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","../assets/ajax/ajaxoffer.php?sub_id="+sub_id,true);
		xmlhttp.send();
	}
	</script>

	</head>

<body>
	<div class="bdy">
    <?php echo form_open("admin/offersetvalidation");  ?>
		<?php 
			$sty= array(
			 
			        'style' => 'color: #000;'
			);

		?>
		<div class="dropdown" >
			  <p class="dropdown11">&nbsp;</p>
			  <p class="dropdown11"> 
			  	<?php echo form_label('category'); ?>
			  <select name="category" id="category" onchange="loaddist(this.value)">
			  category:
			  <option>-------select category---</option>
			  <?php 
				if(isset($name))
				{
					foreach($name as $row)
					{
			  ?>
			   <option value="<?php echo $row["cat_id"]; ?>" id="cat_id" name="cat_id">
			   <?php  echo $row["cat_name"];$id=$row["cat_id"]; ?>
			   </option>
			   <?php 	
					}
				}
			   ?>
			  
			   </select>  
		</div>
        <?php echo form_label('subcategory'); ?>
		<select name="subcategory" id="subcategory" onchange="loadsubid(this.value)">
		
			<option value="">------select subcategory-----</option>
		</select>
      

		<br><br><br>
		<?php echo form_label('item name'); ?>
		<select name="item_id" id="item_id">
		
			<option value="">------select item-----</option>
		</select>
      <br><br><br>
		<?php echo form_label('Discount for platinum customers(%)'); ?>
		<input type="text" name="ofr_platinum" id="ofr_platinum"/>
 <br><br><br>
        <?php echo form_label('Discount for golden customers(%)'); ?>
		<input type="text" name="ofr_gold"  id="ofr_gold"/>
<br><br><br>
        <?php echo form_label('Discount for silver customers(%)'); ?>
		<input type="text" name="ofr_silver"  id="ofr_silver"/>
<br><br><br>
        <?php echo form_label('Discount for general customers(%)'); ?>
		<input type="text" name="ofr_general"  id="ofr_general"/>

<br><br>
		<input type="submit" name="submit" id="submit" value="Submit" />
		<?php echo form_close();?>
		</div>
</body>