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
		alert(cat_id);
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4)
			{
				alert("jj");
				document.getElementById("subcategory").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","../assets/ajax/ajaxsub.php?cat_id="+cat_id,true);
		xmlhttp.send();
	}
	</script>

	</head>

<body>
	<div class="bdy">
    <?php echo form_open("admin/additemvalidation");  ?>
		<?php 
			$sty= array(
			 
			        'style' => 'color: #000;'
			);

		?>
		<div class="dropdown" >
			  <p class="dropdown11">&nbsp;</p>
			  <p class="dropdown11"> 
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

		<select name="subcategory" id="subcategory">
		
			<option value="">------select subcategory-----</option>
		</select>
      

		<br><br><br>

		<label for="price"></label>
		price(INR):<input type="text" name="price" id="price" />  
		

		  
		<br><br><br>description<br>
		<label for="description"></label>

		<textarea name="description" id="description" cols="45" rows="5"></textarea>
		
		<br><br>
		
		 <?php echo form_label('item name:');?>
		 <input type="text" name="item_name" id="item_id" />

		<input type="submit" name="submit" id="submit" value="Submit" />
		<?php echo form_close();?>
		</div>
</body>