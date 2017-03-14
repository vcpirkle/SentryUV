<?php 
   chdir('../');
   include_once('includes/Config.php');  
   
   $wrapper = new ConsoleWrapper();
   $wrapper->setTitle('Tennessee Auto Rack - Console -> '. (Config::getEnv() == 'dev' ? 'Dev' : 'Prod'));
   
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
      header('Location: '. Config::getBaseDir(). 'console/settings');
      exit();
   }
   
   $wrapper->writeHeader();

?>

<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4>Administration</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
					<li>Console</li>
				</ol>
			</div>
		</div>
	</div>
</div>
   
<?php
   if(is_null($user) || !$user->isSystemAdmin()) { ?>
      <form name="form" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 <?php 
   if($isSubmit && $loginSuccess == false) {?>
            <div class="error">Your email or password was incorrect.</div>
 <?php
   }
   else if($isSubmit && !$user->isSystemAdmin()) { ?>
            <div class="error">You do not have permissions to the Console.</div>
<?php
   } ?>
   
<script type="text/javascript">
   function setSubmit() {
      $('#isSubmit').val('1');
   }
</script>
         
   <div class="divide80"></div>         
               
   <div class="container">
      <div class="row">  
          <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
              <div class="login-form">
                  <h3>Sign In</h3>
                  <div class="form-group">
                     <label for="email">Email address</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>                   
                  <div class="checkbox">
                      <label>
                          <input type="checkbox"> Remember Me
                      </label>
                  </div>
                  <button type="submit" onclick="setSubmit();" class="btn btn-theme-bg">Login</button>
              </div>
          </div>
      </div>
   </div>

   <input type="hidden" id="isSubmit" name="isSubmit" value="0" />
</form>

<div class="divide60"></div> 

<?php
   }
   $wrapper->writeFooter();
?>
