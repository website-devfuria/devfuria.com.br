$('article a').each(function () {
    if (location.hostname !== this.hostname) {
        $(this).addClass('link-externo').attr('target', "_blanck");
    }
});

