<?php
/*
    Template Name: contact
*/?>

<div class="sm:grid grid-cols-12 sm:h-[500px] bg-purple py-16 sm:py-0 items-center">
    
    <div class="z-10 justify-center col-start-2 col-start-1 col-span-10 items-center">
        <div class="px-10 sm:px-0 contact z-10 sm:grid grid-cols-10 items-center">
            <div class="contact-left-content col-start-1 col-span-6">
                <h3 class="font-bold text-lime text-4xl pb-10 mr-12">Et si on travaillait <span class="contact-underline relative">ensemble ?</span></h3>
                <p class="text-lg text-white mb-8">N'hésitez pas à me contacter si vous avez des questions.</p>
                <div class="flex flex-wrap gap-2">
                <a href="tel:+33 7 49 85 06 07" class="sm:mr-4 phone group rounded-full flex gap-2 items-center bg-white w-max transition ease-in-out border-4 border-white pr-6 pl-1 pt-1 group pb-1 hover:border-4 hover:border-pea duration-300">
                    <div class="bg-lime rounded-full p-4 group-hover:bg-pea">
                        <svg class="icon" width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Mobile">
                                <path id="Rectangle 83" d="M12.8333 20.3333H15.1667M10 25H18C19.6569 25 21 23.6569 21 22V7C21 5.34315 19.6569 4 18 4H10C8.34315 4 7 5.34315 7 7V22C7 23.6569 8.34315 25 10 25Z" stroke="black" stroke-width="2" stroke-linecap="round"/>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm">Télephone</p>
                        <p class='font-bold'>+33 7 49 85 06 04</p>
                    </div>
                </a>
                <a href="mailto:contact.remibarre@gmail.com" class="email group rounded-full flex gap-2 items-center bg-white w-max transition ease-in-out border-4 border-white pr-6 pl-1 pt-1 pb-1 hover:border-4 hover:border-pea duration-300">
                    <div class="bg-lime rounded-full p-4 group-hover:bg-pea">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 29" fill="none">
                            <path d="M4.66669 8.66705L12.2 14.317C13.2667 15.117 14.7334 15.117 15.8 14.317L23.3334 8.66699" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="3.5" y="6.33301" width="21" height="16.3333" rx="2" stroke="black" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm">E-mail</p>
                        <p class='font-bold'>contact.remibarre@gmail.com</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-start-8 row-start-1 col-span-3 pt-10 sm:pt-0 sm:m-[-18px] items-center">
            <img class="sm:h-full sm:w-80" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/contact.png" alt="Description of the image">
        </div>
    </div>
</div>
        
    <div class="hidden sm:visible h-[500px] overflow-hidden background sm:grid grid-cols-12 absolute">
        <div class="col-span-9 overflow-hidden h-full relative">
            <div class="overflow-hidden h-full w-full bg-dark-blue z-12 absolute opacity-80"></div>
            <img class="h-full object-cover w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/sea.jpg" alt="Description of the image">
        </div>
        <div class="col-span-3 h-full object-cover relative">
            <div class="overflow-hidden h-full w-full bg-lime z-12 absolute opacity-80"></div>
            <img class=" h-full object-cover w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/src/media/ocean.png" alt="Description of the image">
        </div>
    </div>

</div>