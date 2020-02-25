function updateImage() {
    if(document.getElementById('fire').checked) {
        document.getElementById('pokemon').src = 'pokemonImages/3.jpg';
    }
    if(document.getElementById('water').checked) {
        document.getElementById('pokemon').src = 'pokemonImages/2.jpg';
    }
    if(document.getElementById('grass').checked) {
        document.getElementById('pokemon').src = 'pokemonImages/1.jpg';
    }
    if(document.getElementById('flying').checked) {
        document.getElementById('pokemon').src = '';
    }
}
