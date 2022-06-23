$(function () {
    //C'est pour gérer le formulaire d'ajout de sortie qui se trouve dans le fichier ajouter.php
    $('#monForm').on('submit', function (e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');
        $.ajax({  
            method: "POST",
            url: "php/controller/gazon.php", //process to mail
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (msg) {
                if (parseInt(msg)==1){              
                    swal({ title: "Bravo !", text: "Le Gazon a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).click(function(){
                        window.location.href = "gazon_liste";
                    });
                } else if (parseInt(msg)==2) {
                    swal({ title: "Erreur", text: "ça ne marche pas", imageUrl: 'images/icones/error.png', html: true });
                } else {
                    swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true });
                }
                // alert(msg);
                $('.loaderMessage').removeClass('is-active');
            },
            error: function () {
                alert("not found");
                $('.loaderMessage').removeClass('is-active');
                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true });
            }
        });
    });

    
   
    //C'est pour gérer le formulaire de Modification de sortie qui se trouve dans le fichier modifier.php
    $('#monFormMod').on('submit', function (e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');
        $.ajax({
            type: "POST",
            url: "php/controller/gazon.php", //process to mail
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (msg) {
                if (parseInt(msg) == 1) {
                    swal({ title: "Bravo !", text: "Le Gazon a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).click(function () {
                    window.location.href = "gazon_liste"; 
                    });
                } else if (parseInt(msg) == 2) {
                    swal({ title: "Erreur", text: "Ce Gazon existe d&eacute;j&agrave;", imageUrl: 'images/icones/error.png', html: true });
                } else {
                    swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true });
                }
                // alert(msg);
                $('.loaderMessage').removeClass('is-active');
            },
            error: function () {
                $('.loaderMessage').removeClass('is-active');
                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true });
            }
        });
    });

});







