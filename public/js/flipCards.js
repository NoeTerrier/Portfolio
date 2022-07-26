window.addEventListener("load", setup);

function setup() {
    cards = document.getElementsByClassName('card');

    for(let card of cards) {
        card.addEventListener("click", () => card.classList.toggle("card-flipped"));
    }
}
