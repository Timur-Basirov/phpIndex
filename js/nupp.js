function naita() {
    const now = new Date();
    const paev = now.toLocaleDateString("et-EE");
    const kell = now.toLocaleTimeString("et-EE");
    document.getElementById("vastus1").innerText = "Kuupäev: " + paev;
    document.getElementById("vastus2").innerText = "Kell: " + kell;
    console.log("Kuupaev:", paev);
    console.log("Kell:", kell);
}