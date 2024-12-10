$(document).ready(function () {
    $("#busForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "process.php",
            data: $(this).serialize(),
            success: function (response) {
                $("#successMessage").html(response).fadeIn();
                $("#busForm")[0].reset();
            },
            error: function () {
                $("#successMessage").html("There was an error. Please try again.").fadeIn();
            }
        });
    });
});
