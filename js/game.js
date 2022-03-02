var turn = 'x', turn_nr = 1;
function move(elem) {
    if ($(elem).html() === '') {
        if (turn === 'x') {
            $(elem).css("color", "red");
        } else {
            $(elem).css("color", "green");
        }
        $(elem).html(turn);
        var cellId = $(elem).attr('data-id');
        $('#move-' + turn_nr).val(cellId);
        changeTurn();
    }
}
function changeTurn() {
    if (turn === 'x') {
        turn = 'o';
    } else {
        turn = 'x';
    }
    turn_nr = turn_nr + 1;
}
