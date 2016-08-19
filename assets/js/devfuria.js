var furia = {
    init: function () {
        this.apontar_links_para_fora();
    },
    apontar_links_para_fora: function () {
        $('a[title="link-externo"]').each(function () {
            $(this).attr('target', "_blanck")
                    .addClass("link-externo");
        });
    }
}.init();


//
// Navbar
// http://stackoverflow.com/questions/23315031/how-to-create-a-hidden-navbar-with-bootstrap-that-shows-after-you-scroll
//
(function ($) {
    $(document).ready(function () {
        $(".navbar").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 10) {
                    $('.navbar').fadeIn();
                } else {
                    $('.navbar').fadeOut();
                }
            });
        });
    });
}(jQuery));