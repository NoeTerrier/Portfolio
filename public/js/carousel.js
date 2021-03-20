window.addEventListener("load", setup);

index = 0;
const listOfImg = ["astronaute", "card", "hand", "curiosity", "chevalier"];

function setup() {
    slides = document.getElementById("slides");
    firstImg = document.getElementById("first");
    nextImg = document.getElementById("next");
    moving = false

    // buttonPrevious = document.getElementById("previous-button");
    // buttonPrevious.addEventListener('click', () => {
    //     if (!moving) {
    //         moveRight();
    //     }});
    // buttonNext = document.getElementById("next-button");
    // buttonNext.addEventListener('click', () => {
    //     if (!moving) {
    //         moveLeft();
    //     }});

    firstImg.src = sourceOf(listOfImg[0]);
    nextImg.src = sourceOf(listOfImg[0]);

    setInterval(moveRight, 7000);
}


function resetPos() {
    moving = false;
    firstImg.src = nextImg.src;
    slides.style.transitionDuration = "0s";
    slides.style.transform = "translateX(0)";
}

function moveLeft() {
    moving = true;
    nextImg.src = sourceOf(listOfImg[nextIndexLeft()]);
    slides.style.transform = "translateX(-50%)";
    slides.style.transitionDuration = "2s";
    setTimeout(resetPos, 2000);
}

function moveRight() {
    moving = true;
    nextImg.src = sourceOf(listOfImg[nextIndexRight()]);
    slides.style.transform = "translateX(-50%)";
    slides.style.transitionDuration = "2s";
    setTimeout(resetPos, 2000);
}

function nextIndexLeft() {
    index = (index == 0) ? listOfImg.length - 1 : --index;
    return index;
}

function nextIndexRight() {
    index = (index == listOfImg.length - 1) ? 0 : ++index;
    return index;
}

function sourceOf(name) {
    return ("/images/" + name + ".jpg");
}
