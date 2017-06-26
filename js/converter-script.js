$("#converter").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        formError();
    } else {
        event.preventDefault();
        submitForm();
    }
});
function submitForm() {
    var user_odds = $("#user_odds").val();
    var user_odds_type = $("#user_odds_type").val();
    $.ajax({
        type: "POST",
        url: "action.php",
        data: "user_odds=" + user_odds + "&user_odds_type=" + user_odds_type,
        success: function (text) {
            var obj = $.parseJSON(text);
            if (obj[0] == "ok") {
                $("#result-error").addClass('hidden');
                $("#result").removeClass('hidden');
                $("#result tbody").append('<tr>');
                getResult(obj[1]);
                getResult(obj[2]);
                getResult(obj[3]);
                $("#result tbody").append('</tr>');
            } else {
                $("#result-error").removeClass('hidden');
                getError(obj[1]);
            }
        }
    });
}

$("#reset").click(function () {
    reset();
});

function formError() {
    $("#result-error").removeClass('hidden');
    getError('Something went wrong');
}
function reset() {
    $("#result tbody").html('');
}
function getResult(msg) {
    $("#result tbody tr:last").append('<td>' + msg + '</td>');
}

function getError(msg) {
    $("#result-error").html(msg);
}


