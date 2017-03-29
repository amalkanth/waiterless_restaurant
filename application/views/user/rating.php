<html>
<head>
    <title>HOTEL NAME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <style>
 .rate-container
 {
  padding-left:100px;
 }
 
 .container{
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 100%;
    padding: 40px;
}
.star{
    color: #ccc;
    cursor: pointer;
    transition: all 0.2s linear;
}
.star-checked{
    color: gold;
}
#result{
    display: none;
}
b.r{
    color: red;
}
b.g{
    color: green;
}
 </style>
</head>
<body>

<h3>please enter your rating and reviews of the food items,</br>your reviews help us serve better</h3>
<a href="../user/pay" class="btn btn-warning" style="float: right;">SKIP RATING</a>

<div class="rate-container">

<?php $data1 = array(
      'name'        => 'reviews',
      'id'          => 'reviews',
      'value'       => '',
      'rows'        => '2',
      'cols'        => '20',
      'style'       => 'width:50%',
    );?>
<?php foreach($orders as $ordr)
{?>
	<?php $id=$ordr['item_id'];?>

    <input type="hidden" value="<?php echo $id;?>" id="product_id">
    
   
        <h3><?php echo $ordr['item_name'];?></h3>
        <?php echo form_label("reviews");?>
        <?php echo form_textarea($data1); ?></br>
        <div id="star-container">
            <i class="fa fa-star fa-3x star" id="star-1"></i>
            <i class="fa fa-star fa-3x star" id="star-2"></i>
            <i class="fa fa-star fa-3x star" id="star-3"></i>
            <i class="fa fa-star fa-3x star" id="star-4"></i>
            <i class="fa fa-star fa-3x star" id="star-5"></i>
        
        <div id="result"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/rating.js"></script>
<?php }?></div>
<a href="../user/pay" class="btn btn-success "style="float: right;">PAY BILL</a>
</body>
</html>