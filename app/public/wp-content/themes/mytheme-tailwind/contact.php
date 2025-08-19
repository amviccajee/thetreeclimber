<?php 
/*
Template Name: Contact
*/

$image_id = get_field('contact_image');
$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';

get_header(); 
?>

<div class="relative w-full">
  <?php if ($image_url): ?>
    <img src="<?php echo esc_url($image_url); ?>" alt="" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">
  <?php endif; ?>
  <div class="relative z-10 container mx-auto pt-6 pb-10">
    <div class="flex justify-end mb-10">
      <nav class="text-white">
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
    <div class="flex flex-col md:flex-row gap-8 items-center bg-white/70 backdrop-blur-md rounded-[35px] mb-12">
      <div class="md:mb-10 md:w-[50%] p-10">
        <h2 class="uppercase font-bold text-4xl mb-4">Contact Me</span></h2>
        <span class="block w-28 h-1 bg-green my-10"></span>
        <p>
          Let’s bring your ideas to life. I’m always happy to answer questions and discuss how my services can help achieve your goals.
          <br><br>
          Get in touch via email to start the conversation. We serve clients within 50 km of Rome.
        </p>
      </div>
      <div class="bg-white p-10 rounded-bl-[25px] md:rounded-tr-[25px] rounded-br-[25px] w-full">
        <?php echo do_shortcode("[ninja_form id='1']"); ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
