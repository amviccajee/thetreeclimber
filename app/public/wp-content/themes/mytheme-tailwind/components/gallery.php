<div class="container">
  <div class="text-center py-6">
    <h2 class="text-4xl pb-6">Some recent highlights</h2>
    <p>Nulla et congue urna, nec porttitor ipsum. Mauris nulla neque, consectetur iaculis libero consectetur, ultricies accumsan nisl.</p>  
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
                // Outputs responsive <img> with srcset for Retina
                echo wp_get_attachment_image($id, 'medium', false, [
                  'class' => 'w-full h-[300px] object-cover transform hover:scale-105 transition duration-300',
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
        maxHeight: '90vh', // limits image height to 90% of viewport
    });
});
</script>