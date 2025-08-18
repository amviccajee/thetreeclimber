<?php
  $image_groups = [
    'image_with_text',
    'image_with_text_two',
    'image_with_text_three',
  ];
?>
<div class="container pt-10">
  <div class="text-center py-6">
    <h2 class="text-4xl pb-6">We specialise in</h2>
    <p>Nulla et congue urna, nec porttitor ipsum. Mauris nulla neque, consectetur iaculis libero consectetur, ultricies accumsan nisl.</p>  
  </div>
  <div class="flex gap-4">
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
    <div class="flex flex-col items-center bg-lightGrey ">
      <div class="relative w-full">
        <?php if ($image_url): ?>
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full object-cover p-4 h-[300px]">
        <?php endif; ?>
      </div>
      <div class="image-textrounded-b-lg p-4">
        <?php if ($title): ?>
          <h2 class="w-full text-xl">
            <?php echo esc_html($title); ?>
          </h2>
        <?php endif; ?>
        <span class="block w-48 h-1 bg-seaGreen my-2"></span>
        <?php if ($information): ?>
          <p class="font-thin"><?php echo esc_html($information); ?></p>
        <?php endif; ?>
      </div>
    </div>
  <?php
    }
    }
  ?>
  </div>
</div>