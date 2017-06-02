

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
  	 <th width="30%">feedback</th>
  	 <th width="20%">rating</th>
     <th width="20%">date</th>
     
  </tr>
<?php foreach($fdbck as $row)
{?>
 <tr>
     <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['feedback'];?></td>
    <td><?php echo $row['rating'];?></td>
    <td><?php echo $row['date'];?></td>
    </tr>
  
<?php }?>

</table>