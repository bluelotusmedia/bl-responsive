<?php
/*
Template Name: Page + Right Sidebar
*/
?>
<?php get_header(); ?>
 
        <article class="page" id="post-<?php the_ID(); ?>">
			
            <div class="row">
            	
            	<div class="col-xs-12 col-sm-8 page-right-sidebar__grid">
					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); ?>
					<div class="page__content">
                    <a href="<?php esc_url(the_permalink()); ?>"><h3 class="page__title page__sidebar__title title"><?php the_title(); ?></h3></a>
                    <?php the_content(); ?>
                    </div>
                <?php
					} // end while
				} // end if
				?>
                </div>
                <div class="col-xs-12 col-sm-4 page__sidebar sidebar">
                	<?php get_sidebar(); ?>
                </div>
                
            </div>
            
        </article>
    
<?php get_footer(); ?>