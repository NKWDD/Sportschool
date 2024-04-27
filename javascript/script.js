// Selecteer alle dia-elementen
let slide = document.querySelectorAll('.slide');
// Initialiseer de huidige dia index
var current = 0;

// Functie om alle dia's te verbergen
function cls(){
    for(let i = 0; i < slide.length; i++){
        slide[i].style.display = 'none';
    }
}

// Functie om naar de volgende dia te navigeren
function next(){
    cls();
    // Incrementeer de huidige dia-index
    if(current === slide.length-1) current = -1;
    current++;

    // Toon de huidige dia en animeer de opaciteit
    slide[current].style.display = 'block';
    slide[current].style.opacity = 0.4;

    // Animatie van de dia-opaciteit
    var x = 0.4;
    var intX = setInterval(function(){
        x+=0.1;
        slide[current].style.opacity = x;
        if(x >= 1) {
            clearInterval(intX);
            x = 0.4;
        }
    }, 100);

}

// Functie om naar de vorige dia te navigeren
function prev(){
    cls();
    // Decrementeer de huidige dia-index
    if(current === 0) current = slide.length;
    current--;

    // Toon de huidige dia en animeer de opaciteit
    slide[current].style.display = 'block';
    slide[current].style.opacity = 0.4;

    // Animatie van de dia-opaciteit
    var x = 0.4;
    var intX = setInterval(function(){
        x+=0.1;
        slide[current].style.opacity = x;
        if(x >= 1) {
            clearInterval(intX);
            x = 0.4;
        }
    }, 100);

}

// Functie om de diavoorstelling te starten
function start(){
    cls();
    slide[current].style.display = 'block';
}
start();