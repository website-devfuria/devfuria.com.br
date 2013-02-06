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
        retMateria: function(chave){
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

        bind: function(materia){
            this.id.val(materia.id);
            this.url.val(materia.url);
            this.titulo.val(materia.titulo);
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
                    ctrForm.bind( materias.retMateria(me.registro_atual) );
                }
            });
        },
        setBtnEsq: function(regis){
            var me = this;
            this.btnEsq.click(function(event){
                event.preventDefault();
                if(me.registro_atual > 0){
                    me.registro_atual = me.registro_atual-1;
                    ctrForm.bind( materias.retMateria(me.registro_atual) );
                }
            });
        }
    };
    ctrPercorre.init();


});