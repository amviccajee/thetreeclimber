<div class="container py-12 md:py-28">
  <div class="flex flex-col items-center mb-12 md:pb-20 text-center">
    <h2 class="text-4xl font-medium"><span class="text-seaGreen">Highlights</span> from our latest projects</h2>
    <span class="block w-28 h-1 bg-seaGreen my-6"></span>
    <p class="max-w-[70%]">Nulla et congue urna, nec porttitor ipsum. Mauris nulla neque, consectetur iaculis libero consectetur, ultricies accumsan nisl.</p>  
  </div>
  <?php 
    $gallery_post = get_field('gallery');

    if ($gallery_post) : 
      $gallery_content = $gallery_post->post_content;
      
      preg_match('/ids="([\d,]+)"/', $gallery_content, $matches);
      if (!empty($matches[1])) :
      $ids = explode(',', $matches[1]); ?>    
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
          <?php foreach ($ids as $id) : 
            $alt  = get_post_meta($id, '_wp_attachment_image_alt', true); ?>
            <a href="<?= esc_url(wp_get_attachment_image_url($id, 'full')) ?>" 
            class="glightbox block overflow-hidden rounded-lg" 
            data-title="<?= esc_attr($alt) ?>">
            <?php 
                echo wp_get_attachment_image($id, 'medium', false, [
                  'class' => 'w-full h-[200px] md:h-[300px] object-cover transform hover:scale-105 transition duration-300',
                  'alt'   => esc_attr($alt)
                ]); 
                ?>
            </a>
            <?php endforeach; ?>
          </div>
      <?php endif;
    endif; 
  ?>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        zoomable: true,
        maxHeight: '90vh', 
});
</script>