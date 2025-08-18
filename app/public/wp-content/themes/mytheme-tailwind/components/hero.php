<?php
$hero_banner = get_field('hero_banner');
$title = $hero_banner['title'] ?? '';
$subtitle = $hero_banner['introduction'] ?? '';
$image_field = $hero_banner['image'] ?? '';
$image_url = '';
$alt_text = $title; // fallback alt text

if ( $image_field ) {
  if ( is_array($image_field) ) {
      $image_url = $image_field['url'] ?? '';
      $alt_text  = $image_field['alt'] ?? $title;
  } elseif ( is_numeric($image_field) ) {
      $image_url = wp_get_attachment_image_url($image_field, 'full');
      $alt_text  = get_post_meta($image_field, '_wp_attachment_image_alt', true) ?: $title;
  } elseif ( is_string($image_field) ) {
      $image_url = $image_field;
  }
}
?>

<div class="relative w-full h-[600px]">
  <?php if ($image_url): ?>
      <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" class="absolute top-0 left-0 w-full h-full object-cover z-0">
      <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/0"></div>
  <?php endif; ?>
  <div class="z-10 container relative text-white h-full flex flex-col justify-between">
    <div class="w-full flex justify-end gap-6 py-6 items-center">
      <nav class="text-offwhite">
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
    <div class="flex flex-col justify-center h-full text-offwhite">
      <?php if ($title): ?>
        <h1 class="text-6xl font-bold"><?php echo esc_html($title); ?></h1>
        <span class="block w-48 h-1 bg-offwhite mt-6"></span>
      <?php endif; ?>
      <?php if ($subtitle): ?>
        <p class="mt-4 text-lg w-[50%] py-10"><?php echo esc_html($subtitle); ?></p>
      <?php endif; ?>
          <a href="/consultation" class="px-12 py-3 font-bold transition duration-300 uppercase border border-offwhite w-max rounded-[25px] hover:bg-brightgreen hover:text-greentitle hover:border-brightgreen mt-6">
          Book a consultation
      </a>
    </div> 
  </div>
</div>
