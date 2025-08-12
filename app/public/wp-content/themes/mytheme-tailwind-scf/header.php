<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // Loads WordPress head scripts and styles ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
</head>
<body class="scroll-smooth" <?php body_class(); ?>>
  <section class="container primary-font bg-gradient-to-r from-purple-500 to-lime-500 py-6 sm:flex justify-between items-center">
      <a class='block' href='<?php echo home_url();?>'>
        <div class="logo logo-font text-salmon text-3xl">Rémi Barré</div>
      </a>
      <nav class="menu flex gap-2 justify-between sm:justify-end items-center">
        <div class="home-menu sm:mr-10">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container'=> false, 'menu_class'=> 'menu' ) ); ?>
        </div>
        <a class="text-title-grey flex items-center gap-2 hover:text-dark-blue font-bold" href="http://linkedin.com/in/remi-barre" target="_blank">Retrouvez-moi sur Linkedin<img class="w-8 h-8" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/linkedin.png" alt="Description of the image"></a>
      </nav>
  </section>
</body>
</html>
