$(function() {
    $('.more-services').hide();
    $('.message-success').hide();
    $('.message-danger').hide();

    $('#more-service').click(function() {
        $(this).hide();
        $('.more-services').show('slow');
    });

    //Save User
    $("#btn-create").click(function(e) {
        $('.message-success').hide();
        $('.message-danger').hide();
        nom = $('#name').val();
        mail = $('#email').val();
        password = $('#password').val();
        confirmpass = $('#confirmpass').val();
        action = $(this).val();
        id = 0;
        role = 0;
        if (nom != "" || mail != "" || password != "" || confirmpass != "") {
            if (password != confirmpass) {
                $('.message-danger').text("Mot de passe incorrect.").show('slow');
                $('#confirmpass').focus();
            } else {
                $.ajax({
                    url: "controllers/controllerQuery/UserQuery.php",
                    type: "POST",
                    data: { id: id, nom: nom, mail: mail, password: password, role: role, action: action },
                    timeout: 3000,
                    success: function(data) {
                        $('.message-success').text(data).show('slow');
                        $('.message-danger').hide();
                    },
                    error: function() {
                        $('.message-danger').text("Echec de la requete.").show('slow');
                    }
                });
            }
        } else {
            $('.message-success').hide();
            $('.message-danger').text("Complètez tous les champs.").show('slow');
        }
    });

    //Save News
    $("#form-new").submit(function(e) {
        e.preventDefault();
        if ($('#title').val() == "" || $('#content').val() == "") {
            $('.message-success').hide();
            $(".message-danger").text("Rien à publier.").show('slow');
        } else {
            $.ajax({
                url: "controllers/controllerQuery/NewQuery.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                timeout: 3000,
                success: function(data) {
                    $('.message-success').text(data).show('slow');
                    $('.message-danger').hide('slow');
                },
                error: function() {
                    $(".message-danger").text("Echec de la requte.").show('slow');
                }
            });
        }
    });

});