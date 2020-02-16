<?php
include"header1.php";

$i=1;
?>
	<!-- Main Banner Starts -->
		<div class="main-banner">
			<img src="images/banners/banner-img3.jpg" alt="Banner Image" class="img-responsive">
		</div>
	<!-- Main Banner Ends -->
	<!-- Main Container Starts -->
		<div class="container main-container text-center-xs">
			<h1 class="text-spl-color">Gallery</h1>
		
		<!-- Gallery Grid Starts -->
		
		<ul class="row list-unstyled" id="gallery-grid">
                          	<?php for($i=1;$i<71;$i++){ ?>
		<!-- Gallery Item #1 Starts -->
				<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid-item" data-groups='["all", "dogs", "birds"]'>
					<div class="hover-content">
						<a href="images/gallery/thumb/<?php echo $i ?>.jpg">
							<img src="images/gallery/thumb/<?php echo $i; ?>.jpg" alt="Gallery Image 1" class="img-responsive img-center-xs animation-1">
							<div class="overlay animation">
								<i class="fa fa-search-plus"></i>
							</div>
						</a>
					</div>
				</li>
			<!-- Gallery Item #1 Ends -->
		<?php }?>
		
			</ul>
		<!-- Gallery Grid Ends -->
		</div>
	<!-- Main Container Ends -->
	<!-- Footer Starts -->
		<?php
		include"footer.php";
		?>
		
		
		