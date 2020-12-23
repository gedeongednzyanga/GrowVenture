$(function() {
    $('.more-services').hide();
    $('.message-success').hide();
    $('#more-service').click(function() {
        $(this).hide();
        $('.more-services').show('slow');
    });

    //Save User
    $("#btn-create").click(function(e) {
        nom = $('#name').val();
        mail = $('#email').val();
        password = $('#password').val();
        action = $(this).val();
        id = 0;
        role = 0;
        if (nom != "" || mail != "") {
            $.ajax({
                url: "controllers/controllerQuery/UserQuery.php",
                type: "POST",
                data: { id: id, nom: nom, mail: mail, password: password, role: role, action: action },
                timeout: 3000,
                success: function(data) {
                    alert(data);
                    $('.message-success').show('slow');
                },
                error: function() {
                    alert('Echec de la requete.');
                }
            });
        } else {
            alert("Champs vides.");
        }
    });
});