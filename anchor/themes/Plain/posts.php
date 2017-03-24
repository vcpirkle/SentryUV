<?php if(has_posts()): ?>
    <section id="content"<?php if(PLAIN_NO_SIDEBAR == true): echo 'class="no-sidebar"'; endif; ?>>

        <?php while(posts()): ?>
        <article id="article" class="article-<?php echo article_id(); ?>">
            <h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
            <div class="meta">
                <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php if(PLAIN_POST_RELATIVE_TIME == false): echo date('F j, Y', article_time()); else: echo relative_time(article_time()); endif; ?></time>
            </div>
            <div class="entry">
                <p><?php echo substr(article_markdown(),0,250); ?></p>
                <a class="btn btn-primary" href="<?php echo article_url(); ?>">Read More</a>
            </div>
        </article>
        <?php endwhile; ?>

    </section>

    <?php if(PLAIN_NO_SIDEBAR == false): ?>
    <section id="sidebar">
    	<?php include "includes/sidebar.php"; ?>
    </section>

	<?php endif; ?>
<?php else: ?>
    <p>404...</p>
<?php endif; ?>