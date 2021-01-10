window.addEventListener("load", setup);

function setup() {

    var nbOfParticules = 50;
    var squares = document.getElementsByClassName("square");

    for(let square of squares) {
        size = Math.floor(Math.random() * 100 + 10);
        square.style.zIndex = -1;
        square.style.height = size + "px";
        square.style.width  = size + "px";
        square.style.marginTop = randint(screen.height - size) + "px";
        square.style.animationDelay = -Math.random()*30 + "s";
    }
}

function randint(max) {
    return Math.floor(Math.random() *  Math.floor(max));
}
