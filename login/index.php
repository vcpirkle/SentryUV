<?php
   chdir('../');
   include_once('includes/Config.php');  
   
   if(Config::getEnv() != 'dev') {
      header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
      header('Pragma: no-cache'); // HTTP 1.0.
      header('Expires: 0'); // Proxies.
   }

   $wrapper = new Wrapper();
   $wrapper->setTitle('SentryUV - Login');
   
   $session = Session::getSession();
   $user = $session->getUser();
   $loginSuccess = false;
   
   $isSubmit = isset($_POST['issubmit']) ? $_POST['issubmit'] : false;
   $email = '';
   if($isSubmit == '1') {
      $email = isset($_POST['email']) ? $_POST['email'] : '';
      $password = isset($_POST['password']) ? $_POST['password'] : '';
      if(User::login($email, $password)) {
         $loginSuccess = true;
      }
      
      $session = Session::getSession();
      $user = $session->getUser();
   }
   
   if($user && $user->isSystemAdmin()) {
      
      //TODO: Redirect to admin area
      
      header('Location: '. Config::getBaseDir() );
      exit();
   }
   
   $wrapper->writeHeader();
?>


   <script type="text/javascript">
      function setSubmit() {
         $('#isSubmit').val('1');
      }
   </script>
   
   
   <section class="page-header page-header-md">
      <div class="container">

         <h1>LOGIN</h1>

         <!-- breadcrumbs -->
         <ol class="breadcrumb">
            <li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
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
               <form name="form" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                  <div class="clearfix">
                     
                     <!-- Email -->
                     <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="" value="<?php echo $email; ?>">
                     </div>
                     
                     <!-- Password -->
                     <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="">
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
                     
                        <button type="submit" onclick="setSubmit();" class="btn btn-primary">Login</button>

                     </div>
                     
                  </div>
                  
               </form>
               <!-- /login form -->
               
                <?php 
                  if($isSubmit && $loginSuccess == false) {?>
                  
                     <!-- ALERT -->
                     <div class="alert alert-mini alert-danger margin-bottom-30">
                        <strong>Login Incorrect:</strong> Your email or password was incorrect.
                     </div><!-- /ALERT -->
                <?php
                  }
                  else if($isSubmit && !$user->isSystemAdmin()) { ?>
                  
                     <!-- ALERT -->
                     <div class="alert alert-mini alert-danger margin-bottom-30">
                        <strong>Access Denied:</strong> You do not have permissions to the Console.
                     </div><!-- /ALERT -->

               <?php
                  } ?>


            </div>
            <!-- /LOGIN -->

         </div>

         
      </div>
   </section>
   <!-- / -->

<?php 
         
$wrapper->writeFooter();
?>