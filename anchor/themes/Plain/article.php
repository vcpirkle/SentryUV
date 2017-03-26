<!-- -->
<section>
   <div class="container">

   <?php if(PLAIN_NO_SIDEBAR == false): ?>
      <div class="row">

         <!-- LEFT -->
         <div class="col-md-9 col-sm-9">
   <?php endif; ?>
         
            <div class="article-<?php echo article_id(); ?>">

               <h1 class="blog-post-title"><?php echo article_title(); ?></h1>
               <ul class="blog-post-info list-inline">
                  <li>
                     <a href="#">
                        <i class="fa fa-clock-o"></i> 
                        <span class="font-lato"><?php if(PLAIN_POST_RELATIVE_TIME == false): echo date('F j, Y', article_time()); else: echo relative_time(article_time()); endif; ?></span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-comment-o"></i> 
                        <span class="font-lato"><?php echo total_comments() . pluralise(total_comments(), ' comment'); ?></span>
                     </a>
                  </li>
                  <li>
                     <i class="fa fa-folder-open-o"></i> 

                     <a class="category" href="<?php echo article_category_url(); ?>">
                        <span class="font-lato"><?php echo article_category(); ?></span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-user"></i> 
                        <span class="font-lato"><?php echo article_author(); ?></span>
                     </a>
                  </li>
               </ul>
               
               <?php $postImage1 = article_custom_field('post_image_1'); ?>
               <?php $postImage2 = article_custom_field('post_image_2'); ?>
               <?php $postImage3 = article_custom_field('post_image_3'); ?>
               
               <?php if(!empty($postImage1) && !empty($postImage2)): ?>
               <!-- OWL SLIDER -->
                  <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
                     <div>
                        <img class="img-responsive" src="<?php echo $postImage1; ?>" alt="<?php echo article_title(); ?>">
                     </div>
                     <div>
                        <img class="img-responsive" src="<?php echo $postImage2; ?>" alt="<?php echo article_title(); ?>">
                     </div>
                     <?php if(!empty($postImage3)): ?>
                     <div>
                        <img class="img-responsive" src="<?php echo $postImage3; ?>" alt="<?php echo article_title(); ?>">
                     </div>
                     <?php endif; ?>
                  </div>
                  <!-- /OWL SLIDER -->
               <?php endif; ?>

               <!-- IMAGE -->
               <?php if(!empty($postImage1)): ?>
                  <figure class="margin-bottom-20">
                     <img class="img-responsive" src="<?php echo $postImage1; ?>" alt="<?php echo article_title(); ?>">
                  </figure>
               <?php endif; ?>

               <!-- article content -->
               <p class="dropcap"><?php echo article_markdown(); ?></p>
               <!-- /article content -->


               <div class="divider divider-dotted"><!-- divider --></div>


               <!-- TAGS -->
               <a class="tag" href="#">
                  <span class="txt">Water Purification</span>
                  <span class="num">12</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">UV Light</span>
                  <span class="num">3</span>
               </a>
               <a class="tag" href="#">
                  <span class="txt">Technology</span>
                  <span class="num">4</span>
               </a>
               <!-- /TAGS -->

               <!-- SHARE POST -->
               <div class="clearfix margin-top-30">

                  <span class="pull-left margin-top-6 bold hidden-xs">
                     Share Post: 
                  </span>

                  <a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-right" data-toggle="tooltip" data-placement="top" title="Facebook">
                     <i class="icon-facebook"></i>
                     <i class="icon-facebook"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-right" data-toggle="tooltip" data-placement="top" title="Twitter">
                     <i class="icon-twitter"></i>
                     <i class="icon-twitter"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-right" data-toggle="tooltip" data-placement="top" title="Google plus">
                     <i class="icon-gplus"></i>
                     <i class="icon-gplus"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-right" data-toggle="tooltip" data-placement="top" title="Linkedin">
                     <i class="icon-linkedin"></i>
                     <i class="icon-linkedin"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest pull-right" data-toggle="tooltip" data-placement="top" title="Pinterest">
                     <i class="icon-pinterest"></i>
                     <i class="icon-pinterest"></i>
                  </a>

                  <a href="#" class="social-icon social-icon-sm social-icon-transparent social-call pull-right" data-toggle="tooltip" data-placement="top" title="Email">
                     <i class="icon-email3"></i>
                     <i class="icon-email3"></i>
                  </a>

               </div>
               <!-- /SHARE POST -->


               <div class="divider"><!-- divider --></div>

               
               <ul class="pager">
                  <li class="previous"><a class="noborder" href="#">&larr; Previous Post</a></li>
                  <li class="next"><a class="noborder" href="#">Next Post &rarr;</a></li>
               </ul>


               <div class="divider"><!-- divider --></div>

               
               <?php include "includes/comment_form_sample.php"; ?>

            </div>
         </div>

   <?php if(PLAIN_NO_SIDEBAR == false): ?>
   
      <?php include "includes/sidebar_sample.php"; ?>
      
      </div>
   <?php endif; ?>

   </div>
</section>
<!-- / -->

