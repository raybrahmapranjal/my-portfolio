<?php
  if(!file_exists("counter.txt")){
    $counter = 0;
    file_put_contents("counter.txt", $counter);
  } else {
    $counter = (int)file_get_contents("counter.txt");
    $counter++;
    file_put_contents("counter.txt", $counter);
  }
?>

<?php include("include/head.php"); ?>

<body class="preload">

	
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>	

	<!-- Home
	================================================== -->	


		<?php include("include/navbar.php");?>



        <!-- hero section  -->
	<div id="home">	
		
		<div class="home-text">
			<div class="container">
				
			</div>
			<!-- <div class="container">
				<div class="sixteen columns">
					<div class="line"></div>
				</div>
			</div> -->
			<div class="container">
				<div class="sixteen columns">
					<div class="home-text-middle words">p r a n j a l</div>
				</div>
			</div>
			<!-- <div class="container">
				<div class="sixteen columns">
					<div class="line"></div>
				</div>
			</div> -->
			<div class="container">
				<div class="sixteen columns">
					<div class="home-text-bottom">Web developer</div>
					<div class="home-text-bottom">@</div>
					<img src="images/logo.png" style="width:120px; height:50px">
				</div>
			</div>

			
				<div class="sixteen columns">
					<div class="cl-effect-18">
						<ul class="link">
					         <!-- <a href="https://github.com/raybrahmapranjal"><li><i class="fab fa-facebook-f"></i></li></a> -->
					        <a href="https://www.linkedin.com/in/pranjal-brahma-ray-1a211926b/"> <li><i class="fab fa-linkedin-in"></i></li></a>
					        <a href="https://wa.me/8134000271" ><li><i class="fab fa-whatsapp"></i></li></a>
					        <a href="https://github.com/raybrahmapranjal"><li><i class="fab fa-github"></i></li></a>

					    </ul>
						
					

					<!-- <div class="containerButton">
						 <a href="#contact" class="btn">Hire me</a>
					</div> -->
				</div>
			</div>
			
			
		</div>
	
	
	</div>		

<div id="cbp-so-scroller" class="cbp-so-scroller">	
	

	
	<?php include("include/about.php");?>
		
	<?php include("include/skill.php");?>

	
	
	
	<?php include("include/services.php");?>
	<?php include("include/portfolio.php");?>

	

	

<!-- 
	<div id="parallax-4" class="parallax" style="background-image: url(images/parallax-4.jpg);">
		<div class="parallax-wrap"> 	
			<div class="container">
				<div class="sixteen columns">  
					<h5><span>Latest News</span></h5>         
				</div>
			</div>	
			<div id="blog" class="owl-carousel owl-theme">
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/1.jpg" alt="" /><div class="date"><p>July 28. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/2.jpg" alt="" /><div class="date"><p>July 25. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/3.jpg" alt="" /><div class="date"><p>July 23. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/4.jpg" alt="" /><div class="date"><p>July 19. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/5.jpg" alt="" /><div class="date"><p>July 18. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/6.jpg" alt="" /><div class="date"><p>July 14. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
				<div class="item">
					<a href="#"><div class="img-blog"><img src="images/blog/7.jpg" alt="" /><div class="date"><p>July 09. 2013</p></div></div></a>
					<h6>Post Title</h6>
					<p>Consectetur est quis mauris accumsan eleifend sit amet non neq. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur est quis mauris accumsan eleifend sit amet non neq. Vivamus vitae purus eros, nec ullamcorper risus.</p>
					<a class="link-blog" href="#">Read More</a>
				</div>
			</div>	
		</div>
	</div>	

 -->

	<?php include("include/footer.php");?>
</div>
	
	
	
	<!-- JAVASCRIPT
    ================================================== -->

      
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.lettering.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/cbpScroller.js"></script>
<script type="text/javascript" src="js/jquery.knob.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.typer.html"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/template.js"></script>  	  
<!-- End Document
================================================== -->
<!-- navbar -->
  <script src="js/index.js"></script>
  <!-- navbar -->

<!-- counter up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- counter up -->
<script>
  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });
  </script>
</body>


</html>