<?php
/*
Template Name: Full-width page (no title)
*/
?>
<?php get_header(); ?>
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
        <article class="page-full-width page" id="post-<?php the_ID(); ?>">
			
            <div class="row page__row">
            	
            	<div class="col-xs-12 page-full-width__grid">
					<div class="page__content">
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