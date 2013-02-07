$(document).ready(function() {

    var ajax = {
        read: function(dados, callback){
            $.post("crudMaterias.php", dados, function(resposta){
                callback(resposta);
            });
        }
    }


    var materias = {
        registros: [],

        init: function(){
            this.setRegistros();

        },
        get: function(chave){
            return this.registros[chave];
        },
        setRegistros: function(){
            var me = this;
            ajax.read("", function(resp){
                me.registros = JSON.parse(resp);
            });
        }
    }
    materias.init();


    var ctrForm = {
        id: $("#frm-id"),
        url: $("#frm-url"),
        titulo: $("#frm-titulo"),
        resumo: $("#frm-resumo"),
        keywords: $("#frm-keywords"),
        nivel: $("#frm-nivel"),
        secao: $("#frm-secao"),
        autor: $("#frm-autor"),
        dt_criacao: $("#frm-dt-criacao"),
        dt_atualizacao: $("#frm-dt-atualizacao"),
        ordem: $("#frm-ordem"),

        bind: function(materia){
            this.id.val(materia.id);
            this.url.val(materia.url);
            this.titulo.val(materia.titulo);
            this.resumo.val(materia.resumo);
            this.keywords.val(materia.keywords);
            this.nivel.val(materia.nivel);
            this.secao.val(materia.secao);
            this.autor.val(materia.autor);
            this.dt_criacao.val(materia.dt_criacao);
            this.dt_atualizacao.val(materia.dt_atualizacao);
            this.ordem.val(materia.ordem);
        },
        setButtonsInsert: function(){
            console.log("insert");
        },
        setButtonsUpdate: function(){
            console.log("update");
        }
    };

    var ctrPercorre = {
        total_registros: 0,
        registro_atual: -1,
        btnDir: $("#ctr-percorre-dir"),
        btnEsq: $("#ctr-percorre-esq"),
        init: function(){
            this.setBtnDir();
            this.setBtnEsq();
            this.setTotalRegistros();
        },
        setTotalRegistros: function(){
            this.total_registros = 8;
        },
        setBtnDir: function(regis){
            var me = this;
            this.btnDir.click(function(event){
                event.preventDefault();
                if(me.registro_atual < (me.total_registros-1) ){
                    me.registro_atual = me.registro_atual+1;
                    ctrForm.bind( materias.get(me.registro_atual) );
                    acao.atualizando();
                }
            });
        },
        setBtnEsq: function(regis){
            var me = this;
            this.btnEsq.click(function(event){
                event.preventDefault();
                if(me.registro_atual > 0){
                    me.registro_atual = me.registro_atual-1;
                    ctrForm.bind( materias.get(me.registro_atual) );
                    acao.atualizando();
                }
            });
        }
    };
    ctrPercorre.init();

    var acao = {
        btnNovo: $("#ctr-acao-novo"),
        btnSalvar: $("#ctr-acao-salvar"),
        btnCancelar: $("#ctr-acao-cancelar"),
        btnExcluir: $("#ctr-acao-excluir"),
        init: function(){
            this.inserindo();
        },
        inserindo: function(){
            this.btnSalvar.removeClass("disabled");
            this.setButtonSalvar();
            this.btnExcluir.addClass("disabled");
        },
        atualizando: function(){
            this.setButtonNovo();
            this.btnNovo.removeClass('disabled');
            this.btnExcluir.removeClass("disabled");
        },
        setButtonNovo: function(){
            var me = this;
            
            this.btnNovo.unbind().click(function(){
                console.log("reset form");
                $(this).addClass('disabled').unbind();
                me.inserindo();
            });
        },
        setButtonSalvar: function(){
            var me = this;
            
            this.btnSalvar.click(function(event){
                event.preventDefault();
                console.log("salvou form");
                $(this).addClass("disabled").unbind().click(function(e){e.preventDefault()});
                me.atualizando();
            });
        }
    }
    acao.init();
});