window.addEventListener("load", setup);

index = 0;
const listOfImg = ["hand", "chat_noir", "chevalier"];

function setup() {
    slides = document.getElementById("slides2");
    firstImg = document.getElementById("first");
    nextImg = document.getElementById("nextI");

    firstImg.src = sourceOf(listOfImg[0]);
    nextImg.src = sourceOf(listOfImg[0]);

    setInterval(moveRight, 10000);
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
    return ("/Images/" + name + ".png");
}
