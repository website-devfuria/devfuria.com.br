hljs.initHighlightingOnLoad();

var furia = {
    init: function() {
        this.apontar_links_para_fora();
//            this.g();
    },
    apontar_links_para_fora: function() {
        $('a[title="link-externo"]').each(function() {
            $(this).attr('target', "_blanck");
        });
    },
    g: function() {
        $("#___gcse_0").addClass("hidden-phone");
    }
}.init();