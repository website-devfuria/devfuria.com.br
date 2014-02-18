var myApp = {
    btnSubmit: document.getElementById("btnSubmit"),
    btnLoad: document.getElementById("btnLoad"),
    chkBike: document.getElementById("chkBike"),
    chkCar: document.getElementById("chkCar"),
    init: function() {
        var me = this;

        // Botão Submit
        this.btnSubmit.onclick = function() {

            // check 1
            if (me.chkBike.checked) {
                console.log("escolheu 'bike'");
            } else {
                console.log("não escolheu 'bike'");
            }

            // check 2
            if (me.chkCar.checked) {
                console.log("escolheu 'car'");
            } else {
                console.log("não escolheu 'car'");
            }
        };

        // Botão Load
        this.btnLoad.onclick = function() {

            // check 1
            if (Math.floor(Math.random() * 2)) {
                me.chkBike.checked = true;
            } else {
                me.chkBike.checked = false;
            }

            // check 2
            if (Math.floor(Math.random() * 2)) {
                me.chkCar.checked = true;
            } else {
                me.chkCar.checked = false;
            }

        };
    }
}.init();