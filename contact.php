<?php include 'partials/header.php'?>
<?php include 'config/db_connection.php' ?>
<link href="css/contact.css" rel="stylesheet">
	
<section id="center" class="clearfix center_prod">
<div class="container">
 <div class="row">
   <div class="center_prod_1 clearfix">
    <div class="col-sm-12">
	 <h6 class="mgt col_1 normal"><a href="#">Home</a>  <i style="font-size:14px; margin-left:5px; margin-right:5px;" class="fa fa-chevron-right"></i>   Contact Us</h6>
	</div>
   </div>
 </div>
</div>
</section>

<section id="contact">
 <div class="container">
  <div class="row">
   <div class="contact_1 clearfix">
    <div class="col-sm-6">
	 <div class="contact_1l clearfix">
	  <h1 class="mgt">How to find Us?</h1>
	  <p>A professional babysitter referral service. Created by moms for moms. sollicitudin, lorem quis bibendum dis.</p><br>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="contact_1r text-center clearfix">
	  <h1 class="mgt col_1">Get in Touch!</h1>
	  <input class="form-control" placeholder="Your Name" type="text">
	  <input class="form-control" placeholder="Your Name" type="text">
	  <textarea class="form-control form_1" placeholder="Your Comment"></textarea>
	  <h4><a class="button_1" href="#">Submit</a></h4>
	 </div> 
	</div>
   </div>
  </div>
 </div>
</section>

<section id="contact_us">
 <div class="container">
  <div class="row">
   <div class="contact_us_1 clearfix">
    <div class="col-sm-4">
	 <div class="contact_us_1l clearfix">
	  <h3 class="mgt">New York Office</h3>
	  <h5><a href="#"><i class="fa fa-phone col_1"></i> (123) 456-789</a></h5>
	  <h5><a href="#"><i class="fa fa-envelope col_1"></i> info@gmail.com</a></h5>
	  <h5><a href="#"><i class="fa fa-map-marker col_1"></i> 292 Main Eollins Street</a></h5>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_us_1l clearfix">
	  <h3 class="mgt">London Office</h3>
	  <h5><a href="#"><i class="fa fa-phone col_1"></i> (123) 456-789</a></h5>
	  <h5><a href="#"><i class="fa fa-envelope col_1"></i> info@gmail.com</a></h5>
	  <h5><a href="#"><i class="fa fa-map-marker col_1"></i> 292 Main Eollins Street</a></h5>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="contact_us_1l clearfix">
	  <h3 class="mgt">India Office</h3>
	  <h5><a href="#"><i class="fa fa-phone col_1"></i> (123) 456-789</a></h5>
	  <h5><a href="#"><i class="fa fa-envelope col_1"></i> info@gmail.com</a></h5>
	  <h5><a href="#"><i class="fa fa-map-marker col_1"></i> 292 Main Eollins Street</a></h5>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

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
