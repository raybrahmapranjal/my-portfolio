


<div id="portfolio">
		<div class="title">
			<div class="container">
			<section class="cbp-so-section">
				<div class="sixteen columns cbp-so-side cbp-so-side-left">
					<h1><strong><span>My Projects</span></strong></h1>
					
				</div>
				
			</section>
			</div>
		</div>
		<div class="background-pat-last">
		<div class="container">
			<div class="fil">	
				<div class="sixteen columns">
					<div id="portfolio-filter">
						<ul id="filter" class="port">
							<li><a href="#" class="current" data-filter="*" data-hover="Show All">Show all</a></li>
							<li><a href="#" data-filter=".photography" data-hover="photography">Android</a></li>
							<!-- <li><a href="#" data-filter=".illustration" data-hover="illustration">logo design</a></li> -->
							<!-- <li><a href="#" data-filter=".motion-graphics" data-hover="motion graphics">graphics</a></li> -->
							<li><a href="#" data-filter=".web-design" data-hover="web design">web design</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
			
		<div class="container">
			
		<div class="portfolio-isotope">
				<?php
						$readAbouts = $crud->Read("abouts","1"); 
				if($readAbouts) {
				    foreach($readAbouts as $cKey) {
				        $cat = $cKey['category'];

				        if($cat == "ANDROID APP") {
				            $cat = "photography";
				        } elseif ($cat == "WEB DESIGN") {
				            $cat = "web-design";
				        }
				?>
			
			<div class="box one-third column illustration  <?php echo $cat; ?>">
				<div class="gallery-item">
					<!-- <a class='iframe group1'  href="myproject.php?abouts_id=<?php echo $cKey['abouts_id']?>" title=""> -->
						<a   href="myproject.php?abouts_id=<?php echo $cKey['abouts_id']?>" title="">
						<!-- <a   href="javascript:void(0)" title=""> -->
						<div class="gallery-item-mask">
							<img src="admin/image/<?php echo $cKey['image1']; ?>" alt="" />
							
						
							<h6><?php echo $cKey['category']; ?></h6>
						
						</div>	
					</a>
				</div>
			</div>
			<?php }}?>
			
		</div>		
	</div>

	</div>	
	</div>

