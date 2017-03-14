<?php 
   chdir('../../');
   include_once('includes/Config.php');  
   
   $wrapper = new ConsoleWrapper();
   $wrapper->setTitle('Console - Home -> '. (Config::getEnv() == 'dev' ? 'Dev' : 'Prod'));
   
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
				<h4>Home Page</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
					<li>Home Page</li>
				</ol>
			</div>
		</div>
	</div>
</div>
   
<div class="divide60"></div> 

<div class="container">
   <div class="tabs-container">
      <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> This is tab</a></li>
          <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">This is second tab</a></li>
      </ul>
      <div class="tab-content">
          <div id="tab-1" class="tab-pane active">

              <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                  existence in this spot, which was created for the bliss of souls like mine.</p>

              <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                  the present moment; and yet I feel that I never was a greater artist than now. When.</p>
          </div>
          <div id="tab-2" class="tab-pane">

              <strong>Donec quam felis</strong>

              <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                  and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

              <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                  sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>

          </div>
      </div>
   </div>
</div>

<div class="divide80"></div> 

<?php
   $wrapper->writeFooter();
?>
