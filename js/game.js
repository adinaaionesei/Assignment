var turn = 'x';
function move(elem) {
    if ($(elem).html() === '') {
        if (turn === 'x') {
            $(elem).css("color", "red");
            $(elem).html(turn);
        } else {
            $(elem).css("color", "green");
            $(elem).html(turn);
        }
        changeTurn();
    }
}
function changeTurn() {
    if (turn === 'x') {
        turn = 'o';
    } else {
        turn = 'x';
    }
}
