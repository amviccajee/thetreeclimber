<?php
$contact_banner = get_field('contact_banner');

if ($contact_banner) {
    $title = $contact_banner['title'] ?? '';
    $information = $contact_banner['information'] ?? '';
    $link = $contact_banner['link'] ?? '';
    $background_image = $contact_banner['background_image'] ?? '';

    // Handle background image
    if (is_array($background_image) && isset($background_image['url'])) {
        $bg_url = $background_image['url'];
    } elseif (is_int($background_image)) {
        $bg_url = wp_get_attachment_image_url($background_image, 'full');
    } elseif (is_string($background_image)) {
        $bg_url = $background_image;
    } else {
        $bg_url = '';
    }

    $link_url = '';
    $link_title = '';

    if ($link) {
        if (is_object($link) && isset($link->ID)) {
            $link_url = get_permalink($link->ID);
            $link_title = get_the_title($link->ID);
        }
        elseif (is_numeric($link)) {
            $link_url = get_permalink($link);
            $link_title = get_the_title($link);
        }
        elseif (is_string($link)) {
            $link_url = $link;
            $link_title = 'Contact Us';
        }
    }
    ?>
    <div 
      class="contact-banner py-16 text-center bg-cover bg-center relative" 
      <?php if ($bg_url): ?> style="background-image: url('<?php echo esc_url($bg_url); ?>');" <?php endif; ?>
    >
      <div class="absolute inset-0 bg-black/30 rounded-lg"></div>
      <div class="flex container relative z-10 justify-between items-center">
        <div class="text-left">
          <?php if ($title): ?>
            <h2 class="text-3xl font-bold pb-8 text-white"><?php echo esc_html($title); ?></h2>
            <span class="block w-12 h-1 bg-seaGreen"></span>
          <?php endif; ?>
          <?php if ($information): ?>
            <p class="mb-4 text-white pt-8 w-[70%]"><?php echo esc_html($information); ?></p>
          <?php endif; ?>
        </div>
        <?php if ($link_url): ?>
        <a href="<?php echo esc_url($link_url); ?>" 
          class="px-10 py-3 font-bold transition duration-300 uppercase bg-pink text-green rounded-[25px] hover:bg-green hover:text-pink whitespace-nowrap">
          <?php echo esc_html($link_title); ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
<?php
}
?>
