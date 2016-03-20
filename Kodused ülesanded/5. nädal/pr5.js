window.addEventListener('load', function() {
    document.getElementById('pealkiri').innerHTML = 'Asendus';
});

//document.addEventListener('DomContentLoaded'),... selline võimalus on ka, aga
//eelmist on parem meelde jätta, lihtsamate lehtede puhul ei anna eelist

var muutujaNimi = 8;

var numbriMuutuja = 3;
//ainult üks numbritüüp. 64bit float, ebatäpne (nt alates 16. kohast, 0,1+0,2)
//rahaarvutusi tehes tuleks teha täisnumbrites sentidega ja siis jagada tagasi

var tekstiMuutuja = "mina olen tekst";
alert(tekstiMuutuja);
var tekstiMuutuja = 'mina olen täpselt samasugune tekst';
var booleanMuutuja = true; //või false
var undefinedMuutuja = undefined;
var nullMuutuja = null;
var massiiviMuutuja = [1, "tekst", [], function(){}, false]; //võib kõiksuguseid
//anda
var objektiMuutuja = {
    tekstiOmadus: "abc", //siin peab koma olema
    numberOmadus: 23,
    meetod: function(a) {
        return this.numberOmadus + a;
    }
}
 alert(objektiMuutuja.meetod(5));

 var objekt2 = {
     numberOmadus:4,
     meetod: objektiMuutuja.meetod
 };
 alert(objekt2.meetod(5));

 if (tingimus) {
     //kui tingimus kehtib
 } else {
     //kui tingimus ei kehti
 }

 //falsy: false, 0, '', undefined, null
 //truthy: kõik muud
//AND: && vasakpoolne falsy või parempoolne
//OR: vasakpoolne truthy või parempoolne
//pole üldse oluline, mis on parempoolne variant, ei tagasta true või false,
//vaid üks pooltest
