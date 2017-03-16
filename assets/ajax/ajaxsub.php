
<option value="">-------select--------</option>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waiterless_restaurant");
	if(isset($_GET["cat_id"]))
	{ 
		$stid=$_GET["cat_id"];
				$qu=mysqli_query($con,"select * from tbl_sub_category where cat_id=$stid");
				while($data=mysqli_fetch_array($qu))
				{
					$sid=$data["sub_id"];
					$sname=$data["sub_name"];
				?>
				
                <option value="<?php echo $sid; ?>" id="<?php echo $sid; ?>"><?php echo $sname; ?></option>
            
                <?php
				}
	}

	
				?>