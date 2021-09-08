<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/v4-shims.min.css">
	<link rel="stylesheet" type="text/css" href="css/brands.min.css">
	<link rel="stylesheet" type="text/css" href="css/solid.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>The online tile shop</title>
</head>
<body>
	<div class="topNav">
		<p class="tpNav">FREE DELIVERY & RETURNS MAINLAND UK</p>
	</div>
	<div class="home-container">
		<div class="flex-container">
			<div>
			    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    			<i class="fa fa-bars"></i></a>
    		</div>
    		<div class="logo">
			    <a href="#"><img src="assets/images/logo.png"></a>
			</div>
		    <div class="nav-bar" id="Topnav">
		    	<a class="btnAdhesive btnTiles" style="margin-left:20px; margin-right: 20px;" href="pages/tiles.php" target="_blank">TILES <span style="color:#000000; font-weight: bold;">⌵</span></a>
				<a class="btnAdhesive" style="margin-left:20px; margin-right: 20px;" href="pages/adhesives-grouts.php">ADHESIVES & GROUTS</a>
				<a class ="btnAdhesive" style="margin-left:20px; margin-right: 20px;" href="pages/tools-accessories.php">TOOLS & ACCESSORIES</a>
		    </div>
		    <div class="nav-icon">
		    	<a href=""><img class="serachIcon" src="assets/images/search-icon.png" alt="Search icon missing"></a>
				<a href=""><img class="userIcon" src="assets/images/user-icon.png" alt="User icon missing"></a>
				<a href=""><img class="cartIcon" src="assets/images/cart-icon.png" alt="User icon missing"></a>
		    </div>
		    <div class="nav-check btnCheckout">
		    	<a class="btnCheck" href="pages/checkout.php">CHECKOUT</a>
		    </div>
	    </div>
	</div>

	<div id="slideshow">
  		<div class="slide">
	    	<img src="assets/images/background/tag-image.png">
	    	<div class="tag">
	    		<p class="tagline1">Tagline for tile one</p>
				<p class="tagline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
				<a class="btnExplore" href="#">EXPLORE RANGE</a>
			</div>
   		</div>
	   	<div class="slide">
	    	<img src="assets/images/background/tag-image2.png">
	    	<div class="tag">
	    		<p class="tagline1">Tagline for tile two</p>
				<p class="tagline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
				<a class="btnExplore" href="#">EXPLORE RANGE</a>
			</div>
    	</div>
  	</div>

	<p class="slider-heading">Browse our categories</p>
	<div class="carousel js-flickity" data-flickity-options='{ "wrapAround": true, "pageDots": false} ' style="height: 480px;">
	  <div class="carousel-cell slider">
	  	<img  src="assets/images/slider/tile-s1.png">
	  	<a href="#" class="slider-caption">BATHROOM TILES</a>
	  </div>
	  <div class="carousel-cell slider">
	  	<img src="assets/images/slider/tile-s2.png">
	  	<a href="#" class="slider-caption">FLOOR TILES</a>
	  </div>
	  <div class="carousel-cell slider">
	  	<img src="assets/images/slider/tile-s3.png">
	  	<a href="#" class="slider-caption">KITCHEN TILES</a>
	  </div>
	  <div class="carousel-cell slider">
	  	<img src="assets/images/slider/tile-s1.png">
	  	<a href="#" class="slider-caption">PATTERN TILES</a>
	  </div>
	  <div class="carousel-cell slider">
	  	<img src="assets/images/slider/tile-s2.png">
	  	<a href="#" class="slider-caption">OTHER TILES</a>
	  </div>
	</div>

	<div class="flex-container-home">
			<div class="h_image">
				<img class="img1" src="assets/images/h-img-1.png">	
				<div class="_3_img_tag">
    			<p class="_3_img_tag_text">Vermot Collection</p>
				</div>
			</div>
			<div class="h_image">
				<img class="img2" src="assets/images/h-img-2.png">
				<img class="newLogo newLogo_hm_pg" src="assets/images/h-img-newlogo.png" alt="New logo missing">
				<div class="_3_img_tag">
    			<p class="_3_img_tag_text">Trending Tiles</p>
				</div>
			</div>
	</div>

	<div class="h_image">
		<img class="img3" src="assets/images/h-img-3.png">	
		<div class="_3_img_tag">
    		<p class="_3_img_tag_text">Get the look</p>
		</div>
	</div>

	<div class="h_image">
		<img class="img4" src="assets/images/h-img-4.png">	
		<div class="img4_tag">
    		<p class="img4_text">Alfaro Collection</p>
    		<p class="img4_sub_text">Lorem ipsum dolor sit amet, consected adipiscing elit adipiscing elit</p>
    		<a class="btnExplore btnExplore2nd" href="#">EXPLORE RANGE</a>
		</div>
	</div>


		<section style="margin-left:50px">
				<p class="best_seller_heading">Best Sellers</p>	
				<p class="best_seller_subtext">Lorem ipsum dolor sit amet, consected adipiscing elit adipiscing elit</p>

			<div class="flex-container" style="justify-content: space-around;">
  				<div class="column columnLike">
  					<div class="images">
						<img src="assets/images/tile-a1.png" alt="Tile missing">
					</div>
					<p class="imgText">Name goes here</p>
				 	<p class="imgText fig">Price 0.00$</p>
				</div>
				<div class="column columnLike">
					<div class="images">
						<img src="assets/images/tile-a2.png" alt="Tile missing">
						<a href="#" class="btnQuick">QUICK VIEW</a> 
					</div>
					<p class="imgText">Name goes here</p>
				 	<p class="imgText fig">Price 0.00$</p>
				</div>
				<div class="column columnLike">
					<div>
						<img src="assets/images/tile-a3.png" alt="Tile missing">
					</div>
					<p class="imgText">Name goes here</p>
				 	<p class="imgText fig">Price 0.00$</p>
				</div>
				<div class="column columnLike">
					<div class="images">
						<img src="assets/images/tile-a4.png" alt="Tile missing">
					</div>
					<p class="imgText">Name goes here</p>
				 	<p class="imgText fig">Price 0.00$</p>
				</div>
			</div>
	</section>

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

			<?php/* include 'footer.php';*/?>

			<div class="flex-container" style="margin-top: 0;">
  				<div class="column contactUs">
  					<img class="contactLogo" src="assets/images/contactlogo.png" alt="Logo missing">
					<h1 class="contact" >Need expert advice?</h1>
					<p class="pg" style="color:#ffffff;">Contact our customer service team <span style="color:#f79a81; text-decoration: underline;"> 01234567891</span></p>	
					<p style="margin-bottom: 6%; color: #ffffff;"  class="pg">Monday to Friday - 9:00am - 5:00pm</p>
				</div>
			</div>


		<div class="container">
			<div class="flex-container" style="justify-content:space-around; margin-left:40px">
  				<div class="col-15">
					<p class="about" href="#" >ABOUT US</p>
					<a class="about aboutD" href="#">THE COMPANY</a>
					<p><a class="about aboutD" href="#">STORE</a></p>
				</div>
				<div class="columnAbout">
					<h1 class="about" >CUSTOMER CARE</h1>
					<p class="about aboutD">CALL US AT 01234567891</span></p>	
					<p><a class="about aboutD" href="#">CONTACT US</a></p>
				</div>
				<div class="columnAbout">
					<h1 class="about" >FOLLOW US</h1>
					<a href="#"><i class="about fa fa-twitter" style="font-size: 36px;"></i></a>
					<a href="#"><i class="about fa fa-facebook" style="font-size: 36px; padding-left: 40px;"></i></a>
					<a href="#"><i class="about fa fa-pinterest" style="font-size: 36px; padding-left: 40px;"></i></a>
				</div>
				<div class="columnAbout">
					<h1 class="about" >PAYMENT METHODS</h1>
					<i class="payment fab fa-cc-paypal" style="font-size: 67px; color: #253b80;"></i>
					<i class="payment fab fa-cc-visa" style="font-size: 67px; color: #0066b2; margin-left: 0.5%;"></i>
					<i class="payment fab fa-cc-mastercard" style="font-size: 67px; color: #36495d; margin-left:0.5%"></i>
				</div>
			</div>

			<p class="solidFoot"></p>
			<div class="flex-container">
				<div class="foot">
					<p class="footer" >Terms & Conditions</p>
				</div>
				<div class ="foot">
					<p class="footer" >Privacy & Cookies</p>
				</div>
				<div class ="foot">
					<p class="footer" >Sitemap</p>
				</div>
				<div class ="footLeft">
					<p class="footer">Website design & devloped by us</p>
				</div>
			</div>
		</div>

</body>
</html>