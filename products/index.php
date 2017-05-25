<?php
   chdir('../');
   include_once('includes/Config.php');  

   $wrapper = new Wrapper();
   $wrapper->setTitle('SentryUV - Products');
   $wrapper->writeHeader();
?>

   <!-- 
      PAGE HEADER 
      
      CLASSES:
         .page-header-xs	= 20px margins
         .page-header-md	= 50px margins
         .page-header-lg	= 80px margins
         .page-header-xlg= 130px margins
         .dark			= dark page header

         .shadow-before-1 	= shadow 1 header top
         .shadow-after-1 	= shadow 1 header bottom
         .shadow-before-2 	= shadow 2 header top
         .shadow-after-2 	= shadow 2 header bottom
         .shadow-before-3 	= shadow 3 header top
         .shadow-after-3 	= shadow 3 header bottom
   -->
   <section class="page-header page-header-lg parallax parallax-3" style="background-image:url('<?php echo Config::getBaseDir(); ?>assets/images/demo/vision-min.jpg')">
      <div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

      <div class="container">

         <h1>Products</h1>

         <!-- breadcrumbs -->
         <ol class="breadcrumb">
            <li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
            <li class="active">Products</li>
         </ol><!-- /breadcrumbs -->

      </div>
   </section>
   <!-- /PAGE HEADER -->


	<!-- -->
	<section>
		<div class="container">

			<div id="portfolio">

				<ul class="nav nav-pills mix-filter margin-bottom-60">
					<li data-filter="all" class="filter active"><a href="#">All</a></li>
					<li data-filter="pvc" class="filter"><a href="#">PVC</a></li>
					<li data-filter="uv" class="filter"><a href="#">UV</a></li>
				</ul>

				<div class="mix-grid">

					<div class="row mix pvc"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="../assets/images/products/aqua-guard-pvc-120-watt.png" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">SentryUV Aqua Guard&trade; PVC 120 WATT</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">SentryUV Aqua Guard&trade;</a></li>
								<li><a href="#">PVC</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Designed to treat swimming pool and spa's and many other applications with flows of up to 100 gallons per minute. The SAG120-APVC is your answer to cryptosporidium control and chloramines destruction in commercial swimming pools and spa's and other applications.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> high output amalgam lamp technology
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technical Specifications:</strong> 120 Watts
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Liner:</strong> 316-L stainless steel
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Flow Rate:</strong> (gpm) ~100 gallons per minute
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PRODUCT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix pvc"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="../assets/images/products/aqua-guard-pvc-120-watt.png" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">SentryUV Aqua Guard&trade; PVC 120 WATT</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">SentryUV Aqua Guard&trade;</a></li>
								<li><a href="#">PVC</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Designed to treat swimming pool and spa's and many other applications with flows of up to 100 gallons per minute. The SAG120-APVC is your answer to cryptosporidium control and chloramines destruction in commercial swimming pools and spa's and other applications.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> high output amalgam lamp technology
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technical Specifications:</strong> 120 Watts
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Liner:</strong> 316-L stainless steel
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Flow Rate:</strong> (gpm) ~100 gallons per minute
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PRODUCT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->
					
					
					<div class="row mix uv"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="../assets/images/products/aqua-guard-pvc-120-watt.png" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">SentryUV Aqua Guard&trade; PVC 120 WATT</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">SentryUV Aqua Guard&trade;</a></li>
								<li><a href="#">PVC</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Designed to treat swimming pool and spa's and many other applications with flows of up to 100 gallons per minute. The SAG120-APVC is your answer to cryptosporidium control and chloramines destruction in commercial swimming pools and spa's and other applications.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> high output amalgam lamp technology
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technical Specifications:</strong> 120 Watts
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Liner:</strong> 316-L stainless steel
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Flow Rate:</strong> (gpm) ~100 gallons per minute
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PRODUCT DETAIL</a>

							</div>

						</div> <!-- /description -->

					</div> <!-- /item -->
					
					
					<div class="row mix uv"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="../assets/images/products/aqua-guard-pvc-120-watt.png" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<!-- carousel -->
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-120-watt.png" width="800" height="533" alt="">
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">SentryUV Aqua Guard&trade; PVC 120 WATT</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">SentryUV Aqua Guard&trade;</a></li>
								<li><a href="#">PVC</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Designed to treat swimming pool and spa's and many other applications with flows of up to 100 gallons per minute. The SAG120-APVC is your answer to cryptosporidium control and chloramines destruction in commercial swimming pools and spa's and other applications.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> high output amalgam lamp technology
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technical Specifications:</strong> 120 Watts
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Liner:</strong> 316-L stainless steel
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Flow Rate:</strong> (gpm) ~100 gallons per minute
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PRODUCT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->

				</div>

			</div>
			
		</div>
	</section>
	<!-- / -->


<?php 
         
$wrapper->writeFooter();
?>