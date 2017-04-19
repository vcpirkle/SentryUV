<?php
   chdir('../');
   include_once('includes/Config.php');  

   $wrapper = new Wrapper();
   $wrapper->setTitle('SentryUV');
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

         <h1>ABOUT US</h1>

         <!-- breadcrumbs -->
         <ol class="breadcrumb">
            <li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
            <li class="active">About Us</li>
         </ol><!-- /breadcrumbs -->

      </div>
   </section>
   <!-- /PAGE HEADER -->


   <!-- -->
   <section>
      <div class="container">
         
         <div class="row">
         
            <!-- LEFT -->
            <div class="col-md-9">

               <img class="pull-left" src="<?php echo Config::getBaseDir(); ?>assets/images/demo/smart-min.png" alt="" />
               
               <div class="heading-title">
                  <h2>Who We Are?</h2>
               </div>

               <p>Sentry UV, Inc. is a global provider of ultraviolet solutions. With the many different needs of our clients we supply operator-friendly, cost-efficient UV equipment to a wide variety of industries and back it up with unsurpassed customer service. We have the solution for your application and budget.</p>

               <p>We service a wide range of customers, including commercial Fracking water, swimming pools, public zoos, aquaculture & aquariums, and even global providers of farm-raised seafood. Regardless of size or influence, we can help design a UV solution for you.</p>



               <div class="row margin-top-60">

                  <div class="col-sm-6">
                     <div class="heading-title heading-border-bottom heading-color">
                        <h3>OUR CREED</h3>
                        <p><strong>TO GOD BE THE GLORY</strong> Sentry Ultraviolet, Inc. ("Sentry") sees its responsibilities to several segments of society. First and foremost honest and fair dealings will be the foundation on which we will build relationships.To the consumer: We pledge always high quality products. These products are to be of the best workmanship and priced fairly.</p>
                     </div>

                     <p><strong>To the distributors & retailers</strong>: We pledge high quality products sold at a fair price. Products they will not have to apologize for and products that they can make a reasonable and fair profit. Service and support for them and their customers and products that are proudly American made.</p>

                     <p><strong>To our employees</strong>: Fair compensation and job security to the best of our ability. Also according to ones involvement, talent, and initiative we will offer advancement. We realize it is people that make a company great. It is with this in mind we offer the above mentioned to assure said employee they are part of a team that cares.</p>

                     <p><strong>To our suppliers</strong>: Sentry wants and desires to promote a professional partnership with the suppliers who provide for our manufacturing needs. We are willing to pay a fair price for the products receive. It is our expectations to receive the highest quality product for a fair and reasonable price. A long lasting relationship, such as the one we share with our Distributors & retailers, is our ultimate goal for the relationship.</p>

                     <p><strong>To the community</strong>: Sentry will be a good company neighbor and corporate citizen. We plan to pay our fair share of local taxes as well as being involved in civic affairs. It is our intentions to provide good jobs and operate a safe and environmentally friendly work place.</p>

                     <p><strong>To the environment</strong>: Sentry feels the responsibility to build or maintain attractive buildings that will be compatible with the local environment. We desire to be a pollution sensitive manufacturer by helping to better the surroundings in which our buildings are located.</p>

                     <p><strong>To local, state, & federal government</strong>: Sentry pledges itself to be a responsible participant in government. We feel the need to provide leadership, if called upon. For the greatest Nation on earth and the Country that has given us the Free Enterprise system we pledge to be a loyal corporate citizen.</p>

                     <p>- Roy & Mark Underwood Founders of Sentry UV, Inc</p>
                     
                     
                  </div>

                  <div class="col-sm-6">
                     <div class="heading-title heading-border-bottom heading-color">
                        <h3>18 Years Experience</h3>
                        <p>our experience is all you need</p>
                     </div>

                     <p>Founded in 1995 by Roy & Mark UnderwoodSentry UV, Inc. is well established as one of the industry's leading ultraviolet manufacturing companies with excellent results in various UV sterilization applications.Roy Underwood, N.D. President of Sentry UV, Inc. ("Sentry") has studied under Dr. Bolton of Bolton Photosciences, Inc. IUVA continuing educational programs and others and continues to use Bolton's UVCal to confirm NSF and EPA science for Sentry reactors. Sentry has helped establish UV and its many applications, such as, chloramines destruction, improved air quality with a patent for the evaporator coil, where pathogens live and breed, to a patented process for sewage vents thus helping eliminate one of the main culprits of the "Sick Building Syndrome".</p>

                     <p>Reinventing our UV's to allow for a smaller foot print through factoring in reflectivity from highly polished stainless steel setting an industry standard for many. Making maintenance of our UV's easier with patented Quick Disconnects, thus allowing easy access to the quartz sleeves for cleaning and inspection and eliminating the need, in most applications, for a Manuel or Automated wiper system, plus Sentry's successful disinfection for slow flow rates to much faster flow rates. As the world and many industries are finding out about UV and its benefits, look for Sentry UV to continue to make this all natural very GREEN science available for new applications. By setting precedence for performance, reliability, and affordability you can always rely on Sentry Ultraviolet products.</p>

                     <p>Disinfection with Successful ResultsRoy Underwood/Sentry has worked with NASA to Koi Ponds to importers of tropical fish to Bass Pro shops and Zoos and also as one of the first and largest providers to the commercial pool industry. Helping many industries achieve safe water and air with all natural GREEN UV to disinfect potential pathogens and chemicals. The vision at Sentry does not stop here; we are very focused and expect to show how UV can be used for future uses.</p>

                  </div>

               </div>

            </div>
            <!-- /LEFT -->

            <!-- RIGHT -->
            <div class="col-md-3">

               <div class="box-static box-border-top margin-bottom-60">
                  <div class="box-title">
                     <h4>We can deal with</h4>
                  </div>
                  <ul class="list-unstyled list-icons padding-15 nopadding-bottom">
                     <li class="margin-bottom-20">
                        <i class="fa fa-check text-success size-18"></i> 
                        <span class="block bold size-18">Fracking water</span>
                        <small>lorem ipsum dolor sit amet</small>
                     </li>
                     <li class="margin-bottom-20">
                        <i class="fa fa-check text-success size-18"></i> 
                        <span class="block bold size-18">Swimming Pools</span>
                        <small>lorem ipsum dolor sit amet</small>
                     </li>
                     <li class="margin-bottom-20">
                        <i class="fa fa-check text-success size-18"></i> 
                        <span class="block bold size-18">Public Pools</span>
                        <small>lorem ipsum dolor sit amet</small>
                     </li>
                     <li class="margin-bottom-20">
                        <i class="fa fa-check text-success size-18"></i> 
                        <span class="block bold size-18">Aquariums</span>
                        <small>lorem ipsum dolor sit amet</small>
                     </li>
                  </ul>

                  <hr />

                  <p class="text-center size-11 margin-bottom-10">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis.</p>
               </div>

               <!-- FACEBOOK -->
               <iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fstepofweb&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>


               <hr />


               <!-- SOCIAL ICONS -->
               <div class="hidden-xs text-center">
                  <a href="#" class="social-icon social-icon-border social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                     <i class="icon-facebook"></i>
                     <i class="icon-facebook"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-border social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                     <i class="icon-twitter"></i>
                     <i class="icon-twitter"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-border social-gplus" data-toggle="tooltip" data-placement="top" title="Google plus">
                     <i class="icon-gplus"></i>
                     <i class="icon-gplus"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-border social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
                     <i class="icon-linkedin"></i>
                     <i class="icon-linkedin"></i>
                  </a>
               </div>


            </div>
            <!-- /RIGHT -->

         </div>
         
      </div>
   </section>
   <!-- / -->

	<!-- Member -->
	<section class="nopadding">
		
		<div class="row nomargin">
		
			<!-- LEFT -->
			<div class="col-md-6 col-sm-6 nopadding nomargin">

				<img class="img-responsive" src="../assets/images/demo/people/1200x800/roy_underwood.jpg" alt="image" />

			</div>

			<!-- RIGHT -->
			<div class="col-md-6 col-sm-6 nopadding nomargin">
			
				<div class="padding-40">
		
					
					<cite style="margin-bottom: 32px; display: block;">
						<h2 style="margin-bottom: 0;">Roy Underwood</h2>
						<span>President – Sentry UV</span>
					</cite>
					
					<p>Roy is Founder and President of Sentry UV Inc. He founded the company in 1995 and is responsible for the products’ unique reactor designs and ongoing Research & Development. </p>


					<div class="row margin-top-60">
						
						<div class="col-md-6 col-sm-6">
							<p class="font-lato size-18">An inventor with several patents, he was part of the team that developed the Space Station water recovery filtration system. He holds an N.D. degree in natural sciences and continues to help Sentry UV, Inc. be a leader in the field of ultraviolet light technology.</p>
						</div>

						<!-- skills -->
						<div class="col-md-6 col-sm-6">

							<h5 class="nomargin"><span class="pull-right">90%</span>Research & Development</h5>
							<div class="progress progress-xs"><!-- progress bar -->
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; min-width: 2em;"></div>
							</div><!-- /progress bar -->

							<h5 class="nomargin"><span class="pull-right">98%</span>Ultraviolet Light Technology</h5>
							<div class="progress progress-xs"><!-- progress bar -->
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%; min-width: 2em;"></div>
							</div><!-- /progress bar -->

						</div>
						<!-- skills -->

					</div>
					
					<hr />

					<!-- social icons -->
					<div class="text-center">

						<a href="#" class="social-icon social-icon-transparent social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon social-icon-transparent social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon social-icon-transparent social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
					
					</div>
					<!-- /social icons -->

					</div>


				</div>
			</div>

		</div>
		
	</section>
	<!-- /Member -->

	<!-- Member -->
	<section class="nopadding">
		
		<div class="row nomargin">

			<!-- RIGHT -->
			<div class="col-md-6 col-sm-6 nopadding nomargin">
			
				<div class="padding-40">
		
					<cite style="margin-bottom: 32px; display: block;">
						<h2 style="margin-bottom: 0;">Mark Underwood</h2>
						<span>General Manager – Sentry UV</span>
					</cite>
					<p>Mark is Co-Founder and General Manager of Sentry UV Inc., and is responsible for production and development. Mark is married with a daughter and son and lives in Atlanta, Georgia.</p>

					<div class="row margin-top-60">
						
						<div class="col-md-6 col-sm-6">
							<p class="font-lato size-18">He has over 20 years of experience in ultraviolet technologies, and has been involved in the commercial pool industry since 2004.</p>
						</div>

						<!-- skills -->
						<div class="col-md-6 col-sm-6">

							<h5 class="nomargin"><span class="pull-right">94%</span>Production & Development</h5>
							<div class="progress progress-xs"><!-- progress bar -->
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 94%; min-width: 2em;"></div>
							</div><!-- /progress bar -->

							<h5 class="nomargin"><span class="pull-right">88%</span>Commercial Pool Industry</h5>
							<div class="progress progress-xs"><!-- progress bar -->
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
							</div><!-- /progress bar -->

						</div>
						<!-- skills -->

					</div>
					
					<hr />

					<!-- social icons -->
					<div class="text-center">

						<a href="#" class="social-icon social-icon-transparent social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon social-icon-transparent social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon social-icon-transparent social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
					
					</div>
					<!-- /social icons -->


				</div>
			</div>

		
			<!-- LEFT -->
			<div class="col-md-6 col-sm-6 nopadding nomargin">

				<img class="img-responsive" src="../assets/images/demo/people/1200x800/mark_underwood.jpg" alt="image" />

			</div>

		</div>
		
	</section>
	<!-- /Member -->

<?php 
         
$wrapper->writeFooter();
?>