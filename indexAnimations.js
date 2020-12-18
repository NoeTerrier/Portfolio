function animateMenu(){
    menu = document.getElementById("menu");
    if (menu == null) {
        console.log("Menu n'existe pas");
        return;
    }
    menu.style.opacity = 1;
    listElements = menu.children;
    i = 0;
    for(let li of listElements) {
        i += 1;
        li.style.animation = "fromDown 0.5s both";
        li.style.animationDelay = i * 0.2 + 's';
    }
}

animateMenu()
