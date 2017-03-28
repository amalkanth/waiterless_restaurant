
<option value="">-------select--------</option>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"waiterless_restaurant");
	if(isset($_GET["sub_id"]))
	{ 
		$stid=$_GET["sub_id"];
				$qu=mysqli_query($con,"select * from tbl_item where sub_id=$stid");
				while($data=mysqli_fetch_array($qu))
				{
					$sid=$data["item_id"];
					$sname=$data["item_name"];
				?>
				
                <option value="<?php echo $sid; ?>" id="<?php echo $sid; ?>"><?php echo $sname; ?></option>
            
                <?php
				}
	}

	
				?>


