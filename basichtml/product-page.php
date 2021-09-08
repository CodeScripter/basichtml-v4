<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="js/script.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/swiper/swiper-bundle.css">
	<link rel="stylesheet" type="text/css" href="css/swiper/swiper-bundle.min/.css">
	<link rel="stylesheet" type="text/css" href="css/product-css.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<title>Product Page</title>
</head>

<body>
	<?php include 'header.php'; ?>
<div class="prod-flex">
	<div class="prod-flex" style="width: 50%;">		
		<script src="js/swiper/swiper-bundle.min.js"></script>
		<div class="swiper">
		  <!-- Additional required wrapper -->
		  <div class="swiper-wrapper">
		    <!-- Slides -->
		    <div class="swiper-slide">
		    	<img src="assets/images/p-img-1.png">
		    </div>
		    <div class="swiper-slide">
		    	<img src="assets/images/p-img-1.png">
		    </div>
		    <div class="swiper-slide">
		    	<img src="assets/images/p-img-1.png">
		    </div>
		  </div>
		  <!-- If we need navigation buttons -->
		  <div class="swiper-button-prev" style="color:#ffffff; left: 50px;"></div>
		  <div class="swiper-button-next" style="color:#ffffff; right: 50px;"></div>
		</div>
	</div>
	<div class="p_head">
		<div class="flex_head">
			<div>
				<p class="heading">Urban Cloud</p>
			</div>
			<div class="top_30instock">
				<span class="btn_instock">IN STOCK</span>
			</div>
		</div>
		<div class="p_rating">
	  		<i style="color: #ffc543;" class="fas fa-star"></i>
	  		<i style="color: #ffc543;" class="fas fa-star"></i>
	  		<i style="color: #ffc543;" class="fas fa-star"></i>
	  		<i style="color: #ffc543;" class="fas fa-star"></i>
	  		<i style="color: #ffc543;" class="fas fa-star"></i>
	  		<span class="review">5 reviews</span>
	  	</div>
	  	<div>
	  		<p class="price">$00 per m2  6.5 x 13.2 cm</p>
	  	</div>
	  	<div class="flex_qty">
	  		 <span class="qty">QTY</span><input class="qtybox" type="number" name="quantity" id="quantity">
	  		 <span class="m2">M<sup>2</sup></span><input class="qtybox" type="number" name="m2" id="m2">
	  	</div>
	  	<p class="p_solid"></p>
	  	<div class="cal">
	  		<div style="margin-bottom:20px;">
	  			<span class="p_cal">Calculate your Area Size</span>
	  			<a style="float: right; font-size: 25px;" class="p_cal" href="#"><i class="fa fa-minus-circle"></i></a>
	  		</div>
	  		<div class="flex_area">
	  			<form class="form_top" name="calculator" oninput="area.value=parseInt(height.value)*parseInt(width.value)">
	  			<div>
	  				<span class="cal_height">Height</span><input class="h_w_box" type="number" name="height" id="height">
	  			</div>
	  			<div>
	  		 		<span class="cal_width">Width</span><input class="h_w_box" type="number" name="width" id="width">
	  		 	</div>
	  		 	<select class="sel_box">
	  		 		<option id="meters">Meters</option>
	  		 		<option id="inches">Inches</option>
	  		 	</select>
	  		 	<div class="inline_content">
	  		 		<span class="cal_equal">=</span>
	  		 	</div>
	  		 	<div class="inline_content">
	  		 		<output name="area" for="hw"></output>
	  		 		<span class="cal_equal"> m<sup>2</sup></span>
	  		 	</div>
	  		 	</form>
	  		</div>
	  		<div class="top_30">
	  			<a href="#" class="another_area_text" style="text-decoration: none;">Add another area <i class="fas fa-plus-circle"></i></a>
	  		</div>
	  		<div>
	  			<p class="p_solid"></p>
	  		</div>
	  		<div class="top_30">
	  			<input class="btnradio" type="radio" name="wastage" id="wastage" value="cuts_wastage" checked="">
	  			<label class="cuts" for="wastage">Add 10% cuts and wastage</label>
	  		</div>
	  		<div class="top_30">
	  			<span style="font-size: 38px; font-weight: 600;"> Total </span><span style="font-size: 50px;font-weight: bolder;"> $00 </span><span style="font-size: 25px;">inc VAT</span>
	  		</div>
	  		<div class="top_30">
	  			<a href="#"><button class="btnbasket" id="addtobasket"><i class="fa fa-shopping-cart" style="padding-right: 20px;"></i>ADD TO BASKET</button></a>
	  		</div>
	  		<div>
	  			<a href="#"><button class="btnsample" id="addfreesample"><i class="fa fa-shopping-cart" style="padding-right: 20px;"></i>ADD FREE SAMPLE</button></a>
	  		</div>
	  		<div class="top_50">
		  		<div style="display:inline-block;">
		  			<i class="fa fa-cube" style="padding-right: 20px; font-size: 50px;"></i>
		  		</div>
		  		<div style="width: 300px; display: inline-block;">
		  			<span class="deliverytext">NEXT DAY DELIVERY IF ORDERED BEFORE 3PM</span>
		  		</div>
		  	</div>

	  	</div>
	</div>
</div>




<div class="flex-container" style="background-color: #f9f9f9; text-align: center;">
  	<div class="columnFeed">
  		<div class="rating">
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  		</div>
			<p class="feed">Lorem ipsum dolor sit amet,</p>
			<p >consected adipiscing elit, sed</p>	
			<p class="imgText fig">Name here</p>
	</div>

	<div class="columnFeed">
		<div class="rating">
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  			<i style="color: #ffc543;" class="fas fa-star"></i>
  		</div>
			<p class="feed">Lorem ipsum dolor sit amet,</p>
			<p >consected adipiscing elit, sed</p>	
			<p class="imgText fig">Name here</p>
	</div>
</div>

	<script type="module">
	  import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'
		const swiper = new Swiper('.swiper', {
		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-next',
		    prevEl: '.swiper-button-prev',
		  },

		  // And if we need scrollbar
		  scrollbar: {
		    el: '.swiper-scrollbar',
		  },
		});

</script>


	<?php include 'footer.php'; ?>
</body>
</html>
