if ($("#dt_validade").val().length == 0) {    // teste
var hoje = new Date();
       var hoje_dia = hoje.getDate();
       var hoje_mes = hoje.getMonth() + 1;
       var hoje_ano = hoje.getFullYear();
       hoje = hoje_dia + "\/" + hoje_mes + "\/" + hoje_ano;
       console.log(hoje, hoje_dia, hoje_mes, hoje_ano);
       $("#dt_validade").val(hoje);
}

/*
* http://www.michaelbenford.net/2010/05/validacao-de-datas-e-horas-em-javascript/
*/
var validateDate = function(value) {
var valid = false;
       // Define uma expressão regular para validar se a data informada está
       // no formato nn/nn/nnnn, onde n é um número entre 0 e 9
       var regex = new RegExp("^([0-9]{2})/([0-9]{2})/([0-9]{4})$");
       var matches = regex.exec(value);
       if (matches != null) {
var day = parseInt(matches[1], 10);
       var month = parseInt(matches[2], 10) - 1;
       var year = parseInt(matches[3], 10);
       var date = new Date(year, month, day, 0, 0, 0, 0);
       valid = date.getFullYear() == year && date.getMonth() == month &&
       date.getDate() == day;
       }
return valid;
}



//http://www.wrichards.com/blog/2009/02/jquery-sorting-elements/
$.fn.sort = function() {
return this.pushStack([].sort.apply(this, arguments), []);
};
       var sortAlpha = function(a, b) {
return a.innerHTML > b.innerHTML ? 1 : - 1;
};


hoje: function(){
var hoje = new Date();
       this.dt.mes = String(hoje.getMonth() + 1);
       this.dt.ano = hoje.getFullYear();
       this.dt.ulti_dia_mes = this.daysInMonth(this.dt.mes, this.dt.ano);
}


daysInMonth: function (month,year) {
   var dd = new Date(year, month, 0);
   return dd.getDate();
},

retDataAtual: function(){
   var data_atual = {
       inicio: this.dt.pri_dia_mes + "/" + this.dt.mes + "/" + this.dt.ano,
       termino: this.dt.ulti_dia_mes + "/" + this.dt.mes + "/" + this.dt.ano
   };
   return data_atual;
},


