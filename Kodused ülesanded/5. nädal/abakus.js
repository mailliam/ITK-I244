window.onload = function() {
    // lehe laadimine lõpetatud. Siia funktsiooni sisse kirjutan elementide mõjutamise käsud
    var helmed = document.getElementsByClassName('bead');

    for (var i = 0; i < helmed.length; i++) {
        helmed[i].onclick = function () {
            muudaPoolt(this);
        }
    }
}

function muudaPoolt(helmeke) {
    if (helmeke.style.cssFloat == "right") {
        helmeke.style.cssFloat = "left";
    } else {
        helmeke.style.cssFloat = "right";
    }
}
