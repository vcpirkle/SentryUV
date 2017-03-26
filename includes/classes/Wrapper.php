<?php 

class Wrapper {

   public $title;
   public $baseClass;
   public $styles;
   public $scripts;
   public $description;
   public $keywords;
   public $page;

   public function __construct() {
      $this->title = '';
      $this->baseClass = '';

      $this->scripts = array();
      $this->styles = array();

      $path = $_SERVER['REQUEST_URI'];
      $tokens = preg_split('#/#', $path, -1, PREG_SPLIT_NO_EMPTY);
      if( count($tokens) > 0 ) {
         $this->page = strtolower( $tokens[ count($tokens)-1 ] );
      }
      else {
         $this->page = '';
      }
   }

   public function setTitle($title) {
      $this->title = $title;
   }

   public function addScript($script) {
      $this->scripts[] = $script;
   }

   public function addStyle($style) {
      $this->styles[] = $style;
   }

   public function setBaseClass($baseClass) {
      $this->baseClass = ' '. $baseClass;
   }

   public function setDescription($description) {
      $this->description = $description;
   }

   public function setKeywords($keywords) {
      $this->keywords = $keywords;
   }


   /********************************************************************************
/*************************Write Header Function**********************************
/********************************************************************************/

   public function writeHeader() { 
      $session = Session::getSession();
      $user = $session->getUser(); ?>
      <!DOCTYPE html>
      <!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
      <!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
      <!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
      <head>
      <meta charset="utf-8" />
      <title><?php echo $this->title; ?></title>
      <meta name="keywords" content="<?php echo $this->keywords; ?>" />
      <meta name="description" content="<?php echo $this->description; ?>" />
      <meta name="Author" content="Victor Pirkle [www.victorpirkle.com]" />

      <!-- mobile settings -->
      <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
      <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

      <!-- WEB FONTS : use %7C instead of | (pipe) -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

      <!-- CORE CSS -->
      <link href="<?php echo Config::getBaseDir(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

      <!-- LAYER SLIDER -->
      <link href="<?php echo Config::getBaseDir(); ?>assets/plugins/slider.layerslider/css/layerslider.css" rel="stylesheet" type="text/css" />

      <!-- THEME CSS -->
      <link href="<?php echo Config::getBaseDir(); ?>assets/css/essentials.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo Config::getBaseDir(); ?>assets/css/layout.css" rel="stylesheet" type="text/css" />

      <!-- PAGE LEVEL SCRIPTS -->
      <link href="<?php echo Config::getBaseDir(); ?>assets/css/header-1.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo Config::getBaseDir(); ?>assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
      </head>

      <!--
      AVAILABLE BODY CLASSES:

      smoothscroll 			= create a browser smooth scroll
      enable-animation		= enable WOW animations

      bg-grey					= grey background
      grain-grey				= grey grain background
      grain-blue				= blue grain background
      grain-green				= green grain background
      grain-blue				= blue grain background
      grain-orange			= orange grain background
      grain-yellow			= yellow grain background

      boxed 					= boxed layout
      pattern1 ... patern11	= pattern background
      menu-vertical-hide		= hidden, open on click

      BACKGROUND IMAGE [together with .boxed class]
      data-background="assets/images/boxed_background/1.jpg"
      -->
      <body class="smoothscroll enable-animation">
      
      <!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY SENTRYUV?</h6>
						<p>We pledge high quality products sold at a fair price. Products they will not have to apologize for and products that they can make a reasonable and fair profit. Service and support for them and their customers and products that are proudly American made.</p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> 6767 Peachtree Industrial Blvd.<br>
                                         Suite G<br>
                                         Norcross, GA 30092</li>
							<li><b>Toll Free:</b> <?php echo hide_string('(866) 226-0820'); ?></li>
                     <li><b>Phone:</b> <?php echo hide_string('(706) 379-2670'); ?></li>        
							<li><b>Email:</b> <?php echo hide_email('royu@sentryuv.com') ?></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->

      <!-- wrapper -->
      <div id="wrapper"<?php print ($this->baseClass != '' ? ' class="' + $this->baseClass + '"' : ''); ?> >
      
         <!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
                  
                  <?php if($user->isSystemAdmin()) { ?>
                     <li class="text-welcome">Welcome to SentryUV, <strong><?php echo $user->getField('firstName'); ?> <?php echo $user->getField('lastName'); ?></strong></li>
                     <li><a href="logout">LOGOUT</a></li>
                  <?php } else { ?>
                     <li class="text-welcome">Welcome to SentryUV</li>
                     <li><a href="login">LOGIN</a></li>
                  <?php } ?>
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->
      
            <!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky shadow-after-3 clearfix">

				<!-- SEARCH HEADER -->
				<div class="search-box over-header">
					<a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

					<form action="page-search-result-1.html" method="get">
						<input type="text" class="form-control" placeholder="SEARCH" />
					</form>
				</div> 
				<!-- /SEARCH HEADER -->

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
							</li>
							<!-- /SEARCH -->

						</ul>
						<!-- /BUTTONS -->


						<!-- Logo -->
						<a class="logo pull-left" href="<?php echo Config::getBaseDir(); ?>">
							<img src="<?php echo Config::getBaseDir(); ?>assets/images/logo_dark.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- Home -->
										<a class="dropdown-toggle" href="<?php echo Config::getBaseDir(); ?>">
											HOME
										</a>
                           </li>
                           <li class="dropdown active"><!-- About -->
										<a class="dropdown-toggle" href="<?php echo Config::getBaseDir(); ?>about">
											ABOUT
										</a>
                           </li>
                           <li class="dropdown active"><!-- Products -->
										<a class="dropdown-toggle" href="<?php echo Config::getBaseDir(); ?>products">
											PRODUCTS
										</a>
                           </li>
                           <li class="dropdown active"><!-- Accessories -->
										<a class="dropdown-toggle" href="<?php echo Config::getBaseDir(); ?>accessories">
											ACCESSORIES
										</a>
                           </li>
                           <li class="dropdown active"><!-- Contact -->
										<a class="dropdown-toggle" href="<?php echo Config::getBaseDir(); ?>contact">
											CONTACT
										</a>
                           </li>
                           <li class="dropdown active"><!-- Resources -->
										<a class="dropdown-toggle" href="<?php echo Config::getBaseDir(); ?>resources">
                                 RESOURCES
										</a>
                           </li>
                        </ul>
							</nav>
                     
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


      <?php

      } 




