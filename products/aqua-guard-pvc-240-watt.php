<?php
   chdir('../');
   include_once('includes/Config.php');  

   $wrapper = new Wrapper();
   $wrapper->setTitle('SentryUV - Products');
	$wrapper->addScript(Config::getBaseDir(). '/products/products.js');
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
			<section class="page-header page-header-xs">
				<div class="container">

					<h1>SentryUV Aqua Guard&trade; PVC 240</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
						<li><a href="../">Products</a></li>
						<li class="active">SentryUV Aqua Guard&trade; PVC 240</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
					
						<!-- IMAGE -->
						<div class="col-lg-4 col-sm-4">
							
							<div class="thumbnail relative margin-bottom-3">

								<!-- 
									IMAGE ZOOM 
									
									data-mode="mouseover|grab|click|toggle"
								-->
								<figure id="zoom-primary" class="zoom" data-mode="mouseover">
									<!-- 
										zoom buttton
										
										positions available:
											.bottom-right
											.bottom-left
											.top-right
											.top-left
									-->
									<a class="lightbox bottom-right" href="../assets/images/products/aqua-guard-pvc-240-watt.png" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

									<!-- 
										image 
										
										Extra: add .image-bw class to force black and white!
									-->
									<img class="img-responsive" src="../assets/images/products/aqua-guard-pvc-240-watt.png" width="800" height="533" alt="SentryUV Aqua Guard&trade; PVC 240 WATT" />
								</figure>

							</div>

							<!-- Thumbnails (required height:100px) -->
							<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
								<a class="thumbnail active" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-pvc-240-watt.png">
									<img src="../assets/images/products/aqua-guard-pvc-240-watt.png" height="100" alt="" />
								</a>
							</div>
							<!-- /Thumbnails -->

						</div>
						<!-- /IMAGE -->

						<!-- ITEM DESC -->
						<div class="col-lg-5 col-sm-8">



							<div class="clearfix margin-bottom-30">
								<span class="pull-right text-success"><i class="fa fa-check"></i> In Stock</span>
								<!--
								<span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
								-->

								<strong>SKU:</strong> SAG240-APVC
							</div>


							<!-- short description -->
							<p>Designed to treat swimming pool and spa's with flows of up to 175 gallons per minute. The SAG240-APVC is your answer to cryptosporidium control and chloramines destruction in commercial swimming pools and spa's and other applications. (see below).The SAG 240-APVC uses low pressure high output amalgam lamp technology to achieve a 4 log reduction for cryptosporidium and other similar pathogens in water. The SAG240-APVC is designed with a unique quick disconnect that allows for easy access to lamps and sleeves while taking up limited space in an in-line system. This provides a significant advantage for those applications where space is limited and allows it to fit in most retrofit locations either mounted vertically or horizontally.</p>
							<!-- /short description -->


						</div>
						<!-- /ITEM DESC -->

						<!-- INFO -->
						<div class="col-sm-4 col-md-3">

							<h4 class="size-18">
								<i class="fa fa-paper-plane-o"></i> 
								FREE SHIPPING
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla.</p>

							<h4 class="size-18">
								<i class="fa fa-clock-o"></i>
								30 DAYS MONEY BACK
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla.</p>

							<h4 class="size-18">
								<i class="fa fa-users"></i> 
								CUSTOMER SUPPORT
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla.</p>

							<hr>

							<p class="size-11">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
							</p>
						</div>
						<!-- /INFO -->

					</div>



					<ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
						<li role="presentation" class=" description active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
						<li role="presentation"><a class="specs" href="#specs" role="tab" data-toggle="tab">Specifications</a></li>
					</ul>


					<div class="tab-content padding-top-20">

						<!-- DESCRIPTION -->
						<div role="tabpanel" class="tab-pane fade in active" id="description">
							
							<p>The SAG240-APVC offers additional killing power due to a highly polished and reflective interior 316L stainless steel lining.  A science we have used for 20 plus years. This new reactor design allows for our newly designed multiple wave length lamps that will perform at maximum 254nm and 185nm in water temps up to 130 degrees F. These new lamps outlast regular low pressure lamps by 4,000 hours and medium pressure lamps by 7,000 hours.</p>

							<p>There is no need for expensive automated wipers on our SAG240-APVC as our Patented Quick Disconnect allows access to sleeves in seconds for complete and thorough cleaning by even wiping several sleeves in just minutes. Have peace of mind knowing that the sleeves are actually clean. Much less than medium pressure, longer lasting and better built than low cost PVC systems. The SAG240-APVC is designed and built to work in freshwater and saltwater pools, fracking water, low-flow sewage, fountains, spas, ponds, zoos, aquariums, and many other applications. Call to discuss your needs.</p>

							<p>Technical Specifications > Watts240</p>

							<p>Liner > 316-L stainless steel to give reflection and to protect the PVC</p>

							<p>Flow Rate (gpm) > ~175 gallons per minute</p>
						</div>
						
						<!-- SPECIFICATIONS -->
						<div role="tabpanel" class="tab-pane fade" id="specs">
							<div class="table-responsive">
								<iframe id="frameSpecs" style="width: 100%; height: 600px;" pdf-url="sag240-apvc_specifications.pdf"></iframe>
							</div>
						</div>
						

					</div>


					<hr class="margin-top-80 margin-bottom-80" />
					
				</div>
			</section>
			<!-- / -->

<?php 
         
$wrapper->writeFooter();
?>