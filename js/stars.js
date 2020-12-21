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
    var html = document.documentElement;
    var height = Math.max( html.clientHeight, html.scrollHeight);
    var background = document.getElementById(elementId);
    var string = ""

    for (var i = 0; i < nbOfStars; i++) {
        x = randint(screen.width);
        y = randint(height - 100) + 100; 
        string += x + "px " + y + "px " + "#fff";
        if (i < nbOfStars - 1) {
            string += ", ";
        }
    }
    background.style.boxShadow = string;
}

function randint(max) {
    return Math.floor(Math.random() *  Math.floor(max));
}
