<?php theme_include('header'); ?>
<?php if(has_posts()): ?>

<!-- -->
<section>
   <div class="container">

   <?php if(PLAIN_NO_SIDEBAR == false): ?>
      <div class="row">

         <!-- LEFT -->
         <div class="col-md-9 col-sm-9">
   <?php endif; ?>
         
         
         <?php while(posts()): ?>

            <!-- POST ITEM -->
            <div class="blog-post-item article-<?php echo article_id(); ?>">
            
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
               <?php if(!empty($postImage1) && empty($postImage2)): ?>
                  <figure class="margin-bottom-20">
                     <img class="img-responsive" src="<?php echo $postImage1; ?>" alt="<?php echo article_title(); ?>">
                  </figure>
               <?php endif; ?>

               <h2><a href="blog/<?php echo article_slug(); ?>.html" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>

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

               <p><?php echo substr(article_markdown(),0,500); ?></p>

               <a href="blog/<?php echo article_slug(); ?>.html" class="btn btn-reveal btn-default">
                  <i class="fa fa-plus"></i>
                  <span>Read More</span>
               </a>

            </div>
            <!-- /POST ITEM -->

            <?php endwhile; ?>

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

   <?php if(PLAIN_NO_SIDEBAR == false): ?>
   
      <?php include "includes/sidebar_sample.php"; ?>
      
      </div>
   <?php endif; ?>

   </div>
</section>
<!-- / -->

<?php else: ?>
    <p>404...</p>
<?php endif; ?>