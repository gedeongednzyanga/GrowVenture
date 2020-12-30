$(function() {

    $('#contactForm').submit(function(e) {
        e.preventDefault();
        $("#error").hide();
        $("#success").hide();

        if ($("#name").val() == "" || $("#email").val() == "" || $("#subject").val() == "" || $("#message").val() == "") {
            $("#success").hide();
            $("#error").text("Champs vide.").show('slow');
        } else {
            $.ajax({
                url: "controllers/controllerQuery/MessageQuery.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                timeout: 3000,
                success: function(data) {
                    $("#error").hide();
                    $('#success').text(data).show('slow');
                },
                error: function() {
                    $("#error").text("Echec de la requete.").show('slow');
                }
            });
        }
    });
});