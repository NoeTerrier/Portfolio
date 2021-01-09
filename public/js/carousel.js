window.addEventListener("load", setup);

index = 0;
const listOfImg = ["hand", "card", "astronaute", "curiosity", "chevalier"];

function setup() {
    slides = document.getElementById("slides");
    firstImg = document.getElementById("first");
    nextImg = document.getElementById("next");

    firstImg.src = sourceOf(listOfImg[0]);
    nextImg.src = sourceOf(listOfImg[0]);

    setInterval(moveRight, 7000);
}


function resetPos() {
    firstImg.src = nextImg.src;
    slides.style.transitionDuration = "0s";
    slides.style.transform = "translateX(0)";
}

function moveRight() {
    nextImg.src = sourceOf(listOfImg[nextIndexRight()]);
    slides.style.transform = "translateX(-50%)";
    slides.style.transitionDuration = "2s";
    setTimeout(resetPos, 2000);
}

function nextIndexRight() {
    index = (index == listOfImg.length - 1) ? 0 : ++index;
    return index;
}

function sourceOf(name) {
    return ("/images/" + name + ".jpg");
}
