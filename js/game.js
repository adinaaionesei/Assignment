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
        $('.turno').css('display', 'block');
        $('.turnx').css('display', 'none');
    } else {
        turn = 'x';
        $('.turno').css('display', 'none');
        $('.turnx').css('display', 'block');
    }
    turn_nr = turn_nr + 1;
    if (turn_nr > 9) {
        $('.message').html('Please submit the game');
    }
}
