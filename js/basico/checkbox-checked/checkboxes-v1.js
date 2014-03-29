/**
 * Botão Submit
 */
document.getElementById("btnSubmit").onclick = function() {

    // check 1
    if (document.getElementById("bike").checked) {
        console.log("escolheu 'bike'");
    } else {
        console.log("não escolheu 'bike'");
    }

    // check 2
    if (document.getElementById("car").checked) {
        console.log("escolheu 'car'");
    } else {
        console.log("não escolheu 'car'");
    }
};

/**
 * Botão Load
 */
document.getElementById("btnLoad").onclick = function() {

    // check 1
    if (Math.floor(Math.random() * 2)) {
        document.getElementById("bike").checked = true;
    } else {
        document.getElementById("bike").checked = false;
    }

    // check 2
    if (Math.floor(Math.random() * 2)) {
        document.getElementById("car").checked = true;
    } else {
        document.getElementById("car").checked = false;
    }

};
