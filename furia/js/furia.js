var furia = {
    init: function(){
        this.bind_form_feedback();
        this.apontar_links_para_fora();
        this.g();
        this.inicializar_tree_view();
    },
    bind_form_feedback: function(){
        $("#form-feedback").submit(function(event){
            event.preventDefault();

            var dataToSend = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "../../../../furia/send_mail.php",
                data: dataToSend,
                success: function(data){
                    if(data != "fail"){
                        $('#form-feedback').toggle('slow', function(){
                            $('#form-feedback').html('<h1>Obrigado!</h1><p>Feedback enviado com sucesso!</p>').show(600);
                        });
                    } else {
                        alert("Sorry main, não conseguimos enviar seu feedback!!!");
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
      console.log('foi');
    },
    inicializar_tree_view: function(){
        $("#browser").treeview({
            animated: "slow",
            control: "#treecontrol"
        });
    }
}.init();