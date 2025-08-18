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
      class="contact-banner p-12 text-center my-6 bg-cover bg-center relative" 
      <?php if ($bg_url): ?> style="background-image: url('<?php echo esc_url($bg_url); ?>');" <?php endif; ?>
    >
      <div class="absolute inset-0 bg-black/30 rounded-lg"></div>
      <div class="flex container relative z-10 justify-between items-center">
        <div class="text-left">
          <?php if ($title): ?>
            <h2 class="text-3xl font-bold mb-2 text-white"><?php echo esc_html($title); ?></h2>
          <?php endif; ?>
          <?php if ($information): ?>
            <p class="mb-4 text-white"><?php echo esc_html($information); ?></p>
          <?php endif; ?>
        </div>
        <?php if ($link_url): ?>
          <a href="<?php echo esc_url($link_url); ?>" class="inline-block border-2 border-white text-white font-bold uppercase px-12 py-3 rounded-[25px] hover:bg-seafoam hover:border-seafoam transition">
            <?php echo esc_html($link_title); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
<?php
}
?>
