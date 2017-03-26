<?php
   chdir('../');
   include_once('includes/Config.php');  
   
   if(Config::getEnv() != 'dev') {
      header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
      header('Pragma: no-cache'); // HTTP 1.0.
      header('Expires: 0'); // Proxies.
   }

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
   <section class="page-header">
      <div class="container">

         <h1>LOGIN</h1>

         <!-- breadcrumbs -->
         <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Login</li>
         </ol><!-- /breadcrumbs -->

      </div>
   </section>
   <!-- /PAGE HEADER -->




   <!-- -->
   <section>
      <div class="container">
         
         <div class="row">

            <!-- LEFT TEXT -->
            <div class="col-md-5 col-md-offset-1">
               
               <h2 class="size-16">IMPORTANT INFORMATION</h2>
               <p class="text-muted">Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
               <p class="text-muted">Sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>

            </div>
            <!-- /LEFT TEXT -->


            <!-- LOGIN -->
            <div class="col-md-4">
            
               <h2 class="size-16">LOGIN</h2>

               <!-- login form -->
               <form method="post" action="#" autocomplete="off">
                  <div class="clearfix">
                     
                     <!-- Email -->
                     <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email" required="">
                     </div>
                     
                     <!-- Password -->
                     <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                     </div>
                        
                  </div>
                  
                  <div class="row">
                     
                     <div class="col-md-6 col-sm-6 col-xs-6">
                        
                        <!-- Inform Tip -->                                        
                        <div class="form-tip pt-20">
                           <a class="no-text-decoration size-13 margin-top-10 block" href="#">Forgot Password?</a>
                        </div>
                        
                     </div>
                     
                     <div class="col-md-6 col-sm-6 col-xs-6 text-right">

                        <button class="btn btn-primary">OK, LOG IN</button>

                     </div>
                     
                  </div>
                  
               </form>
               <!-- /login form -->

               <!-- ALERT -->
               <div class="alert alert-mini alert-danger margin-bottom-30">
                  <strong>Oh snap!</strong> Login Incorrect!
               </div><!-- /ALERT -->

            </div>
            <!-- /LOGIN -->

         </div>

         
      </div>
   </section>
   <!-- / -->


<?php 
         
$wrapper->writeFooter();
?>