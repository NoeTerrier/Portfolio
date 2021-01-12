window.addEventListener("load", setup);

function setup() {
    images = document.getElementsByTagName('IMG');
    blackRect = document.getElementsByClassName('black-rect')[0];

    for(let img of images) {
        img.addEventListener("click", () => switchVisible(img));
    }

    blackRect.addEventListener("click", () => switchVisible(document.getElementsByClassName('img-selection')[0]));
}

function switchVisible(img) {
    blackRect.classList.toggle("visble");
    img.classList.toggle("img-selection");
}
