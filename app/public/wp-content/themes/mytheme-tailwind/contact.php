<?php 
/*
Template Name: Contact
*/

$image_id = get_field('contact_image');
$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';

get_header(); 
?>

<div class="relative w-full min-h-screen pb-20">
  <?php if ($image_url): ?>
    <img src="<?php echo esc_url($image_url); ?>" alt="" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">
  <?php endif; ?>
  <div class="absolute top-0 left-0 w-full z-20">
    <div class="container mx-auto flex justify-end gap-6 py-6 items-center text-white">
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
  </div>
  <div class="relative z-10 container pt-32">
    <div class="bg-white/60 backdrop-blur-md p-10">
      <h2 class="text-center uppercase font-bold text-4xl mb-8">Contact Me</h2>
      <p class="text-center pb-10 px-40">Let’s bring your ideas to life. I’m always happy to answer questions and discuss how my services can help achieve your goals. Get in touch via email to start the conversation.
      We serve clients within 50 km of Rome.</p>
      <div class="flex gap-10">
        <div class="md:flex-1 flex items-center">
          <?php echo do_shortcode('[wpgmza id="1"]'); ?>
        </div>
        <div class="md:flex-1 flex justify-center">
          <div class="rounded-lg w-full max-w-3xl">
            <?php echo do_shortcode("[ninja_form id='1']"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<?php get_footer(); ?>
