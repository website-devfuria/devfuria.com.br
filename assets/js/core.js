var furia = {
    init: function() {
        this.apontar_links_para_fora();
    },
    apontar_links_para_fora: function() {
        $('a[title="link-externo"]').each(function() {
            $(this).attr('target', "_blanck");
        });
    }
}.init();