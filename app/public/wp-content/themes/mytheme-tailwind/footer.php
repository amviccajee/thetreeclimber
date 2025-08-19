</main>

<?php
$personal_details = get_field('personal_details');

if ($personal_details) {
    $email   = $personal_details['email'] ?? '';
    $number  = $personal_details['number'] ?? '';
    $address = $personal_details['address'] ?? '';
}
?>

<footer class="bg-green text-white">
  <div class="container py-10">
    <!-- Flex container: left = details, right = map -->
    <div class="flex flex-col md:flex-row justify-between gap-8">
      
      <!-- Left column: contact details -->
      <div class="pt-8 flex flex-col gap-4 md:w-1/2">
        <div class="personal-details space-y-4">
          <a href="/contact" class="text-white hover:text-pink hover:underline">
            Contact
          </a>
          <?php if (!empty($email)): ?>
              <p class="hover:underline hover:text-pink">
                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
              </p>
          <?php endif; ?>
          <?php if (!empty($number)): ?>
              <p class="hover:underline hover:text-pink">
                <a href="tel:<?php echo esc_attr($number); ?>"><?php echo esc_html($number); ?></a>
              </p>
          <?php endif; ?>
          <?php if (!empty($address)): ?>
              <p><?php echo esc_html($address); ?></p>
          <?php endif; ?>
        </div>
        <p class="text-small">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
      </div>
      <div class="md:w-1/2">
        <div class="overflow-hidden">
          <?php echo do_shortcode('[wpgmza id="1"]'); ?>
        </div>
      </div>
    </div> 
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
