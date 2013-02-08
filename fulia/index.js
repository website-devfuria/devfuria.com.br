$(document).ready(function() {

    var ajax = {
        read: function(callback){
            $.post("crudMaterias.php", "ac=select", function(resposta){
                callback(resposta);
            });
        },
        readTotalRegis: function(callback){
            $.post("crudMaterias.php", "ac=total", function(resposta){
                callback(resposta);
            });
        },
        create: function(materia, callback){
            $.post("crudMaterias.php", "ac=insert" + materia, function(resposta){
                callback(resposta);
            });
        },
        update: function(materia, callback){
            $.post("crudMaterias.php", "ac=update" + materia, function(resposta){
                callback(resposta);
            });
        },
        delete_: function(id, callback){
            $.post("crudMaterias.php", "ac=delete&id=" + id, function(resposta){
                callback(resposta);
            });
        }
    }


    var materias = {
        registros: [],
        total_registros: 0,

        init: function(){
            this.setRegistros();

        },
        get: function(chave){
            return this.registros[chave];
        },
        setRegistros: function(){
            var me = this;
            ajax.read(function(resp){
                me.registros = JSON.parse(resp);
                ajax.readTotalRegis(function(total){
                    me.total_registros = total;
                });
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
        limpar: function(){
            this.id.val("");
            this.url.val("")
            this.titulo.val("")
            this.resumo.val("")
            this.keywords.val("")
            this.nivel.val("")
            this.secao.val("")
            this.autor.val("")
            this.dt_criacao.val("")
            this.dt_atualizacao.val("")
            this.ordem.val("")
        },
        ligarEstadoAlteracao: function(){
            $('input').unbind().change(function(){
                acao.alterando();
            })
        },
        deligarEstadoAlteracao: function(){
            $('input').unbind();
        },
        getMateria: function(){
            var materia = {};

            materia.id             = this.id.val();
            materia.url            = this.url.val();
            materia.titulo         = this.titulo.val();
            materia.resumo         = this.resumo.val();
            materia.keywords       = this.keywords.val();
            materia.nivel          = this.nivel.val();
            materia.secao          = this.secao.val();
            materia.autor          = this.autor.val();
            materia.dt_criacao     = this.dt_criacao.val();
            materia.dt_atualizacao = this.dt_atualizacao.val();
            materia.ordem          = this.ordem.val();

            return materia;
        }
    };

    var ctrPercorre = {
        registro_atual: -1,
        btnDir: $("#ctr-percorre-dir"),
        btnEsq: $("#ctr-percorre-esq"),
        init: function(){
            this.setBtnDir();
            this.setBtnEsq();
        },
        setBtnDir: function(regis){
            var me = this;
            this.btnDir.click(function(event){
                event.preventDefault();
                if(me.registro_atual < (materias.total_registros-1) ){
                    me.registro_atual = me.registro_atual+1;
                    ctrForm.bind( materias.get(me.registro_atual) );
                    acao.visualizando();
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
                    acao.visualizando();
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
            this.btnNovo.addClass("disabled");           // desliga btn novo
            this.btnSalvar.removeClass("disabled");      // liga    btn salvar
            this.btnCancelar.addClass("disabled");       // desliga btn cancelar
            this.btnExcluir.addClass("disabled");        // desliga btn excluir

            this.setButtonSalvar_insert();               // evento  salvar
            ctrForm.deligarEstadoAlteracao();
        },
        alterando: function(){
            this.btnNovo.addClass('disabled');           // desliga btn novo
            this.btnSalvar.removeClass("disabled");      // liga    btn salvar
            this.btnCancelar.removeClass("disabled");    // liga    btn cancelar
            this.btnExcluir.addClass("disabled");        // desliga btn excluir


            this.setButtonSalvar_update();               // evento  salvar
            this.setButtonCancelar();                    // evento  cancelar
        },
        visualizando: function(){
            this.btnNovo.removeClass('disabled');        // liga    btn novo
            this.btnSalvar.addClass("disabled").unbind();// desliga btn salvar
            this.btnCancelar.addClass("disabled");       // desliga btn cancelar
            this.btnExcluir.removeClass("disabled");     // liga    btn excluir

            this.setButtonNovo();                        // evento  novo
            this.setButtonExcluir()                      // evento  excluir
            ctrForm.ligarEstadoAlteracao();
        },
        setButtonNovo: function(){
            var me = this;

            this.btnNovo.unbind().click(function(event){
                event.preventDefault();
                ctrForm.limpar();
                ctrForm.deligarEstadoAlteracao();
                me.inserindo();
            });
        },
        setButtonSalvar_insert: function(){
            var me = this;

            this.btnSalvar.unbind().click(function(event){
                event.preventDefault();
                ajax.create( "&materia="+JSON.stringify( ctrForm.getMateria() ), function(lastInsertId){
                    materias.setRegistros();                                    // atualizar array
                    ctrPercorre.registro_atual = materias.total_registros-1;    // ir para último regis
                    me.visualizando();                                          // ajustar controles
                    ctrForm.id.val(lastInsertId);
                });
            });
        },
        setButtonSalvar_update: function(){
            var me = this;

            this.btnSalvar.unbind().click(function(event){
                event.preventDefault();
                ajax.update( "&materia="+JSON.stringify( ctrForm.getMateria() ), function(){
                    me.visualizando();                                          // ajustar controles
                });
            });
        },
        setButtonCancelar: function(){
            var me = this;

            this.btnCancelar.unbind().click(function(event){
                event.preventDefault();
                ctrForm.bind(  materias.get(ctrPercorre.registro_atual)  );
                me.visualizando();
            });

        },
        setButtonExcluir: function(){
            var me = this;

            this.btnExcluir.unbind().click(function(event){
                event.preventDefault();
                ajax.delete_( ctrForm.getMateria().id , function(){
                    materias.setRegistros();            // atualizar array
                    ctrPercorre.registro_atual = -1;    // reiniciar (novo)
                    ctrForm.limpar();                   // reiniciar
                    ctrForm.deligarEstadoAlteracao();
                    me.inserindo();
                });
            });
        }
    }
    acao.init();
});