   /********************************************************************************
/*************************Write Footer Function**********************************
/********************************************************************************/ 

   public function writeFooter() { ?>
      <!-- FOOTER -->
      <footer id="footer">
      <div class="container">

      <div class="row">

      <div class="col-md-3">
      <!-- Footer Logo -->
      <img class="footer-logo" src="<?php echo Config::getBaseDir(); ?>assets/images/logo-footer.png" alt="" />

      <!-- Small Description -->
      <p>Sentry UV, Inc. is a global provider of ultraviolet solutions.</p>

      <!-- Contact Address -->
      <address>
      <ul class="list-unstyled">
      <li class="footer-sprite address">
         6767 Peachtree Industrial Blvd.<br>
         Suite G<br>
         Norcross, GA 30092<br>
      </li>
      <li class="footer-sprite phone">
         Toll Free: <?php echo hide_string('(866) 226-0820'); ?><br>
         Phone: <?php echo hide_string('(706) 379-2670'); ?>
      </li>
      <li class="footer-sprite email">
         <?php echo hide_email('royu@sentryuv.com') ?>
      </li>
      </ul>
      </address>
      <!-- /Contact Address -->

      </div>

      <div class="col-md-3">

      <!-- Latest Blog Post -->
      <h4 class="letter-spacing-1">LATEST NEWS</h4>
      <ul class="footer-posts list-unstyled">
      <li>
      <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
      <small>29 June 2015</small>
      </li>
      <li>
      <a href="#">Nullam id dolor id nibh ultricies</a>
      <small>29 June 2015</small>
      </li>
      <li>
      <a href="#">Duis mollis, est non commodo luctus</a>
      <small>29 June 2015</small>
      </li>
      </ul>
      <!-- /Latest Blog Post -->

      </div>

      <div class="col-md-2">

      <!-- Links -->
      <h4 class="letter-spacing-1">EXPLORE SENTRYUV</h4>
      <ul class="footer-links list-unstyled">
      <li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
      <li><a href="<?php echo Config::getBaseDir(); ?>about">About Us</a></li>
      <li><a href="<?php echo Config::getBaseDir(); ?>products">Products</a></li>
      <li><a href="<?php echo Config::getBaseDir(); ?>accessories">Accessories</a></li>
      <li><a href="<?php echo Config::getBaseDir(); ?>contact">Contact Us</a></li>
      <li><a href="<?php echo Config::getBaseDir(); ?>resources">Resources</a></li>
      </ul>
      <!-- /Links -->

      </div>

      <div class="col-md-4">

      <!-- Newsletter Form -->
      <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
      <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

      <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
      <span class="input-group-btn">
      <button class="btn btn-success" type="submit">Subscribe</button>
      </span>
      </div>
      </form>
      <!-- /Newsletter Form -->

      <!-- Social Icons -->
      <div class="margin-top-20">
      <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

      <i class="icon-facebook"></i>
      <i class="icon-facebook"></i>
      </a>

      <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
      <i class="icon-twitter"></i>
      <i class="icon-twitter"></i>
      </a>

      <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
      <i class="icon-gplus"></i>
      <i class="icon-gplus"></i>
      </a>

      <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
      <i class="icon-linkedin"></i>
      <i class="icon-linkedin"></i>
      </a>

      <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
      <i class="icon-rss"></i>
      <i class="icon-rss"></i>
      </a>

      </div>
      <!-- /Social Icons -->

      </div>

      </div>

      </div>

      <div class="copyright">
      <div class="container">
      <ul class="pull-right nomargin list-inline mobile-block">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li>&bull;</li>
      <li><a href="#">Privacy</a></li>
      </ul>
      &copy; All Rights Reserved, Sentry UV, Inc.
      </div>
      </div>
      </footer>
      <!-- /FOOTER -->

      </div>
      <!-- /wrapper -->


      <!-- SCROLL TO TOP -->
      <a href="#" id="toTop"></a>


      <!-- PRELOADER -->
      <div id="preloader">
      <div class="inner">
      <span class="loader"></span>
      </div>
      </div><!-- /PRELOADER -->


      <!-- JAVASCRIPT FILES -->
      <script type="text/javascript">var plugin_path = '<?php echo Config::getBaseDir(); ?>assets/plugins/';</script>
      <script type="text/javascript" src="<?php echo Config::getBaseDir(); ?>assets/plugins/jquery/jquery-2.2.3.min.js"></script>

      <script type="text/javascript" src="<?php echo Config::getBaseDir(); ?>assets/js/scripts.js"></script>

      <!-- LAYER SLIDER -->
      <script type="text/javascript" src="<?php echo Config::getBaseDir(); ?>assets/plugins/slider.layerslider/js/layerslider_pack.js"></script>
      <script type="text/javascript" src="<?php echo Config::getBaseDir(); ?>assets/js/view/demo.layerslider_slider.js"></script>

      </body>
      </html>

      <?php
   }
}
?>