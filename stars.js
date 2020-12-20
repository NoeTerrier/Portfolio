window.addEventListener("load", setup);
window.addEventListener(
    "scroll",
        () => {
            document.body.style.setProperty(
              "--scroll",
              window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
            );
        },
    false
);

function setup() {
    placeStars(100, "stars-background");
    placeStars(100, "stars-midle");
    placeStars(40, "stars-foreground");
}


function placeStars(nbOfStars, elementId) {
    background = document.getElementById(elementId);
    var string = ""
    for (var i = 0; i < nbOfStars; i++) {
        x = randint(screen.width);
        y = randint(5000);
        string += x + "px " + y + "px " + "#eee";
        if (i < nbOfStars - 1) {
            string += ", ";
        }
    }
    background.style.boxShadow = string;
}

function randint(max) {
    return Math.floor(Math.random() *  Math.floor(max));
}
