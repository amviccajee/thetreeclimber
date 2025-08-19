<?php
  $image_groups = [
    'image_with_text',
    'image_with_text_two',
    'image_with_text_three',
  ];
?>
<div class="container pt-12 pb-12 md:pt-24 md:pb-28">
  <div class="flex flex-col items-center pb-12 md:pb-20 text-center">
    <h2 class="text-4xl pb-6 font-medium">We are <span class="text-seaGreen">Experts</span> in</h2>
    <p class="max-w-[70%] text-textGrey">Nulla et congue urna, nec porttitor ipsum. Mauris nulla neque, consectetur iaculis libero consectetur, ultricies accumsan nisl.</p>  
  </div>
  <div class="flex flex-col md:flex-row gap-6">
  <?php
    foreach ($image_groups as $group_name) {
    $item = get_field($group_name);
    if ($item) {
      $title = $item['title'] ?? '';
      $information = $item['information'] ?? '';
      $image = $item['image'] ?? '';    
      if (is_array($image)) {
          $image_url = $image['url'] ?? '';
      } elseif (is_int($image)) {
          $image_url = wp_get_attachment_image_url($image, 'full');
      } else {
          $image_url = '';
      }
    ?>
    <div class="flex flex-col items-center bg-lightGrey rounded-[32px] group">
      <div class="relative w-full">
        <?php if ($image_url): ?>
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full object-cover p-4 h-[300px] rounded-[32px]">
        <?php endif; ?>
      </div>
      <div class="image-text rounded-b-lg p-5">
        <?php if ($title): ?>
          <h2 class="w-full text-xl pb-6 font-medium">
            <?php echo esc_html($title); ?>
          </h2>
        <?php endif; ?>
        <span class="block w-12 h-1 bg-seaGreen"></span>
        <?php if ($information): ?>
          <p class="pt-6 pb-3 text-textGrey"><?php echo esc_html($information); ?></p>
        <?php endif; ?>
      </div>
    </div>
  <?php
    }
    }
  ?>
  </div>
</div>