jQuery(document).ready(function( $ ) {

    // Mobile Menu
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $('body').toggleClass('menu-open');
    });  
    
    // Cookie Popup
    var gdprnotice = localStorage.getItem('gdprnotice');
    if (gdprnotice == null) {
        $('.tfk_cookie-consent').fadeIn("slow");
    }
    $('.tfk_cookie-consent button').on('click', function(e) {
        $('.tfk_cookie-consent').fadeOut("slow");
        localStorage.setItem('gdprnotice', 1);
        e.preventDefault();
    });
    
});