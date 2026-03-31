let raamat = {
    pealkiri: "The Song of Achilles",
    autor: "Madeline Miller",
    aasta: 2021
};
console.log("Esimene raamat aasta oli 2021");

function muudaAasta() {
    raamat.aasta = 2023;
    console.log("Uus aasta", raamat.aasta);
    return raamat.aasta;
}

muudaAasta();

let raamatukogu =[
    {
        pealkiri: "Tõde ja õigus",
        autor: "A. H. Tammsaare",
        aasta: 1926
    },
    {
        pealkiri: "Rehepapp",
        autor: "Andrus Kivirähk",
        aasta: 2000
    },
    {
        pealkiri: "Minu Eesti",
        autor: "Epp Petrone",
        aasta: 2009
    }
];
console.log(raamatukogu);

function lisaRaamat() {
    raamatukogu.push({ pealkiri: "Minu raamat", autor: "Timur Basirov", aasta: 2024 });
    console.log("Lisatud minu raamat");
}
lisaRaamat();

const vastus = document.getElementById("vastus");

vastus.innerHTML +="<h2>Ühe raamat</h2>";
vastus.innerHTML +="<p><strong>"+raamat.pealkiri + "</strong> – " + raamat.autor + " (" + raamat.aasta + ")</p>";

vastus.innerHTML +="<h2>Raamatukogus on "+raamatukogu.length+" raamatut</h2>";

raamatukogu.forEach(function(r) {
    vastus.innerHTML +="<p><strong>" + r.pealkiri + "</strong> – " + r.autor + " (" + r.aasta + ")</p>";
});

function raamatudParast2000() {
    let uus = raamatukogu.filter(function(r) {
        return r.aasta > 2000;
    });
    return uus;
}

let filtritud = raamatudParast2000();

vastus.innerHTML += "<h2>Raamatud pärast 2000. aastat (" + filtritud.length + " tk)</h2>";

filtritud.forEach(function(r){
    vastus.innerHTML += "<p><strong>" + r.pealkiri + "</strong> – " + r.autor + " (" + r.aasta + ")</p>";
});

function otsiAutoriJargi(autorNimi){
    let leitud = raamatukogu.filter(function(r) {
        return r.autor === autorNimi;
    });
    console.log("Leitud autor:",autorNimi,leitud.length, "raamatut");
    vastus.innerHTML +="<h2>Otsing autorilt:"+ autorNimi +" ("+ leitud.length + " raamatut)</h2>";
    leitud.forEach(function(r) {
        vastus.innerHTML +="<p><strong>" + r.pealkiri + "</strong> – " + r.autor + " (" + r.aasta + ")</p>";
    });
}

otsiAutoriJargi("Timur Basirov");
