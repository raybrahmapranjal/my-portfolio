
<?php include("include/head.php"); ?>
<?php 

if (isset($_GET['abouts_id'])) {
   $abouts_id=$_GET['abouts_id'];
   $readAbouts = $crud->Read("abouts","`abouts_id`='$abouts_id'");
   // $readAbouts[0]['category'];
 

}
?>
<body class="preload">

	
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>	

	<!-- Home
	================================================== -->	


		

<nav id="nav">
	<div class="header-section">
            <!-- header logo  -->
            <div class="header-logo">
                <!-- <a href="#home" class="scroll" ><img alt='logo' src='images/logo1.png'></a> -->
                <h4><a href="index.php" >pranjal</a></h4>
            </div>
            <div class="containerButton">
						 <a href="#contact"  class="scroll btn ">Hire </a>

					</div>

            <!-- header navigation  -->
            <div class="header-nav">
                <div class="mobile-nav-bar" >
                    <i class="fa-solid fa-bars" id="mobile-nav-bar-icon"></i>
                </div>
                <ul class="header-nav-list" id="header-nav-list">
                    <li class="header-nav-tab ">
                        <a href="index.php" class="scroll">Home</a>
                    </li>
                    
                   
                    <span class="highlight" ></span>
                </ul>
                <div class="mode-change">
                    <i class="fa-solid fa-moon" id="mode-change"></i>
                </div>
            </div>
        </div>
   </nav>
						
       
	<div class="singleproject-top">	
	
		<div class="container">
		<?php 
                            if($readAbouts){
                              $title=$readAbouts[0]['category'];
                              $client=$readAbouts[0]['company'];
                              $description=$readAbouts[0]['vision'];
                              $link=$readAbouts[0]['link'];
                              $img=$readAbouts[0]['image1'];
                              $img2=$readAbouts[0]['image2'];
                              $img3=$readAbouts[0]['image3'];

                             ?>

			<div class="ten columns">
				<div id="slider">	
					<ul class="bxslider">
						<li><img src="admin/image/<?php echo $img;?>" alt=""/></li>
						<li><img src="admin/image/<?php echo $img2;?>" alt=""/></li>
						<li><img src="admin/image/<?php echo $img3;?>" alt=""/></li>
						<!-- <li><img src="images/gallery/2.jpg" alt=""/></li>
						<li><img src="images/gallery/3.jpg" alt=""/></li>
						<li><img src="images/gallery/4.jpg" alt=""/></li> -->
					</ul>
				</div>
			</div>
			<div class="six columns">
				<h3><?php echo $title;?></h3>	
				<p><strong>Client:</strong> <a href="javascript:void(0)"><?php echo $client;?></p>
				<!-- <p><strong>Place:</strong> Gangtok</p>
				<p><strong>State:</strong> Sikkim</p> -->
				
				<div class="btn-wrap">
					<p>
						<button onclick="openLivePreview('<?php echo $link; ?>')"> Live Preview</a></button>
					</p>
				</div>

			</div>

			
		</div>	

	</div>
		
	<div id="singleproject">
		<div class="container">
			<div class="singleproject1-body">	
				<div class="sixteen columns">
					<h4>Project Description</h4>
					<p><span class="dropcap-orange"></span><?php echo $description;?></p>
				</div>
			</div>
		</div>	
	</div>	
		<?php }?>
	
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

<!-- single project	   -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/singleproject1.js"></script>
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
 <script>
function openLivePreview(link) {
    window.location.href = "live.php?link=" + encodeURIComponent(link);
    // newTab.document.write('<iframe src="' + link + '" width="100%" height="100%"></iframe>');
    newTab.document.close();
}
</script>




</body>


</html>