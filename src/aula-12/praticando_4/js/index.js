let $squareSelected = null;

$('.sqr').click(function () {
    const $square = $(this);

    if ($squareSelected) {
        if ($square.is($squareSelected)) {
            resetSquareStyle();
            $squareSelected = null;
        } else {
            alert("Atenção, há algum square Selected, desselecione-o para selecionar outro");
        }
    } else {
        resetSquareStyle();
        moveSquareToCenter($square);
        $squareSelected = $square;
        $squareSelected.css("border", "5px solid yellow");
    }
});

$(document).keydown(function (event) {
    if ($squareSelected) {
        const key = event.key.toLowerCase();
        const delta = { w: { y: -10 }, a: { x: -10 }, s: { y: 10 }, d: { x: 10 } }[key];
        moveSquare(delta?.x || 0, delta?.y || 0);
    }
});

function resetSquareStyle() {
    $('.sqr').css({ transform: "translate(0px, 0px)", border: "5px solid black" });
}

function moveSquareToCenter($square) {
    const $screen = $(".container");
    const newX = ($screen.width() - $square.width()) / 2.5;
    const newY = ($screen.height() - $square.height()) / 3;
    $square.css("transform", `translate(${newX}px, ${newY}px)`);
}

function moveSquare(deltaX, deltaY) {
    const transform = $squareSelected.css("transform");
    const matrix = transform && transform !== "none" ? new DOMMatrix(transform) : { m41: 0, m42: 0 };
    const newX = matrix.m41 + deltaX;
    const newY = matrix.m42 + deltaY;
    $squareSelected.css("transform", `translate(${newX}px, ${newY}px)`);
}
