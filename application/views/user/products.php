<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .navbar{
  	opacity: 0.8;
  }
  .box{
  	margin-top: 15px;
  }
  .carousel{
  	width: 100%;
  	max-height: 75%;
  	margin: auto;
  }
  .box{
  	box-shadow: 8px, 8px, 5px, grey;
  	border-color:#000;
  	border-style: solid;
  	border-width: 1px;

  }

.bdy{
padding-left: 80px;
}
body{
    font-family: "Lucida Sans";
    font-size: 12px;
}
 
#wrap{
    width: 1024px;
}
 
ul.products{
    list-style-type: none;
    width: 525px;
    margin: 0;
    padding: 0;
}
 
    ul.products li{
        background: #eeeeee;
        border: 1px solid #d3d3d3;
        padding: 5px;
        width: 250px;
        text-align: center;
        float: left;
        margin-right: 10px;
    }
 
    ul.products h3{
        margin: 0;
        padding: 0px 0px 5px 0px;
        font-size: 14px;
    }
     
    ul.products small{
        display: block;
    }
     
    ul.products form fieldset{
        border: 0px;
    }
     
    ul.products form label{
        font-size: 12px;
    }
     
    ul.products form input[type=text]{
        width: 18px;
        background: #FFF;
        border: 1px solid #d3d3d3;
    }

</style>
</head>
<body class="bdy">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
  </div>
</nav>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo base_url(); ?>image/offers/offer1.jpg" alt="Chania" width="100%" height="50%">
      </div>
      <div class="item">
        <img src="<?php echo base_url(); ?>image/offers/offer2.jpg" alt="Chania" width="100%" height="50%">
      </div>
      <div class="item">
        <img src="<?php echo base_url(); ?>image/offers/offer3.jpg" alt="Flower" width="100%" height="50%">
      </div>
      </div>
     </div>
     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
     </a>
    </div>
</div>
<div class="container">
  <div class="row">
	<div class="col-sm-3 box">
		<h3>Name</h3><br>
		<p>some text</p>
	</div>
  </div>
</div>

<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['item_name']; ?></h3><?php $image=$p['path'];?>
       <img height="220" width="220" src="<?php echo base_url(); ?>image/menu/<?php echo $image; ?>.jpg" alt="" />
        <small>&#8377;<?php echo $p['price']; ?></small></br>
        <small><?php echo $p['description']; ?></small>
        <?php echo form_open('user/add_cart_item'); ?>
            <fieldset>
                <label>Quantity</label>
                <?php echo form_input('quantity', '1', 'maxlength="2"'); ?></br>
                <?php echo form_label("remarks");?>
                <?php echo form_input('remarks', '', ''); ?></br>
                <?php echo form_hidden('product_id', $p['item_id']); ?>
                <?php echo form_submit('add', 'Add to order'); ?>
            </fieldset>
        <?php echo form_close(); ?>
    </li>
    <?php endforeach;?>
</ul>



</body>