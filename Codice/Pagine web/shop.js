function aumenta(numeroArticolo) {
    document.getElementsByClassName("numero_quantita").item(numeroArticolo).value++;
}
function diminuisci(numeroArticolo) {
    if(document.getElementsByClassName("numero_quantita").item(numeroArticolo).value > 0)
        document.getElementsByClassName("numero_quantita").item(numeroArticolo).value--;
}
