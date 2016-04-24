<?php get_header(); ?>
	
        <article class="post post-container" id="post-<?php the_ID(); ?>">
			
            <div class="row">
            	
            	<div class="col-xs-12 col-sm-8 content-container">
                	 <?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); ?>
                	<a href="<?php esc_url(the_permalink()); ?>"><h3 class="post__title"><?php the_title(); ?></h3></a>
           			<small class="post__meta">Posted on: <?php the_time('F, j, Y') ?>, in <?php the_category(); ?></small>
					<div class="post__thumbnail post__content">
                        <a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('full'); ?></a>
                        <?php the_excerpt(); ?>
                      
                    </div>
                    <hr class="post__divider">
                    <?php
						} // end while
					} // end if
					?>
                </div>
                <div class="col-xs-12 col-sm-4 sidebar">
                	<?php get_sidebar(); ?>
                </div>
                
            </div>
            
        </article>
    
<?php get_footer(); ?>