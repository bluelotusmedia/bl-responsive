<?php
/*
Template Name: Full-width page
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
            	
            	<div class="col-xs-12">
					<div class="post__content">
                    <?php the_content(); ?>
                    </div>
                </div>
                
            </div>
            
        </article>
        <?php
	} // end while
} // end if
?>
    
<?php get_footer(); ?>