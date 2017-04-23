<html>
<head></head>
<body>

<link rel="stylesheet" href="../assets/style.css" />
<div class="container">
<div class="login">
<h3>Please rate our food and service</h3>
<form id="ratingsForm" action="input_rating" method="post">
	<div class="stars">
		<input type="radio" name="star" class="star-1" value=1 id="star-1" />
		<label class="star-1" for="star-1">1</label>
		<input type="radio" name="star" class="star-2" value=2 id="star-2" />
		<label class="star-2" for="star-2">2</label>
		<input type="radio" name="star" class="star-3" value=3 id="star-3" />
		<label class="star-3" for="star-3">3</label>
		<input type="radio" name="star" class="star-4" value=4 id="star-4" />
		<label class="star-4" for="star-4">4</label>
		<input type="radio" name="star" class="star-5" value=5 id="star-5" />
		<label class="star-5" for="star-5">5</label>
		 

		<span></span>
		
	</div>
  <p><?php echo form_label('.  .      .Review:')?></p>
   <p> 
     <input type="text" name="review" id="review" />
   </p>
   <p><?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
   </p>
   <p>&nbsp;</p> 
   
   <p align="right"><a href="../user/pay" class="button"> Skip rating</a>
   </p>
   </div>
   </div>
</form>

</body>
</html>