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
					<li data-filter="development" class="filter"><a href="#">Development</a></li>
					<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
					<li data-filter="design" class="filter"><a href="#">Design</a></li>
				</ul>


				<div class="mix-grid">

					<div class="row mix design"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/6-min.jpg" data-plugin-options='{"type":"image"}'>
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
											<img class="img-responsive" src="assets/images/demo/mockups/600x399/8-min.jpg" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="800" height="533" alt="">
										</div>
										<div>
											<img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="800" height="533" alt="">
										</div>
									</div>
									<!-- /carousel -->

								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Nature Photography</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Development</a></li>
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix development"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/7-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/7-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Interior Design</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> Wood, Steel
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix photography"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/8-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/8-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Outdoor Art</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Development</a></li>
								<li><a href="#">Photography</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix design"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/9-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Animal Study</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Photography</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix photography"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/10-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Fashion Session</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Photography</a></li>
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix development"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/11-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Outdoor Photography</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Photography</a></li>
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix design"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/12-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Furniture Design</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix photography"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/13-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Futuristic Speakers</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix design"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/14-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Furniture Design</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Development</a></li>
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

							</div>

						</div><!-- /description -->

					</div><!-- /item -->


					<div class="row mix photography"><!-- item -->

						<div class="col-md-7"><!-- image -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/15-min.jpg" width="800" height="533" alt="">
								</figure>
							</div>
						</div><!-- /image -->
						
						<div class="col-md-5"><!-- description -->
							<h2>
								<a href="portfolio-single-slider.html">Wood Photography</a>
							</h2>
							<ul class="list-inline categories nomargin">
								<li><a href="#">Photography</a></li>
								<li><a href="#">Design</a></li>
							</ul>

							<div class="margin-top-30"><!-- description -->

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

								<ul class="list-unstyled">
									<li>
										<i class="fa fa-check"></i> 
										<strong>Technologies:</strong> PHP, Mysql, Redis
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Date:</strong> 29th June, 2015
									</li>
									<li>
										<i class="fa fa-check"></i> 
										<strong>Client:</strong> Lorem Company LLC
									</li>
								</ul>

								<a class="btn btn-lg btn-default btn-bordered size-15" href="portfolio-single-slider.html">PROJECT DETAIL</a>

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