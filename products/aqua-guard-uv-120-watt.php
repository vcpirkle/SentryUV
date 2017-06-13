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

					<h1>SentryUV Aqua Guard&trade; UV 120</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
						<li><a href="../">Products</a></li>
						<li class="active">SentryUV Aqua Guard&trade; UV 120</li>
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
									<a class="lightbox bottom-right" href="../assets/images/products/aqua-guard-uv-120-watt.jpg" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

									<!-- 
										image 
										
										Extra: add .image-bw class to force black and white!
									-->
									<img class="img-responsive" src="../assets/images/products/aqua-guard-uv-120-watt.jpg" width="800" height="533" alt="SentryUV Aqua Guard&trade; UV 120 WATT" />
								</figure>

							</div>

							<!-- Thumbnails (required height:100px) -->
							<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
								<a class="thumbnail active" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
								</a>
								<a class="thumbnail" href="../assets/images/products/aqua-guard-uv-120-watt.jpg">
									<img src="../assets/images/products/aqua-guard-uv-120-watt.jpg" height="100" alt="" />
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

								<strong>SKU:</strong> SAG120-A
							</div>


							<!-- short description -->
							<p>Designed to treat single pass flows up to 73,440 gallons per day. The SAG120-A can effectively disinfect water for drinking, fracking,  pools, larger spas, small sewage treatment, recovery water, irrigation water, and other commercial applications.The SAG120-A uses low pressure high output Amalgam lamp technology to achieve a 4 log reduction for Crytosporidum and other similar pathogens in water. The SAG120-A is designed with a double seal on sleeve unique quick disconnect that allows for easy access and sleeve inspection to lamps and sleeves while taking up very limited space as an in-line system. This provides a significant advantage for those applications where there is limited space. The SAG120-A easily retrofits most any application.</p>
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

							<p>The SAG120-A also offers additional killing power due to the highly polished (reflective) interior wall of the reactor. A science we have used for 20 plus years. This new reactor design allows the best benefit ever with our newly designed multiple wave length lamps that will perform at maximum 254nm and 185nm in water temps up to 130 degrees. These new lamps out last regular low pressure lamps by 4000 hours and medium pressure lamps by 7000 hours. Also puts out #0% more 254nm than medium pressure systems.</p>

							<p>There is no need for expensive automated wipers on our SAG120-A as our Patented Quick Disconnect allows access and inspection of sleeves in seconds for complete and thorough cleaning and sleeve inspection and even wiping several sleeves in just minutes. Have peace of mind knowing that the sleeves are actually clean. Much less than medium pressure, longer lasting and better built than low cost PVC systems. The SAG120-A is designed and built to work in freshwater and saltwater pools, fracking water, low-flow sewage, fountains, spas, ponds, zoos, aquariums, and many other applications. Call to discuss your needs.</p>

							<p>Technical Specifications > Watts120</p>

							<p>Liner > 316-L stainless steel</p>

							<p>Flow Rate (gpm) > ~45 gallons per minute</p>

							<p>Flow Rate (daily) > 73,440 gallons per day</p>
						</div>
						
						<!-- SPECIFICATIONS -->
						<div role="tabpanel" class="tab-pane fade" id="specs">
							<div class="table-responsive">
								<iframe id="frameSpecs" style="width: 100%; height: 600px;" pdf-url="sag120-a_specifications.pdf"></iframe>
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