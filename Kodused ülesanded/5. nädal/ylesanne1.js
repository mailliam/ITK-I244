window.onload = function() {
    // lehe laadimine lõpetatud. Siia funktsiooni sisse kirjutan elementide mõjutamise käsud
    var sihtmark = document.getElementById('siht');

    sihtmark.onclick = function() {
        //var algneTop = sihtmark.offsetTop;
        //var algneLeft = sihtmark.offsetLeft;
        var uusTop = Math.random()*500;
        var uusLeft = Math.random()*500;
            sihtmark.style.top=(uusTop) + "px";
            sihtmark.style.left=(uusLeft) + "px";

    }
}
