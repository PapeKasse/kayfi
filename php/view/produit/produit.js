
//C'est pour gérer le formulaire d'ajout de sortie qui se trouve dans le fichier ajouter.php
$(function () {
    $('.envoyer').click(function () {
        var idProduit = $(this).attr("id");
        var nom = $('#nom'+idProduit).val();
        var prix = $('#prix'+idProduit).val();
        var quantite = $('#quantite'+idProduit).val();
        var descript = $('#descript'+idProduit).val();
        var photo = $('#photo'+idProduit).val();
        var action = "add";
        /* alert(idProduit + "&" + prix); */
        $.ajax({
            url: "php/controller/produit.php", //process to mail
            method: "POST",
            dataType: "json",
            data: {
                idProduit: idProduit,
                nom: nom,
                prix: prix,
                quantite: quantite,
                descript: descript,
                photo: photo,
                action: action
            },
            success: function (msg) {
                    $('.cart_item').text(msg.cart_item);
                    swal({
                        title: 'Produit Ajouté Au Panier!',
                        type: 'success',
                        html:
                            '<div><a class="fusion-button button-flat button-square button-large button-default button-1" href="http://192.163.245.60/~oti/cart/">Send Quote Now!</a></div><br />',
                        timer: 1050,
                        showCloseButton: false,
                        showCancelButton: false,
                    });
                //alert(msg);
                $('.loaderMessage').removeClass('is-active');
            },
            error: function () {
                alert("not found");
                $('.loaderMessage').removeClass('is-active');
                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true });
            }

        });

    });
});

$(document).on('click', '.supprimer', function () {
    var idProduit = $(this).attr("id");
    var action = "supprimer";
    swal({
        title: "Suppression?",
        text: "Êtes-vous sûr de vouloir supprimer? Il sera impossible de récupérer l'élément après la suppression!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Supprimer",
        cancelButtonText: "Annuler",
        closeOnConfirm: false,
        closeOnCancel: false
    },
        function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: "php/controller/produit.php", //process to mail
                    method: "POST",
                    dataType: "json",
                    data: { idProduit: idProduit, action: action },
                    success: function (msg) {
                        $('#order_table').html(msg.order_table);
                        $('#suivan').html(msg.suivan);
                        $('#client').html(msg.client);
                        $('.cart_item').text(msg.cart_item);
                            swal("Bravo!", "L'élément a été supprimé avec succès", "success");
                        $('.total').text(msg.total);
                       
                    },
                    error: function () {
                        swal("Une erreur est survenue veuillez contacter l'administrateur");
                    }
                    
                });
            }
            else {
                swal("Annulé!", "L'élément a été conservé", "error");
            }
        });
}); 

$(function () {
    //C'est pour gérer le formulaire d'ajout de sortie qui se trouve dans le fichier ajouter.php
    $('#formCommande').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "php/controller/commande.php", //process to mail
            data: $(this).serialize(),
            success: function (msg) {
                $('#client').html(msg.client);
                    swal({ title: "Bravo !", text: "Le Tapis a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true });
                    $('#invalidCheck3').removeClass('is-invalid');
                    $('#invalidCheck3').addClass('is-valid');
                   
                    // alert(msg);
            }
        });
    });
});

$(function () {
    $('.suiv').click(function (msg) {
        $("#formCommande").show();
    });
});

$(function () {
    $('.form-check-input').click(function () {
        if ($('.form-check-input').is(':checked')) {
            $('#invalidCheck3').removeClass('is-invalid');
            $('#invalidCheck3').addClass('is-valid');
        }else{
            $('#invalidCheck3').removeClass('is-valid');
            $('#invalidCheck3').addClass('is-invalid');
        }
    });
});
