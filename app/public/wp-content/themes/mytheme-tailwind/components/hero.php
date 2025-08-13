<?php
  $title = SCF::get('hero_title');
  $subtitle = SCF::get('hero_introduction');
  $image_id = SCF::get('hero_image');
  $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';
?>

<div class="relative w-full h-[600px]">
  <?php if ($image_url): ?>
    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/0"></div>
  <?php endif; ?>

  <div class="z-10 container relative text-white h-full flex flex-col justify-between">
    <!-- Top navigation -->
    <div class="w-full flex justify-end gap-6 py-6 items-center">
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

    <!-- Hero content -->
    <div class="flex flex-col justify-center h-full">
      <?php if ($title): ?>
        <h1 class="text-6xl font-bold"><?php echo esc_html($title); ?></h1>
      <?php endif; ?>
      <?php if ($subtitle): ?>
        <p class="mt-4 text-lg"><?php echo esc_html($subtitle); ?></p>
      <?php endif; ?>
      <a href="/consultation" class="px-12 py-3 font-bold transition duration-300 uppercase border border-white w-max text-white rounded-[25px] hover:bg-scallop hover:text-forest hover:border-scallop mt-6">
        Book a consultation
      </a>
    </div> 
  </div>
</div>
