window.onload = function() {
    // lehe laadimine lõpetatud. Siia funktsiooni sisse kirjutan elementide mõjutamise käsud
    var sihtmark = document.getElementById('siht');

    sihtmark.onclick = function() {
        var algneTop = sihtmark.offsetTop;
        var algneLeft = sihtmark.offsetLeft;
        var liikumine = Math.random()*100;
            sihtmark.style.top=(algneTop+liikumine) + "px";
            sihtmark.style.left=(algneLeft+liikumine) + "px";
            alert(algneLeft);
    }
}
