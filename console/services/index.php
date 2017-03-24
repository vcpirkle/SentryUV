<?php 
   chdir('../../');
   include_once('includes/Config.php');  
   
   $wrapper = new ConsoleWrapper();
   $wrapper->setTitle('Console - Services -> '. (Config::getEnv() == 'dev' ? 'Dev' : 'Prod'));
   
   $session = Session::getSession();
   $user = $session->getUser();
   
   if(!$user || !$user->isSystemAdmin()) {
      header('Location: '. Config::getBaseDir(), true);
      exit();
   }
   
   $wrapper->writeHeader();

?>

<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4>Services Page</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
					<li>Services Page</li>
				</ol>
			</div>
		</div>
	</div>
</div>
   


<div class="divide60"></div> 

<?php
   $wrapper->writeFooter();
?>
