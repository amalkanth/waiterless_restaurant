

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
body{
 background-image: url('../assets/image/bck.jpg');
    background-size:cover;
     background-repeat: no-repeat;
    background-position: center;
}

</style>
</head>
<body>
<table>
  <tr>
   <th width="30%">customer name</th>
  <th width="30%">customer name</th>
  	<th width="30%">email id</th>
  	 <th width="20%">mob no</th>
  	 <th width="20%">points</th>
     
     
  </tr>
<?php foreach($cust as $row)
{?>
 <tr>
     <td><?php echo $row['user_name'];?></td>
     <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['emailid'];?></td>
    <td><?php echo $row['phno'];?></td>
    <td><?php echo $row['point'];?></td>
   
    </tr>
  
<?php }?>

</table>