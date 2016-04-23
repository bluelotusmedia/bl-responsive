<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php get_bloginfo( 'description' ); ?>" />
  <?php wp_head(); ?>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image('thumbnail_url'); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php wp_nav_menu(array(
				'theme_location'=>'header', 
				'container'=>false,
				'menu_class'=>'nav navbar-nav navbar-right'
				)
			); 
		?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
	



