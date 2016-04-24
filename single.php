<?php get_header(); ?>
	
    <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
        <article class="post single" id="post-<?php the_ID(); ?>">
			
            <div class="row single__row">
            	
            	<div class="col-xs-12 col-sm-8 single__grid">
					<div class="post__content single__content">
                    <a href="<?php esc_url(the_permalink()); ?>"><h3 class="post__title single__post__title title"><?php the_title(); ?></h3></a>
                    <small class="post__meta single__post__meta">Posted on: <?php the_time('F, j, Y') ?>, in <?php the_category(); ?></small>
                    <?php the_content(); ?>
                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
                        <div class="next-prev">
                            <div class="next-prev__prev"><?php previous_post_link('&laquo; %link') ?></div>
                            <div class="next-prev__next"><?php next_post_link('%link &raquo;') ?></div>
                        </div>
                    </div>
                    <hr class="post__divider">
            		<?php if( comments_open() ){ comments_template(); } ?>
                </div>
                <div class="col-xs-12 col-sm-4 sidebar single__sidebar">
                	<?php get_sidebar(); ?>
                </div>
                
            </div>
            
            
        </article>
        <?php
	} // end while
} // end if
?>
    
<?php get_footer(); ?>