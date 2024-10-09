<?php include 'partials/header.php'?>


<link href="css/index.css" rel="stylesheet">

<?php 
                            require 'config/dbc.php';
                            $query = mysqli_query($conn, "SELECT * FROM slider LIMIT 3 ");
							 
                            if ($query) {
                        ?>
<section id="center" class="center_home">
	<!-- Looping through table to display all values. -->
	<?php while ( $row = mysqli_fetch_array($query) ) { ?> 
 <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	  <!-- Overlay -->
	  <div class="overlay"></div>
	
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#bs-carousel" data-slide-to="1" class=""></li>
		<li data-target="#bs-carousel" data-slide-to="2" class=""></li>
	  </ol>
	  
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item slides active">
		  <div class="slide-1">
			<img src="admin/_assets/img/<?php echo $row['file'] ?>" alt="" width="100%" height="600px">
		  </div>
		  <div class="hero">
			<h1 class="mgt"><?php echo $row['name'] ?></h1>
			<hr>
			<p><?php echo $row['description'] ?></p>
			<h4><a class="button col" href="#">View More</a></h4>
			<h4><a class="button_1 col" href="#"> Shop Now</a></h4>
		  </div>
		</div>
		
		<div class="item slides">
		  <div class="slide-2">
		  <img src="admin/_assets/img/<?php echo $row['file'] ?>" alt="" width="100%" height="600px">
		  </div>
		  <div class="hero hero_1">
			<h1 class="mgt"><?php echo $row['name'] ?></h1>
			<hr>
			<p><?php echo $row['description'] ?></p>
			<h4><a class="button col" href="#">View More</a></h4>
			<h4><a class="button_1 col" href="#"> Shop Now</a></h4>
		  </div>
		</div>
		<div class="item slides">
		  <div class="slide-3">
		  <img src="admin/_assets/img/<?php echo $row['file'] ?>" alt="" width="100%" height="600px">
		  </div>
		  <div class="hero">
			<h1 class="mgt">Fusce  Tellus </h1>
			<hr>
			<p>Nulla quis sem at nibh elementum imperdiet <br> lacinia arcu eget nulla!</p>
			<h4><a class="button col" href="#">View More</a></h4>
			<h4><a class="button_1 col" href="#"> Shop Now</a></h4>
		  </div>
		</div>
	  </div> 
	</div>
</section>

<section id="popular">
 <div class="container">
  <div class="row">
   <div class="price_1 text-center clearfix">
       <div class="col-sm-12">
	     <h3 class="mgt">Jewellery That  <span class="col_1">You May Love</span></h3>
		<p>Explore our unique daily wear jewellery designs that reflect elegance and exclusivity.</p>
	   </div>
   </div>
   <div class="popular_1 clearfix">
    <div class="col-sm-4">
	 <div class="popular_1i clearfix">
	  <h4 class="mgt text-center">Online Exclusive </h4>
	  <h6 class="mgt-center">14 KT Lorem Jewellery </h6>
	  <img src="admin/_assets/img/product (1).jpg" class="iw" alt="abc" width="300px" height="250px">
	  <div class="popular_1ii clearfix">
	   <div class="col-sm-6 space_left">
	    <h5><i class=""></i>$5200 jewellery</h5>
	   </div>
	   <div class="col-sm-6 space_all">
	    <h5 class="text-right"><a class="button_1 mgt" href="#">SHOP NOW</a></h5>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="popular_1i bg_1 clearfix">
	  <h4 class="mgt text-center">Latest Collection </h4>
	  <h6 class="mgt-center">14 KT Lorem Jewellery </h6>
	  <img src="admin/_assets/img/product (2).jpg" class="iw" alt="abc" width="300px" height="250px">
	  <div class="popular_1ii clearfix">
	   <div class="col-sm-6 space_left">
	    <h5><i class=""></i> $2746 adele</h5>
	   </div>
	   <div class="col-sm-6 space_all">
	    <h5 class="text-right"><a class="button_1 mgt" href="#">SHOP NOW</a></h5>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="popular_1i clearfix">
	  <h4 class="mgt text-center">Trending Jewellery </h4>
	  <h6 class="mgt-center">14 KT Lorem Jewellery </h6>
	  <img src="admin/_assets/img/product (3).jpg" class="iw" alt="abc" width="300px" height="250px">
	  <div class="popular_1ii clearfix">
	   <div class="col-sm-6 space_left">
	    <h5><i class=""></i> $298 antony</h5>
	   </div>
	   <div class="col-sm-6 space_all">
	    <h5 class="text-right"><a class="button_1 mgt" href="#">SHOP NOW</a></h5>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
   <div class="popular_1 clearfix">
    <div class="col-sm-4">
	 <div class="popular_1i clearfix">
	  <h4 class="mgt text-center">Online Exclusive </h4>
	  <h6 class="mgt-center">14 KT Lorem Jewellery </h6>
	  <img src="admin/_assets/img/product (4).jpg" class="iw" alt="abc" width="300px" height="250px">
	  <div class="popular_1ii clearfix">
	   <div class="col-sm-6 space_left">
	    <h5><i class=""></i> $226 antony-trivet</h5>
	   </div>
	   <div class="col-sm-6 space_all">
	    <h5 class="text-right"><a class="button_1 mgt" href="#">SHOP NOW</a></h5>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="popular_1i bg_1 clearfix">
	  <h4 class="mgt text-center">Latest Collection </h4>
	  <h6 class="mgt-center">14 KT Lorem Jewellery </h6>
	  <img src="admin/_assets/img/product (5).jpg" class="iw" alt="abc" width="300px" height="250px">
	  <div class="popular_1ii clearfix">
	   <div class="col-sm-6 space_left">
	    <h5><i class=""></i> $274 antony-trivet</h5>
	   </div>
	   <div class="col-sm-6 space_all">
	    <h5 class="text-right"><a class="button_1 mgt" href="#">SHOP NOW</a></h5>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="popular_1i clearfix">
	  <h4 class="mgt text-center">Trending Jewellery </h4>
	  <h6 class="mgt-center">14 KT Lorem Jewellery </h6>
	  <img src="admin/_assets/img/product (6).jpg" class="iw" alt="abc" width="300px" height="250px">
	  <div class="popular_1ii clearfix">
	   <div class="col-sm-6 space_left">
	    <h5><i class=""></i> $298 da</h5>
	   </div>
	   <div class="col-sm-6 space_all">
	    <h5 class="text-right"><a class="button_1 mgt" href="#">SHOP NOW</a></h5>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="list_o_1">
 <div class="container">
  <div class="row">
   <div class="list_1 clearfix">
     <div class="col-sm-9">
	  <div class="list_1l clearfix">
	    <h3 class="mgt">Explore  <span class="col_1">The New Arrivals </span></h3>
		<p>We craft exceptionally fashionable &amp; trendy designs to make you look beautiful every day.</p>
	  </div>
	 </div>
	 <div class="col-sm-3">
	  <div class="list_1r text-right clearfix">
	    <h5 class="mgt"><a class="button mgt" href="#">VIEW ALL</a></h5>
	  </div>
	 </div>
   </div>
   <div class="list_2 clearfix">
     <div id="carousel-example_2" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					  <img src="admin/_assets/img/product (7).jpg" class="iw" alt="abc" width="300px" height="250px">
						<h3><i class=""></i> $456 đặng-thanh-tú</h3>
						<h4><a class="col_1" href="#">Nibh Elementum</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					  <img src="admin/_assets/img/product (8).jpg" class="iw" alt="abc" width="300px" height="250px">
						<h3><i class=""></i> $498</h3>
						<h4><a class="col_1" href="#">Fusce Nec Tellus</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					    <a href="#"><img src="admin/_assets/img/product (9).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
						<h3><i class=""></i> $566</h3>
						<h4><a class="col_1" href="#">Nulla Quis Sem</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					    <a href="#">  <img src="admin/_assets/img/product (10).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
						<h3><i class=""></i> $586</h3>
						<h4><a class="col_1" href="#">Vestibulum Lacinia</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
                </div>
                <div class="item">
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					    <a href="#">  <img src="admin/_assets/img/product (11).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
						<h3><i class=""></i> $456</h3>
						<h4><a class="col_1" href="#">Nibh Elementum</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					    <a href="#">  <img src="admin/_assets/img/product (12).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
						<h3><i class=""></i> $496</h3>
						<h4><a class="col_1" href="#">Fusce Nec Tellus</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					    <a href="#">  <img src="admin/_assets/img/product (13).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
						<h3><i class=""></i> $596</h3>
						<h4><a class="col_1" href="#">Nulla Quis Sem</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
					<div class="col-sm-3">
					  <div class="list_2i clearfix mgt-center">
					    <a href="#"><img src="admin/_assets/img/product (14).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
						<h3><i class=""></i> $836</h3>
						<h4><a class="col_1" href="#">Vestibulum Lacinia</a></h4>
						<h6>Product Code: 12LDSJECR03</h6>
					  </div>
					</div>
                </div>
            </div>
        </div>
	 <div class="feature_2_last text-center clearfix">
            <div class="col-sm-12">
                <!-- Controls -->
                <div class="controls">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example_2" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example_2" data-slide="next"></a>
                </div>
            </div>
        </div>
   </div>
  </div>
 </div>
</section>

<section id="collection_o">
 <div class="container">
  <div class="row">
   <div class="collect_1 clearfix">
    <div class="col-sm-8">
	 <div class="collect_1l clearfix">
	  <div class="col-sm-5 space_all">
	   <div class="collect_1ll clearfix">
	    <h4 class="mgt col_1">Trending Product</h4>
		<h3>Maybe You’ve Earned it</h3>
		<h5><a class="button_1 mgt" href="#"> Shop Now</a></h5>
	   </div>
	  </div>
	  <div class="col-sm-7 space_right">
	   <div class="collect_1lr clearfix">
	    <a href="#">  <img src="admin/_assets/img/product (15).jpg" class="iw" alt="abc" width="300px" height="250px"></a>
	   </div>
	  </div>
	 </div>
	</div>
    <div class="col-sm-4">
	 <div class="collect_1ln clearfix">
	 <img src="admin/_assets/img/product (16).jpg" class="iw" alt="abc" width="300px" height="250px">
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="list_last">
 <div class="container">
  <div class="row">
   <div class="price_1 text-center clearfix">
       <div class="col-sm-12">
	     <h3 class="mgt">The Rd Jewellers  <span class="col_1">Advantage</span></h3>
		<p>Explore our unique daily wear jewellery designs that reflect elegance and exclusivity.</p>
	   </div>
   </div>
   <div class="list_last_1 clearfix">
    <div class="col-sm-3 space_all">
	 <div class="list_last_1i text-center clearfix">
	  <span><i class="fa fa-thumbs-o-up"></i></span>
	  <h4><a href="#">Quality Jewelry</a></h4>
	  <hr>
	  <p>We are proud to realease the best products for our beloved customers.</p>
	  <h5 class="normal"><a class="button_1" href="#">READ MORE</a></h5>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="list_last_1i text-center clearfix">
	  <span><i class="fa fa-rocket"></i></span>
	  <h4><a href="#">Delivery</a></h4>
	  <hr>
	  <p>We are proud to realease the best products for our beloved customers.</p>
	  <h5 class="normal"><a class="button_1" href="#">READ MORE</a></h5>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="list_last_1i text-center clearfix">
	  <span><i class="fa fa-leaf"></i></span>
	  <h4><a href="#">Best Service</a></h4>
	  <hr>
	  <p>We are proud to realease the best products for our beloved customers.</p>
	  <h5 class="normal"><a class="button_1" href="#">READ MORE</a></h5>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="list_last_1i text-center clearfix">
	  <span><i class="fa fa-money"></i></span>
	  <h4><a href="#">Guarantee</a></h4>
	  <hr>
	  <p>We are proud to realease the best products for our beloved customers.</p>
	  <h5 class="normal"><a class="button_1" href="#">READ MORE</a></h5>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<?php } ?>
<?php } ?>
<?php include 'partials/footer.php'?>
	
<script type="text/javascript">
$(document).ready(function(){
	/*****Fixed Menu******/
	var secondaryNav = $('.cd-secondary-nav'),
	   secondaryNavTopPosition = secondaryNav.offset().top;
	   navbar_height = document.querySelector('.navbar').offsetHeight;
	   
		$(window).on('scroll', function(){
		    if($(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
				secondaryNav.addClass('is-fixed');	
				document.body.style.paddingTop = navbar_height + 'px';
				
			} else {
				secondaryNav.removeClass('is-fixed');
				document.body.style.paddingTop = '0'
			}
		});	
		
});
</script>

</body>
 
</html>
