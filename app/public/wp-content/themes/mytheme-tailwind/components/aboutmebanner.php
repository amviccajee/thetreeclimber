<?php
$about_me = get_field('about_me_banner');

if ($about_me) {
    $title = $about_me['title'] ?? '';
    $text = $about_me['about_me_text'] ?? '';
    $image = $about_me['image'] ?? '';
    $image_two = $about_me['second_image'] ?? '';

    // Get image URL
    if (is_array($image) && isset($image['url'])) {
        $img_url = $image['url'];
    } elseif (is_int($image)) {
        $img_url = wp_get_attachment_image_url($image, 'full');
    } elseif (is_string($image)) {
        $img_url = $image;
    } else {
        $img_url = '';
    }    
    
    // Get image two URL
    if (is_array($image_two) && isset($image_two['url'])) {
        $img_two_url = $image_two['url'];
    } elseif (is_int($image_two)) {
        $img_two_url = wp_get_attachment_image_url($image_two, 'full');
    } elseif (is_string($image_two)) {
        $img_two_url = $image_two;
    } else {
        $img_two_url = '';
    }

    ?>
    <div class="contact-banner relative pb-24 md:pb-32 pt-12">
      <div class="container mx-auto flex flex-col md:flex-row items-center gap-16 md:gap-8">
        <div class="flex-1 relative order-2 md:order-1">
          <?php if ($img_url): ?>
            <div>
              <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-[500px] h-[400px] object-cover rounded-lg shadow-lg">
            </div>
          <?php endif; ?>
          <?php if ($img_two_url): ?>
            <div class="flex-1 absolute -bottom-6 right-6">
              <img src="<?php echo esc_url($img_two_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-[200px] object-cover rounded-lg shadow-lg">
            </div>
          <?php endif; ?>
        </div> 
        <div class="flex-1 flex flex-col items-center md:items-start text-center md:text-left order-1 md:order-2">
          <?php if ($title): ?>
            <h2 class="text-3xl font-bold pb-4"><?php echo esc_html($title); ?></h2>
            <span class="block w-12 h-1 bg-seaGreen mb-4"></span>
          <?php endif; ?>
          <?php if ($text): ?>
            <p class="text-gray-800"><?php echo esc_html($text); ?></p>
          <?php endif; ?>
          <div class="pt-8">
            <a href="/contact" class="px-10 py-3 font-bold transition duration-300 uppercase w-max bg-pink text-green rounded-[25px] hover:bg-green hover:text-pink">
            Get in touch
            </a>
          </div>
        </div>
      </div>
    </div>
<?php
}
?>
