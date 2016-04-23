<?php 
/*
	Template Name: Full-width Page
*/

get_header(); ?>
	
    <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<p><?php the_content(); ?></p>
       
        <?php
	} // end while
} // end if
?>
    
<?php get_footer(); ?>