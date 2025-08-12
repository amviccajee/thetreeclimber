

(function($) {
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.go-top').fadeIn(200);
            } else {
                $('.go-top').fadeOut(200);
            }
        });
        
        $('.go-top').click(function(event) {
            event.preventDefault();
            
            $('html, body').animate({scrollTop: 0}, 300);
        });
    });
})(jQuery);

document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('scrollButton');

    button.addEventListener('click', () => {
        // Get the target ID from the button's data attribute
        const targetId = button.getAttribute('data-target');
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            // Scroll to the target element smoothly
            targetElement.scrollIntoView({ behavior: 'smooth' });
        } else {
            console.error(`Element with ID "${targetId}" not found.`);
        }
    });
});
