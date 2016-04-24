<?php
/*
Template Name: Page + Right Sidebar
*/
?>
<?php get_header(); ?>
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
			
            <a href="<?php esc_url(the_permalink()); ?>"><h3 class="post__title"><?php the_title(); ?></h3></a>
            
            <div class="row">
            	
            	<div class="col-xs-12 col-sm-8">
					<div class="post__thumbnail post__content">
                    <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                	<?php get_sidebar(); ?>
                </div>
                
            </div>
            
        	<hr class="post__divider">
        </article>
        <?php
	} // end while
} // end if
?>
    
<?php get_footer(); ?>