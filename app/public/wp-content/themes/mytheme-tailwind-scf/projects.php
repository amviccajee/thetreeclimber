<?php
/*
    Template Name: projects
*/
?>

<?php

$args = [
    'post_type'      => 'project',    // Querying the 'project' post type
    'posts_per_page' => -1,           // Get all projects
    'post_status'    => 'publish',    // Only published projects
];

$project_query = new WP_Query($args);
?>


<section class="projects primary-font py-8 sm:pt-24 sm:pb-32">
    <div class='container'>

        <div class="md:grid grid-cols-3 grid-rows-2 gap-8">
            <?php

        if ($project_query->have_posts()) :
            while ($project_query->have_posts()) : $project_query->the_post();

                $project_name = get_field('project_project_name');
                $project_description = get_field('project_project_description');
                $project_image = get_field('project_project_image');
                $project_url = get_field('project_project_url');

                ?>
                <a 
                <?php if (!empty($project_url['url'])): ?> 
                        href="<?php echo esc_url($project_url['url']); ?>" 
                        target="<?php echo esc_attr($project_url['target'] ?? '_self'); ?>" 
                    <?php endif; ?> 
                    class="mb-4 sm:mb-0 block p-10 group project-item rounded-3xl text-white"
                >
                    <div class="flex justify-between">
                        <div>
                            <?php if (!empty($project_name)) : ?>
                                <h2 class="project-title font-bold text-lg"><?php echo esc_html($project_name); ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($project_description)) : ?>
                                <p class="project-description text-white"><?php echo esc_html($project_description); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="bg-white arrow rounded-full flex justify-center items-center w-12 h-12">
                            <img class="w-4 h-4" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/arrow.svg" alt="Description of the image">
                        </div>
                    </div>
                    <?php if (!empty($project_image)) : ?>
                        <div class="flex items-center justify-center project-image py-20 transition ease-in-out delay-150 bg-blue-500 group-hover:-translate-y-1 group-hover:scale-110 group-hover:bg-indigo-500 duration-300">
                            <img class="sm:h-[330px] sm:w-[300px] h-auto object-cover rounded-3xl" src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_image['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                </a>
        <?php
            endwhile;
            echo '</div>';
        else :
            echo '<p>No projects found.</p>';
        endif;

        wp_reset_postdata();
        ?>


    </div>
</section>


