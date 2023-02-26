function aumenta(numeroArticolo) {
    document.getElementsByClassName("numero_quantita").item(numeroArticolo).innerHTML++;
}
function diminuisci(numeroArticolo) {
    if(document.getElementsByClassName("numero_quantita").item(numeroArticolo).innerHTML > 0)
        document.getElementsByClassName("numero_quantita").item(numeroArticolo).innerHTML--;
}