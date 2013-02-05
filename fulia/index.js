$(document).ready(function() {

    var materias = {
        registros: [],

        init: function(){
            this.setRegistros();

        },
        setRegistros: function(){
            this.registros[1] = {id:1, url:"primeira"};
            this.registros[2] = {id:2, url:"segunda"};
            this.registros[3] = {id:3, url:"terceira"};
        },
        retMateria: function(id){
            return this.registros[id];
        }
    }
    materias.init();


    var ctrPercorre = {
        total_registros: 0,
        registro_atual: 0,
        btnDir: $("#ctr-percorre-dir"),
        btnEsq: $("#ctr-percorre-esq"),
        init: function(){
            this.setBtnDir();
            this.setBtnEsq();
            this.setTotalRegistros();
        },
        setTotalRegistros: function(){
            this.total_registros = 3;
        },
        setBtnDir: function(){
            var me = this;
            this.btnDir.click(function(event){
                event.preventDefault();
                if(me.registro_atual < me.total_registros){
                    me.registro_atual = me.registro_atual+1;
                    console.log(materias.retMateria(me.registro_atual).url);
                }
            });
        },
        setBtnEsq: function(){
            var me = this;
            this.btnEsq.click(function(event){
                event.preventDefault();
                if(me.registro_atual > 1){
                    me.registro_atual = me.registro_atual-1;
                    console.log(me.registro_atual);
                    //console.log(materias.retMateria(me.registro_atual).url);
                }
            });
        }
    };
    ctrPercorre.init();


});