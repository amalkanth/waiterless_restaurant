<?php error_reporting(0);?> 
<head>
<style>
.bdy{
padding-left: 270px;
 padding-top: 50px;
}
</style>
</head>

<body>
<div class="bdy">

<div class="container">
 
  <!-- Trigger the modal with a button -->
          
 

<table>
  <tr>
  
 
  	 <th width="18%">Item name</th>
     <th width="18%">quantity</th>
     <th width="18%">Price(&#8377;)</th>
    
  </tr><?php $total=0;echo "Tableno:".$_SESSION['tableno']. "</br>"."Customername:".$_SESSION['user_name'];?>
<?php  foreach($orders as $ordr)
{?>

 <tr>
    
    <td><?php echo $ordr['item_name'];?></td>
    <td><?php echo $ordr['qty'];?></td>
    <td><?php echo $ordr['price'];?></td>
   
  </tr>
  <?php $total=$total+$ordr['price'];?>
<?php }echo "<h3>TOTAL AMOUNT:</h3>"?><h3> &#8377;</h3><?php echo"<h3>". $total."</h3>"; ?> 


</table>
           
           
            
             
        </div>
        <div class="modal-footer">
          <a href="#../admin/print_bill" class="btn btn-success ">PRINT BILL</a>
                </div>
      </div>
      
    </div>
  </div> 
</div>


</div>
</body>