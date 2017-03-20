<?php
include_once('includes/Config.php');  

$wrapper = new Wrapper();
$wrapper->setTitle('SentryUV');
$wrapper->writeHeader();
?>

<!-- Render The Blog !-->

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
<section class="page-header dark page-header-xs">
   <div class="container">

      <h1>BLOG</h1>

      <!-- breadcrumbs -->
      <ol class="breadcrumb">
         <li><a href="#">Home</a></li>
         <li><a href="#">Blog</a></li>
         <li class="active">Right Sidebar</li>
      </ol><!-- /breadcrumbs -->

   </div>
</section>
<!-- /PAGE HEADER -->




<!-- -->
<section>
   <div class="container">

      <div class="row">

         <!-- LEFT -->
         <div class="col-md-9 col-sm-9">

            <!-- POST ITEM -->
            <div class="blog-post-item">

               <!-- OWL SLIDER -->
               <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
                  <div>
                     <img class="img-responsive" src="assets/images/demo/content_slider/23-min.jpg" alt="">
                  </div>
                  <div>
                     <img class="img-responsive" src="assets/images/demo/content_slider/21-min.jpg" alt="">
                  </div>
                  <div>
                     <img class="img-responsive" src="assets/images/demo/content_slider/3-min.jpg" alt="">
                  </div>
               </div>
               <!-- /OWL SLIDER -->

               <h2><a href="blog-single-default.html">BLOG CAROUSEL POST</a></h2>

               <ul class="blog-post-info list-inline">
                  <li>
                     <a href="#">
                        <i class="fa fa-clock-o"></i> 
                        <span class="font-lato">June 29, 2015</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-comment-o"></i> 
                        <span class="font-lato">28 Comments</span>
                     </a>
                  </li>
                  <li>
                     <i class="fa fa-folder-open-o"></i> 

                     <a class="category" href="#">
                        <span class="font-lato">Design</span>
                     </a>
                     <a class="category" href="#">
                        <span class="font-lato">Photography</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-user"></i> 
                        <span class="font-lato">John Doe</span>
                     </a>
                  </li>
               </ul>

               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

               <a href="blog-single-default.html" class="btn btn-reveal btn-default">
                  <i class="fa fa-plus"></i>
                  <span>Read More</span>
               </a>

            </div>
            <!-- /POST ITEM -->


            <!-- POST ITEM -->
            <div class="blog-post-item">

               <!-- IMAGE -->
               <figure class="margin-bottom-20">
                  <img class="img-responsive" src="assets/images/demo/content_slider/10-min.jpg" alt="">
               </figure>

               <h2><a href="blog-single-default.html">BLOG IMAGE POST</a></h2>

               <ul class="blog-post-info list-inline">
                  <li>
                     <a href="#">
                        <i class="fa fa-clock-o"></i> 
                        <span class="font-lato">June 29, 2015</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-comment-o"></i> 
                        <span class="font-lato">28 Comments</span>
                     </a>
                  </li>
                  <li>
                     <i class="fa fa-folder-open-o"></i> 

                     <a class="category" href="#">
                        <span class="font-lato">Design</span>
                     </a>
                     <a class="category" href="#">
                        <span class="font-lato">Photography</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-user"></i> 
                        <span class="font-lato">John Doe</span>
                     </a>
                  </li>
               </ul>

               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

               <a href="blog-single-default.html" class="btn btn-reveal btn-default">
                  <i class="fa fa-plus"></i>
                  <span>Read More</span>
               </a>

            </div>
            <!-- /POST ITEM -->


            <!-- POST ITEM -->
            <div class="blog-post-item">

               <!-- VIDEO -->
               <div class="margin-bottom-20">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
                  </div>
               </div>

               <h2><a href="blog-single-default.html">BLOG VIDEO POST</a></h2>

               <ul class="blog-post-info list-inline">
                  <li>
                     <a href="#">
                        <i class="fa fa-clock-o"></i> 
                        <span class="font-lato">June 29, 2015</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-comment-o"></i> 
                        <span class="font-lato">28 Comments</span>
                     </a>
                  </li>
                  <li>
                     <i class="fa fa-folder-open-o"></i> 

                     <a class="category" href="#">
                        <span class="font-lato">Design</span>
                     </a>
                     <a class="category" href="#">
                        <span class="font-lato">Photography</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-user"></i> 
                        <span class="font-lato">John Doe</span>
                     </a>
                  </li>
               </ul>

               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

               <a href="blog-single-default.html" class="btn btn-reveal btn-default">
                  <i class="fa fa-plus"></i>
                  <span>Read More</span>
               </a>

            </div>
            <!-- /POST ITEM -->


            <!-- POST ITEM -->
            <div class="blog-post-item">

               <!-- VIDEO -->
               <div class="margin-bottom-20">
                  <iframe width="100%" height="366" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/154936822&color=a94545&auto_play=false&hide_related=false&visual=true"></iframe>
               </div>

               <h2><a href="blog-single-default.html">BLOG SOUND CLOUD POST</a></h2>

               <ul class="blog-post-info list-inline">
                  <li>
                     <a href="#">
                        <i class="fa fa-clock-o"></i> 
                        <span class="font-lato">June 29, 2015</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-comment-o"></i> 
                        <span class="font-lato">28 Comments</span>
                     </a>
                  </li>
                  <li>
                     <i class="fa fa-folder-open-o"></i> 

                     <a class="category" href="#">
                        <span class="font-lato">Design</span>
                     </a>
                     <a class="category" href="#">
                        <span class="font-lato">Photography</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-user"></i> 
                        <span class="font-lato">John Doe</span>
                     </a>
                  </li>
               </ul>

               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

               <a href="blog-single-default.html" class="btn btn-reveal btn-default">
                  <i class="fa fa-plus"></i>
                  <span>Read More</span>
               </a>

            </div>
            <!-- /POST ITEM -->


            <!-- POST ITEM -->
            <div class="blog-post-item">

               <h2><a href="blog-single-default.html">BLOG SIMPLE POST</a></h2>

               <ul class="blog-post-info list-inline">
                  <li>
                     <a href="#">
                        <i class="fa fa-clock-o"></i> 
                        <span class="font-lato">June 29, 2015</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-comment-o"></i> 
                        <span class="font-lato">28 Comments</span>
                     </a>
                  </li>
                  <li>
                     <i class="fa fa-folder-open-o"></i> 

                     <a class="category" href="#">
                        <span class="font-lato">Design</span>
                     </a>
                     <a class="category" href="#">
                        <span class="font-lato">Photography</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-user"></i> 
                        <span class="font-lato">John Doe</span>
                     </a>
                  </li>
               </ul>

               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

               <a href="blog-single-default.html" class="btn btn-reveal btn-default">
                  <i class="fa fa-plus"></i>
                  <span>Read More</span>
               </a>

            </div>
            <!-- /POST ITEM -->


            <!-- PAGINATION -->
            <div class="text-right">
               <!-- Pagination Default -->
               <ul class="pagination nomargin">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
               </ul>
               <!-- /Pagination Default -->
            </div>
            <!-- /PAGINATION -->

         </div>


         <!-- RIGHT -->
         <div class="col-md-3 col-sm-3">

            <!-- INLINE SEARCH -->
            <div class="inline-search clearfix margin-bottom-30">
               <form action="" method="get" class="widget_search">
                  <input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
                  <button type="submit">
                     <i class="fa fa-search"></i>
                  </button>
               </form>
            </div>
            <!-- /INLINE SEARCH -->

            <hr />

            <!-- side navigation -->
            <div class="side-nav margin-bottom-60 margin-top-30">

               <div class="side-nav-head">
                  <button class="fa fa-bars"></button>
                  <h4>CATEGORIES</h4>
               </div>
               <ul class="list-group list-group-bordered list-group-noicon uppercase">
                  <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(12)</span> MEDIA</a></li>
                  <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(8)</span> MOVIES</a></li>
                  <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span> NEW</a></li>
                  <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(16)</span> TUTORIALS</a></li>
                  <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span> DEVELOPMENT</a></li>
                  <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(1)</span> UNCATEGORIZED</a></li>

               </ul>
               <!-- /side navigation -->

            
            </div>


            <!-- JUSTIFIED TAB -->
            <div class="tabs nomargin-top hidden-xs margin-bottom-60">

               <!-- tabs -->
               <ul class="nav nav-tabs nav-bottom-border nav-justified">
                  <li class="active">
                     <a href="#tab_1" data-toggle="tab">
                        Popular
                     </a>
                  </li>
                  <li>
                     <a href="#tab_2" data-toggle="tab">
                        Recent
                     </a>
                  </li>
               </ul>

               <!-- tabs content -->
               <div class="tab-content margin-bottom-60 margin-top-30">

                  <!-- POPULAR -->
                  <div id="tab_1" class="tab-pane active">

                     <div class="row tab-post"><!-- post -->
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <a href="blog-sidebar-left.html">
                              <img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
                           </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                           <small>June 29 2014</small>
                        </div>
                     </div><!-- /post -->

                     <div class="row tab-post"><!-- post -->
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <a href="blog-sidebar-left.html">
                              <img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
                           </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
                           <small>June 29 2014</small>
                        </div>
                     </div><!-- /post -->

                     <div class="row tab-post"><!-- post -->
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <a href="blog-sidebar-left.html">
                              <img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
                           </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa, sodales</a>
                           <small>June 29 2014</small>
                        </div>
                     </div><!-- /post -->

                  </div>
                  <!-- /POPULAR -->


                  <!-- RECENT -->
                  <div id="tab_2" class="tab-pane">

                     <div class="row tab-post"><!-- post -->
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <a href="blog-sidebar-left.html">
                              <img src="assets/images/demo/people/300x300/4-min.jpg" width="50" alt="" />
                           </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
                           <small>June 29 2014</small>
                        </div>
                     </div><!-- /post -->

                     <div class="row tab-post"><!-- post -->
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <a href="blog-sidebar-left.html">
                              <img src="assets/images/demo/people/300x300/5-min.jpg" width="50" alt="" />
                           </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                           <small>June 29 2014</small>
                        </div>
                     </div><!-- /post -->

                     <div class="row tab-post"><!-- post -->
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <a href="blog-sidebar-left.html">
                              <img src="assets/images/demo/people/300x300/6-min.jpg" width="50" alt="" />
                           </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                           <a href="blog-sidebar-left.html" class="tab-post-link">Quisque ut nulla at nunc</a>
                           <small>June 29 2014</small>
                        </div>
                     </div><!-- /post -->
                  </div>
                  <!-- /RECENT -->

               </div>

            </div>
            <!-- JUSTIFIED TAB -->


            <!-- TAGS -->
            <h3 class="hidden-xs size-16 margin-bottom-20">TAGS</h3>
            <div class="hidden-xs margin-bottom-60">

               <a class="tag" href="#">
                  <span class="txt">RESPONSIVE</span>
                  <span class="num">12</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">CSS</span>
                  <span class="num">3</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">HTML</span>
                  <span class="num">1</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">JAVASCRIPT</span>
                  <span class="num">28</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">DESIGN</span>
                  <span class="num">6</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">DEVELOPMENT</span>
                  <span class="num">3</span>
               </a>
            </div>


            <!-- TWIITER WIDGET -->
            <h3 class="hidden-xs size-16 margin-bottom-10">TWITTER FEED</h3>							
            <ul class="hidden-xs widget-twitter margin-bottom-60" data-php="php/twitter/tweet.php" data-username="stepofweb" data-limit="3">
               <li></li>
            </ul>

            <!-- FEATURED VIDEO -->
            <h3 class="hidden-xs size-16 margin-bottom-10">FEATURED VIDEO</h3>
            <div class="hidden-xs embed-responsive embed-responsive-16by9 margin-bottom-60">
               <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
            </div>

            <!-- FLICKR WIDGET -->
            <h3 class="hidden-xs size-16 margin-bottom-10">FLICKR PHOTO</h3>
            <div class="hidden-xs widget-flickr clearfix lightbox margin-bottom-60" data-id="37304598@N02" data-limit="16" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'></div>


            <!-- FACEBOOK -->
            <iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fstepofweb&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>


            <hr />


            <!-- SOCIAL ICONS -->
            <div class="hidden-xs margin-top-30 margin-bottom-60">
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

         </div>

      </div>


   </div>
</section>
<!-- / -->

<?php

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>