<?php 
   chdir('../../');
   include_once('includes/Config.php');  
   
   $wrapper = new ConsoleWrapper();
   $wrapper->setTitle('Console - Site Settings -> '. (Config::getEnv() == 'dev' ? 'Dev' : 'Prod'));
   $wrapper->addScript('../../includes/picture-cut/src/jquery.picture.cut.js');
   
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
				<h4>Site Settings</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
					<li>Site Settings</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="divide60"></div> 
   
<div class="container">
   <div class="tabs-container">
      <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a aria-controls="tab-basic-info" role="tab" data-toggle="tab" href="#tab-basic-info">Basic Info</a></li>
          <li role="presentation" class=""><a aria-controls="tab-site-contact-info" role="tab" data-toggle="tab" href="#tab-site-contact-info">Site Contact Info</a></li>
          <li role="presentation" class=""><a aria-controls="tab-footer-info" role="tab" data-toggle="tab" href="#tab-footer-info">Footer Info</a></li>
          <li role="presentation" class=""><a aria-controls="tab-featured-work-images" role="tab" data-toggle="tab" href="#tab-featured-work-images">Featured Work Images</a></li>
      </ul>
      <div class="tab-content">
          <div role="tabpanel" id="tab-basic-info" class="tab-pane active">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">Basic Info</h3>
                 </div>
              </div>
              
              <div class="form-group">
                <label for="txtSiteTitle" class="col-sm-2 control-label">Site Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSiteTitle" placeholder="Site Title">
                </div>
              </div>
              <div class="form-group">
                <label for="txtSiteDescription" class="col-sm-2 control-label">Site Description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSiteDescription" placeholder="Site Description">
                </div>
              </div>
              <div class="form-group">
                <label for="txtSiteKeywords" class="col-sm-2 control-label">Site Keywords</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSiteKeywords" placeholder="Site Keywords (comma, separated, list)">
                </div>
              </div>
              <div class="form-group">
                <label for="txtFacebookLink" class="col-sm-2 control-label">Facebook Link</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtFacebookLink" placeholder="Facebook Link">
                </div>
              </div>
              <div class="form-group">
                <label for="txtTwitterLink" class="col-sm-2 control-label">Twitter Link</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtTwitterLink" placeholder="Twitter Link">
                </div>
              </div>
              <div class="form-group">
                <label for="txtGooglePlusLink" class="col-sm-2 control-label">Google+ Link</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtGooglePlusLink" placeholder="Google+ Link">
                </div>
              </div>
              <div class="form-group">
                <label for="txtYoutubLink" class="col-sm-2 control-label">Youtube Link</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtYoutubLink" placeholder="Youtube Link">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" id="tab-site-contact-info" class="tab-pane">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">Site Contact Info</h3>
                 </div>
              </div>
              
              <div class="form-group">
                <label for="txtSiteAddress" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSiteAddress" placeholder="Address">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtSiteEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSiteEmail" placeholder="Email">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtSitePhone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSitePhone" placeholder="Phone">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtSiteFax" class="col-sm-2 control-label">Fax</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSiteFax" placeholder="Fax">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" id="tab-footer-info" class="tab-pane">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">Footer</h3>
                 </div>
              </div>
              
              <div class="form-group">
                <label for="txtAboutFooter" class="col-sm-2 control-label">About</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtAboutFooter" placeholder="About Footer Text">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtCareerFooter" class="col-sm-2 control-label">Career</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtCareerFooter" placeholder="Career Footer Text">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" id="tab-featured-work-images" class="tab-pane">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">Featured Work Images</h3>
                 </div>
              </div>
              
              <div class="form-group">
                <label for="txtAboutFooter" class="col-sm-3 control-label">Featured Images Row 1</label>
                <div class="col-sm-3">
                  <div class="img-upload image1"></div>
                </div>
                <div class="col-sm-3">
                  <div class="img-upload image2"></div>
                </div>
                <div class="col-sm-3">
                  <div class="img-upload image3"></div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtAboutFooter" class="col-sm-3 control-label">Featured Images Row 2</label>
                <div class="col-sm-3">
                  <div class="img-upload image4"></div>
                </div>
                <div class="col-sm-3">
                  <div class="img-upload image5"></div>
                </div>
                <div class="col-sm-3">
                  <div class="img-upload image6"></div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtAboutFooter" class="col-sm-3 control-label">Featured Images Row 3</label>
                <div class="col-sm-3">
                  <div class="img-upload image7"></div>
                </div>
                <div class="col-sm-3">
                  <div class="img-upload image8"></div>
                </div>
                <div class="col-sm-3">
                  <div class="img-upload image9"></div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
      </div>
   </div>
</div>

<div class="divide60"></div> 

<?php
   $wrapper->writeFooter();
?>

<script>
   $(function() {
      $('.tabs-container').tab();
      
      $(".img-upload").PictureCut({
         InputOfImageDirectory       : "image",
         PluginFolderOnServer        : "/tnautorack/includes/picture-cut/",
         FolderOnServer              : "/tnautorack/uploads/",
         EnableCrop                  : true,
         CropWindowStyle             : "Bootstrap",
         UploadedCallback : function(data) {
            alert( 'That image: ' + data.currentFileName + ' was uploaded. It was cropped to the size ' + data.currentWidth + ' by ' + data.currentHeight + ' pixels.');
         }
      });
   });
</script>