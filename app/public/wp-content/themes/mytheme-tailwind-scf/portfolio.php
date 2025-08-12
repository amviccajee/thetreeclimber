<?php
/*
    Template Name: portfolio
*/
?>

<?php 
    wp_head(); include('header.php');
?>

<div class="sm:grid grid-cols-12 sm:h-[400px] py-16 sm:py-0 relative primary-font">
    
    <div class="flex justify-center col-start-2 col-span-10 items-center">
        <div class="contact container flex z-10 items-center">
            <div class="contact-left-content flex-1">
                <h2 class="text-dark-blue text-5xl font-bold pb-6 mr-12">Mon <span class="portfolio-title relative">Portfolio</span></h2>
                <hr class="w-28 h-1 my-2 bg-salmon border-0 rounded">
                <p class="text-dark-grey text-2xl pt-4">Voilà une sélection de projets sur lesquels j’ai travaillé, parfois en combinant ux et ui.</p>
            </div>
        </div>
    </div>
        
    <div class="hidden sm:block h-[400px] background col-span-12 absolute h-full w-full">
        <div class="h-full w-full z-12 absolute opacity-70 bg-gradient-to-r from-white to-lime"></div>
        <img class="h-full object-cover w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/desk.png" alt="Description of the image">
    </div>

</div>

<?php 
    get_template_part( 'projects' ); 
?>

<?php 
    get_template_part( 'contact' ); 
?>

<?php 
    wp_head(); include('footer.php');
?>