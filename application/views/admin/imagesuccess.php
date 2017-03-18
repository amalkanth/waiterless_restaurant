
<head>
	<style>
	.bdy{
	padding-left: 355px;
	left: auto;
	}
	</style>
</head>





<body>
	<div class="bdy">

<h3>item added successsfully</h3>
<p align="center">
 <a href="../admin/additem" align="right" class="btn btn-info " >ADD NEW ITEM</a></p>
<div id="container">
 
<dl>
 
    <dt>
 
        Item Name:
 
    </dt>
 
    <dd>
 
        <?php echo $item['item_name'];?>
 
    </dd>
 
    <dt>
 
        Price:
 
    </dt>
 
    <dd>
 
        <?php echo $item['price'];?>
 
    </dd>
 
    <dt>
 
        Item description:
 
    </dt>
 
    <dd>
 
        <?php echo $item['description'];?>
 
    </dd>
 
    <br />
 
    <p>The Image:</p>
 
    <img height="420" width="720" alt="Your uploaded image" src="<?=base_url(). 'image/menu/' . $uploadInfo['file_name'];?>"> 
 
    
 
    
 
</dl>
 
</div>
 