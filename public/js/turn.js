let imgRotate = document.getElementById("imgRotate");
let deg = 0;
let animTurn;
let readyToTurn = 1;

// ----------Mouse Over--------
imgRotate.addEventListener('mouseover', function () {

    if (readyToTurn === 1) {
        readyToTurn = 0;
        animTurn = setInterval(turn, 1);
    }
});

function turn() {

    deg += 1;
    imgRotate.style.transform = `rotateY(${deg}deg)`;
    if (deg === 360) {
        deg = 0;
        readyToTurn = 1;
        clearInterval(animTurn);
    }
}

