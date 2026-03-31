function musicValik(){
    let v=document.getElementById("vastus");
    let beatles=document.getElementById("beatles");
    let btr=document.getElementById("btr");
    let nirvana=document.getElementById("nirvana");
    let imdr=document.getElementById("imdr");

    let valik="";
    if(beatles.checked){
        valik+=beatles.value+", ";
    }
    if(imdr.checked){
        valik+=imdr.value+", ";
    }
    if(nirvana.checked){
        valik+=nirvana.value+", ";
    }
    if(btr.checked){
        valik+=btr.value+", ";
    }
    v.innerHTML="Sinu valitud muusikud: "+valik;

}
function Puhasta(){
    let beatles=document.getElementById("beatles");
    let btr=document.getElementById("btr");
    let nirvana=document.getElementById("nirvana");
    let imdr=document.getElementById("imdr");
    let valik=document.getElementById("vastus");
    let lem=document.getElementById("lemmik");
    let vastus1=document.getElementById("vastus1");
    let slider=document.getElementById("slider");
    let vastus2=document.getElementById("vastus2");
    let jah=document.getElementById("jah");
    let ei=document.getElementById("ei");
    let vastus3=document.getElementById("vastus3");
    let raadiojam=document.getElementById("raadiojam");
    let vastus4=document.getElementById("vastus4");
    let muusik=document.getElementById("muusik");
    let vastus5=document.getElementById("vastus5");
    let vastus6=document.getElementById("vastus6");
    let pilt=document.getElementById("pilt");

    pilt.src="";
    vastus6.innerHTML="";
    vastus5.innerHTML="";
    muusik.value="...";
    vastus4.innerHTML="";
    raadiojam.value="";
    vastus3.innerHTML="";
    ei.checked=false;
    jah.checked=false;
    vastus2.innerHTML="";
    slider.value="";
    vastus1.innerHTML="";
    lem.value="";
    valik.innerText="";
    beatles.checked=false;
    btr.checked=false;
    nirvana.checked=false;
    imdr.checked=false;

}

function lemmikLugemine(){
    //let
    let lemmik=document.getElementById("lemmik");
    let v1=document.getElementById("vastus1");
    //innerText või innerHTML genereerib lehel vastav tekst
    v1.innerText="Teie arvamus on:  "+lemmik.value;
}
function sliderLiigub(){
    let v2=document.getElementById("vastus2");
    let slider=document.getElementById("slider");

    v2.innerText="Sa kuulad muusikat ["+slider.value+"] tundi päevas";
}

function valiVastus(){
    let v3=document.getElementById("vastus3");
    let jah=document.getElementById("jah");
    let ei=document.getElementById("ei");
    if(jah.checked){
        v3.innerHTML="Raadio kuulamine: "+jah.value;
    }
    else if(ei.checked){
        v3.innerHTML="Raadio kuulamine: "+ei.value;
    }
    else{
        v3.innerHTML="palun vali oma vastus!";
    }
}
function radJamLugemine() {
    //let
    let radio = document.getElementById("raadiojam");
    let v4 = document.getElementById("vastus4");
    //innerText või innerHTML genereerib lehel vastav tekst
    v4.innerText = "Sinu nimetatud jaamad:  " + radio.value;
}

function valiMuusik(){
    let v5=document.getElementById("vastus5");
    let muusik=document.getElementById("muusik");
    // selectedIndex!==0 - mitte null
    if(muusik.selectedIndex!==0){
        v5.innerHTML="Sa valisid "+muusik.value;
    } else{
        v5.innerHTML="Tee ripploendi lahti ja vali";
    }
}
function saada() {
    let v = document.getElementById("vastus");
    let v1 = document.getElementById("vastus1");
    let v2 = document.getElementById("vastus2");
    let v3 = document.getElementById("vastus3");
    let v4 = document.getElementById("vastus4");
    let v5 = document.getElementById("vastus5");
    let v6 = document.getElementById("vastus6");
    let pilt=document.getElementById("pilt");

    v6.innerText =v.innerText+"\n"+ v1.innerText + "\n" + v2.innerText + "\n" + v3.innerText + "\n" + v4.innerText + "\n" + v5.innerText;
    pilt.src="img/Happy.png";

}
