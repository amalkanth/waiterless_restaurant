
<h1>THIS IS CHEF HOME</h1>


<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
	text-color:black;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){font-color:black;}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<?php $id=999;?>
<?php if($order)
{?>
<h2>PENDING ORDERS</h2>
<div class="table-container">





<?php  foreach($order as $ordr)
{
 if($ordr['order_id']!=$id)
{?><?php  $id=$ordr['order_id']; ?>
<table><?php echo "ORDER ID:". $ordr['order_id'];?><a href="../chef/confirm_order/<?php echo  $ordr['order_id'];?>" class="btn btn-danger ">CONFIRM ORDER</a>
  <tr>
  	<th width="18%">Table no</th>
  	 <th width="22%">Order time</th>
  	 <th width="22%">Item name</th>
     <th width="18%">quantity</th
     ><th width="20%">Remarks</th>
  </tr>
<?php }
else?>
<?php {?>
 <tr>
    <td><?php echo $ordr['table_id'];?></td>
    <td><?php echo $ordr['order_time'];?></td>
    <td><?php echo $ordr['item_name'];?></td>
    <td><?php echo $ordr['qty'];?></td>
    <td><?php echo $ordr['remarks'];?></td>
  </tr>
  <?php }
}?>

</table>
</div>
<?php }
 else
{
 echo "there are no pending orders";
}?>
</body>
</html>
