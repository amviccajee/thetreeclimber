<?php 
/*
Template Name: Contact
*/
$image_id = SCF::get('contact_image');
$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';
get_header(); 
?>

<div class="relative min-h-[600px]"> <!-- relative container for image + content -->
  
  <?php if ($image_url): ?>
    <img src="<?php echo esc_url($image_url); ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover z-0">
  <?php endif; ?>

  <div class="relative z-10 container h-full flex flex-col justify-between">
    <div class="w-full flex justify-end gap-6 py-6 items-center text-white">
      <nav>
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex space-x-6',
            'fallback_cb' => false
          ]);
        ?>
      </nav>
    </div> 
    <div class="bg-white/30 backdrop-blur-md px-4 py-10 rounded-lg shadow mb-20">
      <h2 class="w-full text-center uppercase font-bold text-5xl pb-6">Contact Me</h2>
      <?php echo do_shortcode("[ninja_form id='1']"); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
