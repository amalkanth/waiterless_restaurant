<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
.modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
.of{
background-image: url('image/ofr.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}
.order{

}
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
padding-left: 100px;
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

a:active {
	font-size: 12px;
}
</style>
</head>

<body class="bdy">
<div class="container-fluid">
<nav class="navbar navbar-default">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hotel name</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">about</a></li>
        <li><a href="#">contact</a></li>
        
        <li><a href="#">Menu</a></li>
        
        
      </ul>
<ul  class="nav navbar-nav navbar-center">
      <li><h4>Welcome <?php echo $_SESSION['user_name'];?></h4></li>
      
    </ul>  
  <ul  class="nav navbar-nav navbar-right">
      <li><a href="../table/settable"><h4>Logout</h4></a></li>
      
    </ul>  </div></div>
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
<div class="">
  <div class="row">
  <div class="of">
	<div  class="col-sm-3 box">
		</br></br><a href="../user/offer" class="btn btn-info ">YOUR OFFERS</a> </p>
<br>
		<p>.</p>
	</div></div>
  </div>
</div>1111!!!!
<div class="container" align="right">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" align="right" id="myBtn">ORDER STATUS</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span></span> Your orders</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
 

<table>
  <tr>
  
 
  	 <th width="18%">Item name</th>
     <th width="18%">quantity</th>
     <th width="18%">Price(&#8377;)</th>
     <th width="26%">order status</th>
  </tr><?php $total=0;$status="";?>
<?php  foreach($orders as $ordr)
{
switch ($ordr['order_status']) {
    case 0:
       $status="Confirmed by user";
        break;
    case 1:
        $status="Confirmed by chef";
        break;}?>
 <tr>
    
    <td><?php echo $ordr['item_name'];?></td>
    <td><?php echo $ordr['qty'];?></td>
    <td><?php echo $ordr['price'];?></td>
    <td><?php echo $status;?></td>
  </tr>
  <?php $total=$total+$ordr['price'];?>
<?php }echo "<h3>TOTAL AMOUNT:</h3>"?><h3> &#8377;</h3><?php echo"<h3>". $total."</h3>"; ?> 


</table>
           
           
            
             
        </div>
        <div class="modal-footer">
          <a href="../user/rating" class="btn btn-success ">PAY BILL</a>
                </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<?php $data1 = array(
      'name'        => 'remarks',
      'id'          => 'remarks',
      'value'       => '',
      'rows'        => '2',
      'cols'        => '20',
      'style'       => 'width:50%',
    );?>
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
                <?php echo form_textarea($data1); ?></br>
                <?php echo form_hidden('product_id', $p['item_id']); ?>
                <?php echo form_submit('add', 'Add to order'); ?>
            </fieldset>
        <?php echo form_close(); ?>
    </li>
    <?php endforeach;?>
</ul>



</body>