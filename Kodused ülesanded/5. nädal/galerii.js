//Ei mõelnud ise välja, kasutasin 2015. aasta päevaõppe materjale: http://enos.itcollege.ee/~ttanav/VRI/Arhiiv/2015_kevad/praxis_tegime/05/script.js

window.onload = function() { //Kui aken pole laetud, siis ei ole ilmselt ka seda elementi?
    if (document.getElementById('pisipildid') != null ) {

        var pildid = document.getElementById('pisipildid').getElementsByTagName('img');
        for (var i = 0; i < pildid.length; i++) {
            pildid[i].onclick = function() {
                showDetails(this);
                return false;
            }
        }
    }
}

function showDetails(el) {
    hoidja = document.getElementById('hoidja');
    if (hoidja != null) {
        var suurpilt = document.getElementById('suurpilt');
        suurpilt.src=el.parentNode.href;
        suurpilt.onload = function() {
            suurus(this);
        }
        document.getElementById("inf").innerHTML=el.alt;
		hoidja.style.display="initial";
    }
}

function hideDetails() {
	document.getElementById('hoidja').style.display="none";
}

function suurus(el){
        el.removeAttribute("height"); // eemaldab suuruse
        el.removeAttribute("width");
        if (el.width>window.innerWidth || el.height>window.innerHeight){  // ainult liiga suure pildi korral
            if (window.innerWidth >= window.innerHeight){ // lai aken
                el.height=window.innerHeight*0.9; // 90% kõrgune
            if (el.width>window.innerWidth){ // kas element läheb ikka üle piiri?
                el.removeAttribute("height");
                el.width=window.innerWidth*0.9;
            }
        } else { // kitsas aken
            el.width=window.innerWidth*0.9;   // 90% laiune
            if (el.height>window.innerHeight){ // kas element läheb ikka üle piiri?
                el.removeAttribute("width");
                el.height=window.innerHeight*0.9;
            }
        }
    }
}

window.onresize=function() {
	suurpilt=document.getElementById("suurpilt");
	suurus(suurpilt);
}
