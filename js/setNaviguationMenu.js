window.addEventListener("load", setup);


/**
create naviguation menu for artwork's pages and set animations for each element of the menu
*/
function setup() {

    menu = document.getElementById("menu");
    if (menu == null) {
        console.log("Menu n'existe pas");
        return;
    }
    menu.style.opacity = 1;
    locationPage = menu.getAttribute("data-location")


    pageList = null;
    if (locationPage == "index") {
        pageList = [["artwork.html",    "gallery"],
                    ["artwork.html",    "projects"],
                    ["about.html",      "about"]];
    } else {
        pageList = [["space.html",      "space"],
                    ["pixel_art.html",  "pixel art"],
                    ["logos.html",      "888"],
                    ["logos.html",      "logos"]];
    }

    i = 0;
    for (let page of pageList) {
        li = document.createElement("li");
        a = document.createElement("a")
        a.href = page[0];
        a.classList.add("menu-item");
        a.appendChild(document.createTextNode(page[1]));
        li.appendChild(a);

        if (page[1] == locationPage) {
            li.classList.add("selected");
        }

        i += 1;
        li.style.animation = "fromDown 0.5s both";
        li.style.animationDelay = i * 0.2 + 's';

        menu.appendChild(li);
    }
}
