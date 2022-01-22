$(function () {
    $('#loginForm').on('submit', function (e) {

        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "php/controller/logged.php", //process to mail
            data: $(this).serialize(),
            success: function (msg) {
                if (parseInt(msg) == 1) {
                    window.location.href = "compte_liste";
                }
                else if (parseInt(msg) == 2) {
                    //window.location.href = "activitecommercial_liste";
                    swal({ title: "Bravo !", text: "Vous êtes Connect&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    window.location.href = "routinejournalier_liste";
                } else if (parseInt(msg) == -1) {
                    swal({ title: "Erreur", text: "Login ou mot de passe incorrect", imageUrl: 'images/icones/error.png', html: true });
                } else if (parseInt(msg) == 40) {
                    swal({ title: "Erreur", text: "Votre compte a &eacute;t&eacute; d&eacute;sactiv&eacute;", imageUrl: 'images/icones/error.png', html: true });
                } else {
                    swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true });
                }
                // alert(msg);
            },
            error: function () {
                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true });
            }
        });
    });


});
