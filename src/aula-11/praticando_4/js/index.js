let squareSelected = null;

function updateSelected(squareId) {
    const square = document.getElementById(squareId);

    if (squareInMovement && squareId === squareSelected.id) {
        square.style.border = "5px solid yellow";
        moveParaPosicaoInicial(square);
        squareInMovement = false;
        squareSelected = null;
    } else if (squareInMovement) {
        alert("Atenção, há algum square Selected, desselecione-o para selecionar outro");
    } else {
        square.style.border = "5px solid yellow";
        const isSelected = square === squareSelected;
        const squares = document.querySelectorAll(".sqr");
        
        squares.forEach((sqr) => {
            sqr.style.transform = "translate(0px, 0px)";
        });

        if (!isSelected) {
            moveParaCentro(squareId);
            squareSelected = square;
            squareInMovement = true;
        } else {
            squareSelected = null;
        }
    }
}

function moveParaPosicaoInicial(square) {
    square.style.transform = "translate(0px, 0px)";
    square.style.border = "5px solid black";
}

function moveParaCentro(squareId) {
    const screen = document.querySelector(".container");
    const screenWidth = screen.offsetWidth;
    const screenHeight = screen.offsetHeight;
    const square = document.getElementById(squareId);
    const squareWidth = square.offsetWidth;
    const squareHeight = square.offsetHeight;
    const newX = (screenWidth - squareWidth) / 2.5;
    const newY = (screenHeight - squareHeight) / 3;
    square.style.transform = `translate(${newX}px, ${newY}px)`;
}

let squareInMovement = false;

document.addEventListener("keydown", function (event) {
    if (squareSelected && squareInMovement) {
        const key = event.key.toLowerCase();
        switch (key) {
            case "w":
                moveSquare(0, -10);
                break;
            case "a":
                moveSquare(-10, 0);
                break;
            case "s":
                moveSquare(0, 10);
                break;
            case "d":
                moveSquare(10, 0);
                break;
        }
    }
});

function moveSquare(deltaX, deltaY) {
    const transform = getComputedStyle(squareSelected).transform;
    
    let currentX = 0;
    let currentY = 0;

    if (transform !== "none") {
        const matrix = new DOMMatrix(transform);
        currentX = matrix.m41;
        currentY = matrix.m42;
    }

    const newX = currentX + deltaX;
    const newY = currentY + deltaY;
    
    squareSelected.style.transform = `translate(${newX}px, ${newY}px)`;
}