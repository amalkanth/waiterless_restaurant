
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOTEL NAME</title>
 
<link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../assets/js/core.js"></script>
</head>
<body>
 
<div id="wrap">
 
    <?php $this->view($content); ?>
     
     <div class="cart_list">
        <h3>Your Orders</h3>
        <div id="cart_content">
            <?php  $this->view('user/cart.php'); ?>
        </div>
</div>
 </div>
</body>
</html>

