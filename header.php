
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page(  ) ? bloginfo( 'description' ) : wp_title( ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(  ); ?>
  </head>
<body>

    <div class="grid-container-fluid site-top">
      <div class="grid-container">
        <div class="grid-x">
          <div class="cell large-3 social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          <div class="cell large-3">
            <span><i class="fa fa-phone"></i> Phone: 1 800 555-5555</span>
          </div>
          <div class="cell large-3">
            <span><i class="fa fa-envelope"></i> Email: something@email.com</span>
          </div>
          <div class="cell large-3">
            <form action="">
              <input type="text" name="s" placeholder="Search...">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <header>
      <div class="grid-container">
        <div class="grid-x">
          <div class="cell large-4">
              <h3><a href="index.html"><?php bloginfo( 'name' ); ?></a></h3>
          </div>
          <div class="cell large-8">
            <?php wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class' => 'menu'
            )); ?>
          </div>
        </div>
      </div>
    </header>