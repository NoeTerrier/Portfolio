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
    var nbOfParticules = 50;
    var html = document.documentElement;
    var height = Math.max( html.clientHeight, html.scrollHeight);
    var backgrounds = document.getElementsByClassName("particles");
    console.log(backgrounds);

    for (let background of backgrounds) {
        var string = ""
        for (var i = 0; i < nbOfParticules; i++) {
            x = randint(screen.width);
            y = randint(height - 200) + 200;
            string += x + "px " + y + "px " + " rgba(0, 0, 0, 0.3)";
            if (i < nbOfParticules - 1) {
                string += ", ";
            }
        }
        background.style.boxShadow = string;
    }
}

function randint(max) {
    return Math.floor(Math.random() *  Math.floor(max));
}
