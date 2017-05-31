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

					<h1>SentryUV Aqua Guard&trade; PVC 240 WATT</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
						<li class="active">SentryUV Aqua Guard&trade; PVC 240 WATT</li>
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

							<!-- buttons -->
							<div class="pull-right">
								<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
								<a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
								<a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
							</div>
							<!-- /buttons -->

							<!-- price -->
							<div class="shop-item-price">
								<span class="line-through nopadding-left">$98.00</span>
								$78.00
							</div>
							<!-- /price -->

							<hr />

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


							<!-- countdown -->
							<div class="text-center">
								<h5>Limited Offer</h5>
								<div class="countdown" data-from="January 31, 2018 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
							</div>
							<!-- /countdown -->


							<hr />

							<!-- FORM -->
							<form class="clearfix form-inline nomargin" method="get" action="shop-cart.html">
								<input type="hidden" name="product_id" value="1" />

								<button class="btn btn-primary pull-left product-add-cart noradius">ADD TO CART</button>
							
							</form>
							<!-- /FORM -->


							<hr />

							<!-- Share -->
							<div class="pull-right">

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

							</div>
							<!-- /Share -->


							<!-- rating -->
							<div class="rating rating-4 size-13 margin-top-10 width-100"><!-- rating-0 ... rating-5 --></div>
							<!-- /rating -->

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
						<li role="presentation"><a class="reviews" href="#reviews" role="tab" data-toggle="tab">Reviews (2)</a></li>
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
						
						<!-- REVIEWS -->
						<div role="tabpanel" class="tab-pane fade" id="reviews">
							<!-- REVIEW ITEM -->
							<div class="block margin-bottom-60">

								<span cass="user-avatar"><!-- user-avatar -->
									<img class="pull-left media-object" src="assets/images/avatar2.jpg" width="64" height="64" alt="">
								</span>

								<div class="media-body">
									<h4 class="media-heading size-14">
										John Doe &ndash; 
										<span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
										<span class="size-14 text-muted"><!-- stars -->
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</span>
									</h4>
									
									<p>
										Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
									</p>

								</div>

							</div>
							<!-- /REVIEW ITEM -->

							<!-- REVIEW ITEM -->
							<div class="block margin-bottom-60">

								<span class="user-avatar"><!-- user-avatar -->
									<img class="pull-left media-object" src="assets/images/avatar2.jpg" width="64" height="64" alt="">
								</span>

								<div class="media-body">
									<h4 class="media-heading size-14">
										John Doe &ndash; 
										<span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
										<span class="size-14 text-muted"><!-- stars -->
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</span>
									</h4>
									
									<p>
										Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
									</p>

								</div>

							</div>
							<!-- /REVIEW ITEM -->


							<!-- REVIEW FORM -->
							<h4 class="page-header margin-bottom-40">ADD A REVIEW</h4>
							<form method="post" action="#" id="form">
								
								<div class="row margin-bottom-10">
									
									<div class="col-md-6 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>
									
									<div class="col-md-6">
										<!-- Email -->
										<input type="email" name="email" id="email" class="form-control" placeholder="Email *" maxlength="100" required="">
									</div>
									
								</div>
								
								<!-- Comment -->
								<div class="margin-bottom-30">
									<textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment" maxlength="1000"></textarea>
								</div>

								<!-- Stars -->
								<div class="product-star-vote clearfix">

									<label class="radio pull-left">
										<input type="radio" name="product-review-vote" value="1" />
										<i></i> 1 Star
									</label>

									<label class="radio pull-left">
										<input type="radio" name="product-review-vote" value="2" />
										<i></i> 2 Stars
									</label>

									<label class="radio pull-left">
										<input type="radio" name="product-review-vote" value="3" />
										<i></i> 3 Stars
									</label>

									<label class="radio pull-left">
										<input type="radio" name="product-review-vote" value="4" />
										<i></i> 4 Stars
									</label>

									<label class="radio pull-left">
										<input type="radio" name="product-review-vote" value="5" />
										<i></i> 5 Stars
									</label>

								</div>

								<!-- Send Button -->
								<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Send Review</button>
								
							</form>
							<!-- /REVIEW FORM -->

						</div>
					</div>


					<hr class="margin-top-80 margin-bottom-80" />
					
				</div>
			</section>
			<!-- / -->

<?php 
         
$wrapper->writeFooter();
?>