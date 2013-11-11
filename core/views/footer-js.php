<script src="<?php echo LINKS_PATH; ?>/core/assets/js/jquery.js"></script>
<script src="<?php echo LINKS_PATH; ?>/core/dist/js/bootstrap.js"></script>

<!--<script src="http://platform.twitter.com/widgets.js"></script>-->
<script src="<?php echo LINKS_PATH; ?>/core/assets/js/holder.js"></script>
<script src="<?php echo LINKS_PATH; ?>/core/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="<?php echo LINKS_PATH; ?>/core/assets/js/application.js"></script>
<script type="text/javascript">
    var furia = {
        init: function() {
            this.apontar_links_para_fora();
//            this.g();
        },
        apontar_links_para_fora: function() {
            $('a', '#materia').each(function() {
                $(this).attr('target', "_blanck");
            });
        },
        g: function() {
            $("#___gcse_0").addClass("hidden-phone");
        }
    }.init();


</script>