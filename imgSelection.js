window.addEventListener("load", setup);

function setup() {
    images = document.getElementsByTagName('IMG');
    for(let img of images) {
        img.addEventListener("click", () => (img.classList.toggle("img-selection")));
    }
}
