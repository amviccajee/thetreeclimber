<?php
/*
    Template Name: project
*/
?>

<?php get_header(); ?>

<?php
    $pro_colour = get_field('project_page_colour');
    $pro_name = get_field('project_hero_title');
    $pro_description = get_field('project_hero_description');
    $pro_context = get_sub_field('context');
    $pro_image = get_field('project_hero_image');
    $tags = get_field('tags');
    $carousel_content = get_field('ux_research_carousel');

    $large_image_block = get_field('large_image_block');
    $large_image_block_image_id = $large_image_block['large_image_block_image'];
    $large_image_block_image_url = wp_get_attachment_image_url($large_image_block_image_id, 'full');


    $item_one = ($carousel_content['item_one']);
    $item_one_image_id = $item_one['item_one_image'];
    $item_one_image_url = wp_get_attachment_image_url($item_one_image_id, 'full');
    $item_one_title = $item_one['item_one_title'];
    $item_one_text = $item_one['item_one_text'];

    $item_two = ($carousel_content['item_two']);
    $item_two_image_id = $item_two['item_two_image'];
    $item_two_image_url = wp_get_attachment_image_url($item_two_image_id, 'full');
    $item_two_title = $item_two['item_two_title'];
    $item_two_text = $item_two['item_two_text'];


    $item_three = ($carousel_content['item_three']);
    $item_three_image_id = $item_three['item_three_image'];
    $item_three_image_url = wp_get_attachment_image_url($item_three_image_id, 'full'); 
    $item_three_title = $item_three['item_three_title'];
    $item_three_text = $item_three['item_three_text'];

    $item_four = ($carousel_content['item_four']);
    $item_four_image_id = $item_four['item_four_image'];
    $item_four_image_url = wp_get_attachment_image_url($item_four_image_id, 'full'); 
    $item_four_title = $item_four['item_four_title'];
    $item_four_text = $item_four['item_four_text'];

    $content_blocks = get_field('content_blocks');

    $single_image = get_field('single_image');

?>

