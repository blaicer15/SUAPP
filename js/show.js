$('#hideshow').on("click", function() {
    var text = $(this).text();
    $("#box2").toggle();
    if (text == "Hide") {
        $(this).text("Show");
    } else {
        $(this).text("Hide");
    }
});