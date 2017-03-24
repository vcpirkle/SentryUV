<?php 

class ConsoleWrapper {

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
		$this->page = strtolower( $tokens[ count($tokens)-1 ] );
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

    public function writeHeader() { 
      $session = Session::getSession();
      $user = $session->getUser(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title><?php echo $this->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Configuration::getBaseDir(); ?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Configuration::getBaseDir(); ?>Bootstrap/css/font-awesome.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo Configuration::getBaseDir(); ?>Bootstrap/assets/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<link href="<?php echo Configuration::getBaseDir(); ?>css/style.css" rel="stylesheet">
	<link href="<?php echo Configuration::getBaseDir(); ?>css/sky-forms.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<style type="text/css">
    
	#navbar-main { z-index: 2000; margin-bottom: 0; border-right: 0; }
	
	#navbar-main.affixed-top {
		// background: #24D8D8;
	}
	#navbar-main.affix {
		// background: #24D8D8;
		top: 0;
		left: 0;
		right: 0;
	}
	#navbar-main.affix-bottom {
		// background: #24D8D8; 
	}

	/* Not important */
	.footer {
		background: #eee;
		height: 500px;
	}
	
	.nav-wrapper
	{
		min-height:52px;
	}
    </style>

    
    <?php
		foreach($this->styles as $style) {
            print('	<link rel="stylesheet" type="text/css" href="'. $style. '" />'. "\n");
        }?>

  </head>

  <body<?php if($this->baseClass != '') { echo ' class="'. $this->baseClass. '"'; }?>>

    <!-- Fixed navbar -->
	<div class="nav-wrapper">
		<nav id="navbar-main" class="navbar navbar-default">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo Configuration::getBaseDir(); ?>" style="padding: 0px 15px;">
				<img alt="Brand" src="<?php echo Configuration::getBaseDir(); ?>images/logo_small.png" style="height: 58px; width: auto; display: inline;">
				<span class="hidden-xs">Tennessee Autorack</span>
			  </a>
			</div>
         <?php if($user && $user->isSystemAdmin() ) { ?>
         
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li <?php if($this->page == 'settings') print('class="active"'); ?> ><a href="<?php echo Configuration::getBaseDir(); ?>console/settings">Site Settings</a></li>
				<li <?php if($this->page == 'home') print('class="active"'); ?> ><a href="<?php echo Configuration::getBaseDir(); ?>console/home">Home Page</a></li>
				<li <?php if($this->page == 'about') print('class="active"'); ?> ><a href="<?php echo Configuration::getBaseDir(); ?>console/about">About Page</a></li>
				<li <?php if($this->page == 'services') print('class="active"'); ?> ><a href="<?php echo Configuration::getBaseDir(); ?>console/services">Services Page</a></li>
				<li <?php if($this->page == 'contact') print('class="active"'); ?> ><a href="<?php echo Configuration::getBaseDir(); ?>console/contact">Contact Page</a></li>
			  </ul>
			  <!--<ul class="nav navbar-nav navbar-right">
				<li><a href="../navbar/">Default</a></li>
				<li><a href="../navbar-static-top/">Static top</a></li>
				<li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
			  </ul>-->
			</div><!--/.nav-collapse -->
         
         <?php } ?>
         
		  </div>
		</nav>
    </div>
 <?php } 
    

	public function writeFooter() {
?>

<footer id="footer">
	<div class="container">

		<div class="row">
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>About assan</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
					</p>
					<ul class="list-inline footer-social">
						<li>
							<a href="#" class="social-icon si-dark si-gray-round si-colored-facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon si-dark si-gray-round si-colored-twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon si-dark si-gray-round si-colored-google-plus">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon si-dark si-gray-round si-colored-pinterest">
								<i class="fa fa-pinterest"></i>
								<i class="fa fa-pinterest"></i>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon si-dark si-gray-round si-colored-linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					</ul>
				</div>                        
			</div><!--footer col-->
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>Contact</h3>

					<ul class="list-unstyled contact">
						<li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> 634 Steam Plant Rd, Gallatin, TN 37066</p></li> 
						<li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <?php echo hide_email('jgaston00@gmail.com') ?></p></li>
						<li><p><strong><i class="fa fa-phone"></i> Phone:</strong> <?php echo hide_string('(615) 230-7393'); ?></p></li>
						<li><p><strong><i class="fa fa-print"></i> Fax:</strong> <?php echo hide_string('(615) 230-7392'); ?></p></li>
					</ul>
				</div>                        
			</div><!--footer col-->
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>Featured Work</h3>
					<!--<ul class="list-inline f2-work">
						<li><a href="portfolio-single.html"><img src="img/img-1.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-2.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-3.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-4.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-5.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-6.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-7.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-8.jpg" class="img-responsive" alt=""></a></li>
						<li><a href="portfolio-single.html"><img src="img/img-9.jpg" class="img-responsive" alt=""></a></li>
					</ul>-->
				</div>                        
			</div><!--footer col-->
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>Career</h3>
					<p>
						Looking for work and have a can do attitude?  Send us your resume and get started with a great future.
					</p>
					<form role="form" class="subscribe-form">
						<span class="input-group-btn">
								<button class="btn  btn-theme-dark btn-lg" type="submit">Career Oportunites</button>
							</span>
					</form>
				</div>                        
			</div><!--footer col-->

		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="footer-btm">
					<span>©2017. Tennessee Autorack LLC</span>
				</div>
			</div>
		</div>
	</div>
</footer>
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Configuration::getBaseDir(); ?>js/jquery.min.js"></script>
    <script src="<?php echo Configuration::getBaseDir(); ?>Bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Configuration::getBaseDir(); ?>js/jquery-ui.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo Configuration::getBaseDir(); ?>Bootstrap/assets/ie10-viewport-bug-workaround.js"></script>
    
	<script>
    
      $(function() {
         
         var affixElement = '#navbar-main';

            $(affixElement).affix({
              offset: {
                // Distance of between element and top page
                top: function () {
                  return (this.top = $(affixElement).offset().top)
                },
                // when start #footer 
                bottom: function () { 
                  return (this.bottom = $('#footer').outerHeight(true))
                }
              }
            });
      });
    
    </script>
	
    <?php
        foreach($this->scripts as $script) {
            print('      <script type="text/javascript" src="'. $script. '"></script>'. "\n");
        } ?>
  </body>
</html>
<?php
    }
}
?>