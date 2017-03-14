<?php 
   chdir('../../');
   include_once('includes/Config.php');  
   
   $wrapper = new ConsoleWrapper();
   $wrapper->setTitle('Console - About -> '. (Config::getEnv() == 'dev' ? 'Dev' : 'Prod'));
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
				<h4>About Page</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo Config::getBaseDir(); ?>">Home</a></li>
					<li>About Page</li>
				</ol>
			</div>
		</div>
	</div>
</div>
   
<div class="divide60"></div> 
   
<div class="container">
   <div class="tabs-container">
      <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a aria-controls="tab-summary-section" role="tab" data-toggle="tab" href="#tab-summary-section">Summary Section</a></li>
          <li role="presentation" class=""><a aria-controls="tab-more-about-us-section" role="tab" data-toggle="tab" href="#tab-more-about-us-section">More About Us Section</a></li>
          <li role="presentation" class=""><a aria-controls="tab-highlights-section" role="tab" data-toggle="tab" href="#tab-highlights-section">Highlights Section</a></li>
          <li role="presentation" class=""><a aria-controls="tab-team-members-section" role="tab" data-toggle="tab" href="#tab-team-members-section">Team Members Section</a></li>
      </ul>
      <div class="tab-content">
          <div role="tabpanel" id="tab-summary-section" class="tab-pane active">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">Summary Section</h3>
                 </div>
              </div>
              <div class="form-group">
                <label for="txtSummaryTitle" class="col-sm-2 control-label">Summary Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtSummaryTitle" maxlength="2000" placeholder="Summary Title">
                </div>
              </div>
              <div class="form-group">
                <label for="txtSummaryText" class="col-sm-2 control-label">Summary Text</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="txtSummaryText" maxlength="2000" placeholder="Summary Text" style="height:80px"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="divSummaryPhoto" class="col-sm-2 control-label">Summary Photo</label>
                <div class="col-sm-10">
                  <div class="img-upload divSummaryPhoto"></div>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </div>
            </form>
          </div>
          <div role="tabpanel" id="tab-more-about-us-section" class="tab-pane">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">More About Us Section</h3>
                 </div>
              </div>
              
              <div class="form-group">
                <label for="txtMoreAboutUsTitle" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtMoreAboutUsTitle" maxlength="2000" placeholder="More About Us Title">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtMoreAboutUs1Header" class="col-sm-2 control-label">Header 1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtMoreAboutUs1Header" maxlength="2000" placeholder="Header Text">
                </div>
              </div>
              <div class="form-group">
                <label for="txtMoreAboutUs1Text" class="col-sm-2 control-label">Details Text 1</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="txtMoreAboutUs1Text" maxlength="2000" placeholder="Details Text" style="height:80px"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtMoreAboutUs2Header" class="col-sm-2 control-label">Header 2</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtMoreAboutUs2Header" maxlength="2000" placeholder="Header Text">
                </div>
              </div>
              <div class="form-group">
                <label for="txtMoreAboutUs2Text" class="col-sm-2 control-label">Details Text 2</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="txtMoreAboutUs2Text" maxlength="2000" placeholder="Details Text" style="height:80px"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtMoreAboutUs3Header" class="col-sm-2 control-label">Header 3</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtMoreAboutUs3Header" maxlength="2000" placeholder="Header Text">
                </div>
              </div>
              <div class="form-group">
                <label for="txtMoreAboutUs3Text" class="col-sm-2 control-label">Details Text 3</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="txtMoreAboutUs3Text" maxlength="2000" placeholder="Details Text" style="height:80px"></textarea>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </div>
            </form>
          </div>
          <div role="tabpanel" id="tab-highlights-section" class="tab-pane">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-2 col-sm-10">
                     <h3 class="heading" style="margin-bottom: 0;">Highlights Section</h3>
                 </div>
              </div>
              
              <div class="form-group">
                <label for="txtHighlightsTitle" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtHighlightsTitle" maxlength="2000" placeholder="Highlights Title">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtHighlightsDetails" class="col-sm-2 control-label">Details</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="txtHighlightsDetails" maxlength="2000" placeholder="Details Text" style="height:80px"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtHighlights1" class="col-sm-2 control-label">Highlight 1</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtHighlights1" maxlength="2000" placeholder="Highlights Text 1">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtHighlights2" class="col-sm-2 control-label">Highlight 2</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtHighlights2" maxlength="2000" placeholder="Highlights Text 2">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtHighlights3" class="col-sm-2 control-label">Highlight 3</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtHighlights3" maxlength="2000" placeholder="Highlights Text 3">
                </div>
              </div>
              
              <div class="form-group">
                <label for="txtHighlights4" class="col-sm-2 control-label">Highlight 4</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="txtHighlights4" maxlength="2000" placeholder="Highlights Text 4">
                </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </div>
            </form>
          </div>
          <div role="tabpanel" id="tab-team-members-section" class="tab-pane">
            <form class="form-horizontal">
               <div class="form-group" style="margin-bottom: 0;">
                 <div class="col-sm-offset-3 col-sm-9">
                     <h3 class="heading" style="margin-bottom: 0;">Leading Team Members Section</h3>
                 </div>
              </div>
              <div class="form-group">
                <label for="txtTeamMembersTitle" class="col-sm-3 control-label">Team Members Title</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="txtTeamMembersTitle" maxlength="2000" placeholder="Team Members Title Text">
                </div>
              </div>
              <div class="form-group">
                <label for="txtTeamMembersSummary" class="col-sm-3 control-label">Team Members Summary</label>
                <div class="col-sm-9">
                  <textarea type="text" class="form-control" id="txtTeamMembersSummary" maxlength="2000" placeholder="Team Members Summary Text" style="height:80px"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Team Members</label>
                <div class="col-sm-9">
                  <div class="tabs-container">
                     <ul class="nav nav-tabs">
                         <li role="presentation" class="active"><a aria-controls="tab-team-member1" role="tab" data-toggle="tab" href="#tab-team-member1">Team Member 1</a></li>
                         <li role="presentation" class=""><a aria-controls="tab-team-member2" role="tab" data-toggle="tab" href="#tab-team-member2">Team Member 2</a></li>
                         <li role="presentation" class=""><a aria-controls="tab-team-member3" role="tab" data-toggle="tab" href="#tab-team-member3">Team Member 3</a></li>
                         <li role="presentation" class=""><a aria-controls="tab-team-member4" role="tab" data-toggle="tab" href="#tab-team-member4">Team Member 4</a></li>
                     </ul>
                     <div class="tab-content">
                         <div role="tabpanel" id="tab-team-member1" class="tab-pane active">
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-9">
                                  <div class="img-upload teamimg-1"></div>
                                </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember1Name" class="col-sm-3 control-label">Name</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember1Name" maxlength="2000" placeholder="Name">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember1JobTitle" class="col-sm-3 control-label">Job Title</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember1JobTitle" maxlength="2000" placeholder="Job Title">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember1Summary" class="col-sm-3 control-label">Summary</label>
                               <div class="col-sm-9">
                                 <textarea type="text" class="form-control" id="txtTeamMember1Summary" maxlength="2000" placeholder="Summary" style="height:80px"></textarea>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember1Facebook" class="col-sm-3 control-label">Facebook</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember1Facebook" maxlength="2000" placeholder="Facebook Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember1Twitter" class="col-sm-3 control-label">Twitter</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember1Twitter" maxlength="2000" placeholder="Twitter Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember1LinkedIn" class="col-sm-3 control-label">LInked In</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember1LinkedIn" maxlength="2000" placeholder="LInked In Url">
                               </div>
                             </div>
                         </div>
                         <div role="tabpanel" id="tab-team-member2" class="tab-pane">
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-9">
                                  <div class="img-upload teamimg-2"></div>
                                </div>
                             </div>
                           <div class="form-group">
                               <label for="txtTeamMember2Name" class="col-sm-3 control-label">Name</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember2Name" maxlength="2000" placeholder="Name">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember2JobTitle" class="col-sm-3 control-label">Job Title</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember2JobTitle" maxlength="2000" placeholder="Job Title">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember2Summary" class="col-sm-3 control-label">Summary</label>
                               <div class="col-sm-9">
                                 <textarea type="text" class="form-control" id="txtTeamMember2Summary" maxlength="2000" placeholder="Summary" style="height:80px"></textarea>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember2Facebook" class="col-sm-3 control-label">Facebook</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember2Facebook" maxlength="2000" placeholder="Facebook Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember2Twitter" class="col-sm-3 control-label">Twitter</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember2Twitter" maxlength="2000" placeholder="Twitter Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember2LinkedIn" class="col-sm-3 control-label">LInked In</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember2LinkedIn" maxlength="2000" placeholder="LInked In Url">
                               </div>
                             </div>
                         </div>
                         <div role="tabpanel" id="tab-team-member3" class="tab-pane">
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-9">
                                  <div class="img-upload teamimg-3"></div>
                                </div>
                             </div>
                           <div class="form-group">
                               <label for="txtTeamMember3Name" class="col-sm-3 control-label">Name</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember3Name" maxlength="2000" placeholder="Name">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember3JobTitle" class="col-sm-3 control-label">Job Title</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember3JobTitle" maxlength="2000" placeholder="Job Title">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember3Summary" class="col-sm-3 control-label">Summary</label>
                               <div class="col-sm-9">
                                 <textarea type="text" class="form-control" id="txtTeamMember3Summary" maxlength="2000" placeholder="Summary" style="height:80px"></textarea>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember3Facebook" class="col-sm-3 control-label">Facebook</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember3Facebook" maxlength="2000" placeholder="Facebook Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember3Twitter" class="col-sm-3 control-label">Twitter</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember3Twitter" maxlength="2000" placeholder="Twitter Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember3LinkedIn" class="col-sm-3 control-label">LInked In</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember3LinkedIn" maxlength="2000" placeholder="LInked In Url">
                               </div>
                             </div>
                         </div>
                         <div role="tabpanel" id="tab-team-member4" class="tab-pane">
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Photo</label>
                                <div class="col-sm-9">
                                  <div class="img-upload teamimg-4"></div>
                                </div>
                             </div>
                           <div class="form-group">
                               <label for="txtTeamMember4Name" class="col-sm-3 control-label">Name</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember4Name" maxlength="2000" placeholder="Name">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember4JobTitle" class="col-sm-3 control-label">Job Title</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember4JobTitle" maxlength="2000" placeholder="Job Title">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember4Summary" class="col-sm-3 control-label">Summary</label>
                               <div class="col-sm-9">
                                 <textarea type="text" class="form-control" id="txtTeamMember4Summary" maxlength="2000" placeholder="Summary" style="height:80px"></textarea>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember4Facebook" class="col-sm-3 control-label">Facebook</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember4Facebook" maxlength="2000" placeholder="Facebook Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember4Twitter" class="col-sm-3 control-label">Twitter</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember4Twitter" maxlength="2000" placeholder="Twitter Url">
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="txtTeamMember4LinkedIn" class="col-sm-3 control-label">LInked In</label>
                               <div class="col-sm-9">
                                 <input type="text" class="form-control" id="txtTeamMember4LinkedIn" maxlength="2000" placeholder="LInked In Url">
                               </div>
                             </div>
                         </div>
                     </div>
                  </div>
                </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
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