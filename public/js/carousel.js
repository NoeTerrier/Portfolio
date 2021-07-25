window.addEventListener("load", setup);

index = 0;
let urls = [];

function setup() {
  slides = document.getElementById("slides");
  firstImg = document.getElementById("first");
  nextImg = document.getElementById("next");
  moving = false;

  xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      urls = JSON.parse(this.response);

      firstImg.src = urls[0];
      nextImg.src = urls[0];

      setInterval(moveRight, 7000);
    } else if (this.readyState == 4 && this.status == 404) {
      console.log("Error 404");
    }
  };

  xhr.open("GET", "get-zone-image/carousel", true);
  xhr.send();
}

function resetPos() {
  moving = false;
  firstImg.src = nextImg.src;
  slides.style.transitionDuration = "0s";
  slides.style.transform = "translateX(0)";
}

function moveLeft() {
  moving = true;
  nextImg.src = urls[nextIndexLeft()];
  slides.style.transform = "translateX(-50%)";
  slides.style.transitionDuration = "2s";
  setTimeout(resetPos, 2000);
}

function moveRight() {
  moving = true;
  nextImg.src = urls[nextIndexRight()];
  slides.style.transform = "translateX(-50%)";
  slides.style.transitionDuration = "2s";
  setTimeout(resetPos, 2000);
}

function nextIndexLeft() {
  index = index == 0 ? urls.length - 1 : --index;
  return index;
}

function nextIndexRight() {
  index = index == urls.length - 1 ? 0 : ++index;
  return index;
}
