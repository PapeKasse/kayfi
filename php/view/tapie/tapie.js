$(function () {
    //C'est pour gérer le formulaire d'ajout de sortie qui se trouve dans le fichier ajouter.php
    $('#monForm').on('submit', function (e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');
        $.ajax({  
            method: "POST",
            url: "php/controller/tapie.php", //process to mail
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (msg) {
                if (parseInt(msg)==1){              
                    swal({ title: "Bravo !", text: "La sortie a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).click(function(){
                        window.location.href = "tapie_liste";
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

    //permet d'afficher le contenu du fichier affiche.php dans la div affiche dans modifier.php
    function affichage() {
        var id = document.getElementById("idSortie").value;
        $.ajax({
            type: "GET",
            url: "php/view/sortie/affiche.php?send=" + id, //process to mail
            data: '',
            success: function (msg) {
                $(document).ready(function () {
                    $('#affiche').load("php/view/sortie/affiche.php?send=" + id);
                });
            }
        });
    }


    //permet d'afficher le contenu du fichier affiche.php dans la div affiche2 dans modifier.php
    function affichage2() {
        var id = document.getElementById("idSortie").value;
        $.ajax({
            type: "GET",
            url: "php/view/sortie/affiche.php?send=" + id, //process to mail
            data: '',
            success: function (msg) {
                $(document).ready(function () {
                    $('#affiche2').load("php/view/sortie/affiche.php?send=" + id);
                });
            }
        });
    }
    
    //C'est pour gérer le formulaire d'ajout code article et quantite qui se trouve dans le fichier ajouter.php
    $('#monFormDetail').on('submit', function (e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');
        $.ajax({
            type: "POST",
            url: "php/controller/sortie.php", //process to mail
            data: $(this).serialize(),
            success: function (msg) {
                if (parseInt(msg) == 1) {
                    swal({ title: "Bravo !", text: "Article ajout&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).click(function () {
                        //window.location.href = "sortie_liste";
                        affichage();

                    });
                } else if (parseInt(msg) == 2) {
                    swal({ title: "Erreur", text: "Cette Article  existe d&eacute;j&agrave;", imageUrl: 'images/icones/error.png', html: true });
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
            url: "php/controller/sortie.php", //process to mail
            data: $(this).serialize(),
            success: function (msg) {
                if (parseInt(msg) == 1) {
                    swal({ title: "Bravo !", text: "Le sortie a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).click(function () {
                        
                    });
                } else if (parseInt(msg) == 2) {
                    swal({ title: "Erreur", text: "Ce sortie existe d&eacute;j&agrave;", imageUrl: 'images/icones/error.png', html: true });
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

    //C'est pour gérer le formulaire du modal qui se trouve dans le fichier ajouter.php
    $('#formModif').on('submit', function (e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');
        $.ajax({
            type: "POST",
            url: "php/controller/sortie.php", //process to mail
            data: $(this).serialize(),
            success: function (msg) {
                if (parseInt(msg) == 1) {
                    swal({ title: "Bravo !", text: "Article modifi&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).ready(function () {
                        affichage();
                        $('#editmodal').modal('hide');
                    });
                } else if (parseInt(msg) == 2) {
                    swal({ title: "Erreur", text: "Cette Article existe d&eacute;j&agrave;", imageUrl: 'images/icones/error.png', html: true });
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

     //C'est pour gérer le formulaire du modal qui se trouve dans le fichier modifier.php
    $('#formModif2').on('submit', function (e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');
        $.ajax({
            type: "POST",
            url: "php/controller/sortie.php", //process to mail
            data: $(this).serialize(),
            success: function (msg) {
                if (parseInt(msg) == 1){
                    swal({ title: "Bravo !", text: "Article modifi&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $(document).ready(function () {
                        affichage2();
                        $('#editmodal').modal('hide');
                    });
                } else if (parseInt(msg) == 2){
                    swal({ title: "Erreur", text: "Cette Article existe d&eacute;j&agrave;", imageUrl: 'images/icones/error.png', html: true });
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