<section class="project-page primary-font sm:pb-16 <?php echo esc_html($pro_colour); ?>">
    <div class="project-hero">
        <a class='block flex gap-4 items-center container pt-4 hover:text-baby-salmon duration-300' href='<?php echo home_url();?>'>
            <img class="h-4 rounded-full" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/arrow-left.svg" alt="Description of the image">
            <div class="text-2xl">Home</div>
        </a>
        <div class="sm:flex gap-10 items-center justify-center pb-10 pt-6 container">
            <div class='flex-1 pb-8 sm:pb-0'>
                <?php if (!empty($pro_image)) : ?>
                    <div>
                        <img class="rounded-3xl" src="<?php echo esc_url($pro_image['url']); ?>" alt="<?php echo esc_attr($pro_image['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>

            <div class="flex-1">
                <?php if (!empty($pro_name)) : ?>
                    <h2 class="project-title text-4xl pb-10 font-bold"><?php echo esc_html($pro_name); ?></h2>
                <?php endif; ?>
                <div class="flex pb-10 gap-10 wrap">
                <?php
                    $checkbox_values = get_field('tags');
                    if (!empty($checkbox_values) && is_array($checkbox_values)) {
                        echo '<ul class="flex gap-4 flex-wrap">';
                        foreach ($checkbox_values as $value) {
                            ?>
                                <li class='text-lg tags'><?php echo esc_html($value) ?></li>
                            <?php
                        }
                        echo '</ul>';
                    } else {
                        echo '<p>No options selected.</p>';
                    }
                ?>
                </div>
                <?php if (!empty($pro_description)) : ?>
                    <h3 class="pb-2 font-bold text-xl">Contexte</h3>
                    <p class="project-description pb-10"><?php echo esc_html($pro_description['context']); ?></p>
                    <h3 class="pb-2 font-bold text-xl">Problème</h3>
                    <p class="project-description pb-10"><?php echo esc_html($pro_description['problem']); ?></p>
                    <h3 class="pb-2 font-bold text-xl">Solution</h3>
                    <p class="project-description pb-10"><?php echo esc_html($pro_description['solution']); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php if (!empty($large_image_block['large_image_block_image']['url']) && is_array($large_image_block)) : ?>
        <?php if (!empty($large_image_block['large_image_block_title'])) : ?>
            <div class="process container pb-10 pt-20">
                <h2 class="title text-3xl pb-10 text-center font-bold"><?php echo esc_html($large_image_block['large_image_block_title']); ?></h2>
            <?php endif; ?>
            <?php if (!empty($large_image_block['large_image_block_text'])) : ?>
                <p class="pb-4"><?php echo esc_html($large_image_block['large_image_block_text']); ?></p>
            <?php endif; ?>
            <?php if (!empty($large_image_block['large_image_block_image']['url'])) : ?>
                <div class="flex align-center justify-center">
                    <img class="h-auto w-auto object-cover" src="<?php echo esc_url($large_image_block['large_image_block_image']['url']); ?>"/>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php 
    if (
        (!empty($item_one_title) || !empty($item_one_text) || !empty($item_one_image_url)) ||
        (!empty($item_two['item_two_image']['url']) || !empty($item_two_title) || !empty($item_two_text)) ||
        (!empty($item_three['item_three_image']['url']) || !empty($item_three_title) || !empty($item_three_text)) ||
        (!empty($item_four['item_four_image']['url']) || !empty($item_four_title) || !empty($item_four_text))
    ): 
    ?>
    <div class="design-process-bg pt-20 pb-24">
        <div class="design-process container">
            <h2 class="title text-3xl pb-10 text-center font-bold">UX Research</h2>
            <div class="slider">
                <?php if (!empty($item_one_title) || !empty($item_one_text) || !empty($item_one_image_url)) : ?>
                    <div class="slide">
                        <div class="sm:flex items-center justify-center">
                            <div class="flex-1 flex justify-center align-center pb-8 sm:pb-0">
                                <img class="h-96 w-auto object-cover rounded-3xl" src="<?php echo esc_url($item_one_image_url); ?>" alt="<?php echo esc_attr($item_one_image['alt'] ?? ''); ?>" />
                            </div>
                            <div class="flex-1 mr-4">
                                <h3 class="pb-5 text-2xl text-dark-grey text-bold"><?php echo esc_html($item_one_title); ?></h3>
                                <p class="pb-10"><?php echo esc_html($item_one_text); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($item_two['item_two_image']['url']) || !empty($item_two_title) || !empty($item_two_text)) : ?>
                    <div class="slide">
                        <div class="sm:flex items-center justify-center">
                            <div class="flex-1 flex justify-center align-center pb-8 sm:pb-0">
                                <img class="h-96 w-auto object-cover rounded-3xl" src="<?php echo esc_url($item_two['item_two_image']['url']); ?>" alt="<?php echo esc_attr($item_two['item_two_image']['alt'] ?? ''); ?>">
                            </div>
                            <div class="flex-1 mr-4">
                                <h3 class="pb-5 text-2xl"><?php echo esc_html($item_two_title); ?></h3>
                                <p class="pb-10"><?php echo esc_html($item_two_text); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($item_three['item_three_image']['url']) || !empty($item_three_title) || !empty($item_three_text)) : ?>
                    <div class="slide">
                        <div class="sm:flex items-center justify-center">
                            <div class="flex-1 flex justify-center align-center pb-8 sm:pb-0">
                                <img class="h-96 w-auto object-cover rounded-3xl" src="<?php echo esc_url($item_three['item_three_image']['url']); ?>" alt="<?php echo esc_attr($item_three['item_three_image']['alt'] ?? ''); ?>">
                            </div>
                            <div class="flex-1 mr-4">
                                <h3 class="pb-5 text-2xl font-bold"><?php echo esc_html($item_three_title); ?></h3>
                                <p class="pb-10"><?php echo esc_html($item_three_text); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($item_four['item_four_image']['url']) || !empty($item_four_title) || !empty($item_four_text)) : ?>
                    <div class="slide">
                        <div class="sm:flex items-center justify-center">
                            <div class="flex-1 flex justify-center align-center pb-8 sm:pb-0">
                                <img class="h-96 w-auto object-cover rounded-3xl" src="<?php echo esc_url($item_four['item_four_image']['url']); ?>" alt="<?php echo esc_attr($item_four['item_four_image']['alt'] ?? ''); ?>">
                            </div>
                            <div class="flex-1 mr-4">
                                <h3 class="pb-5 text-2xl"><?php echo esc_html($item_four_title); ?></h3>
                                <p class="pb-10"><?php echo esc_html($item_four_text); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>




    <div class="container content-blocks pt-10">
        <h2 class="title text-3xl pb-10 text-center text-dark-grey font-bold">UI Maquettes</h2>

        <?php
        if ($content_blocks && is_array($content_blocks)) {
        foreach ($content_blocks as $block_key => $block) {
            ?>
            <div class="content-block sm:flex gap-10 py-6 <?php echo esc_attr($block_key) ?>">
                <div class="content-block-text flex-1 flex justify-center flex-col">
                    <?php
                        // Output the title
                        if (isset($block['Title']) || isset($block['title'])) {
                            ?>
                                <h3 class="text-2xl pb-5 font-bold"><?php echo esc_html($block['Title'] ?? $block['title']) ?></h3>
                            <?php
                        }
            
                        if (isset($block['Text']) || isset($block['text'])) {
                            ?>
                                <p><?php echo esc_html($block['Text'] ?? $block['text']) ?></p>
                            <?php
                        }
                    ?>
                </div>
                <div class="content-block-image flex-1">
                    <?php
                        if (isset($block['image'])) {
                            if (is_array($block['image']) && isset($block['image']['url'])) {
                                echo "<img src='" . esc_url($block['image']['url']) . "' alt='" . esc_attr($block['image']['alt'] ?? '') . "' width='" . esc_attr($block['image']['width']) . "' height='" . esc_attr($block['image']['height']) . "' />";
                            } elseif (is_int($block['image'])) {
                                // Get image details if it's an attachment ID
                                $image = wp_get_attachment_image_src($block['image'], 'full');
                                if ($image) {
                                    echo "<img src='" . esc_url($image[0]) . "' width='" . esc_attr($image[1]) . "' height='" . esc_attr($image[2]) . "' />";
                                }
                            }
                        }
                    ?>
            </div>
            <?php
                echo "</div>";
            }
            } else {
                echo "<p>No content blocks found.</p>";
            }
        ?>
    </div>
    <?php if (!empty($single_image)) : ?>
        <div class="sinlge-image flex justify-center items-center py-10 container">
            <img src="<?php echo esc_url($single_image['url']); ?>" alt="<?php echo esc_attr($single_image['alt']); ?>" />
        </div>
    <?php endif; ?>



</section>

<section class="contact relitive content primary-font mt-6">
  <?php get_template_part( 'contact' ); ?>
</section>

<a id="go-top" class="go-top">
  <img class="h-10 rounded-3xl" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/top.svg" alt="Description of the image">
</a>

<?php get_footer(); ?>
