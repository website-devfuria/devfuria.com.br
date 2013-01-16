var furia = {
    init: function(){
        this.feedback_form_action();
        this.apontar_links_para_fora();
        this.g();
        this.inicializar_tree_view();
    },
    feedback_form_action: function(){
        $("#form-feedback").submit(function(event){
            event.preventDefault();

            var dataToSend = $(this).serialize();
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: DF.base_path + "furia/ajax/feedback-form-action-ajax.php",
                data: dataToSend,
                success: function(erro){
                    if( ! erro ){
                        $('#form-feedback').toggle('slow', function(){
                            $('#form-feedback').html('<h1>Obrigado!</h1><p>Feedback enviado com sucesso!</p>').show(600);
                        });
                    } else {
                        alert(erro);
                        event.preventDefault();
                    }
                },
                error: function(){
                    alert("Sorry main, houve um erro no Ajax!!!");
                }
            });
        });
    },
    apontar_links_para_fora: function(){
        $('a', 'article').each(function(){
            $(this).attr('target', "_blanck");
        });
    },
    g: function(){
      $("#___gcse_0").addClass("hidden-phone");
    },
    inicializar_tree_view: function(){
        $("#browser").treeview({
            animated: "slow",
            control: "#treecontrol"
        });
    }
}.init();