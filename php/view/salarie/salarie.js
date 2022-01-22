$(function(){
    $('#monForm').on('submit', function(e) {
        e.preventDefault(); 
        $('.loaderMessage').addClass('is-active');
        if($("#motDePasse").val() == $("#motDePasse2").val()){
            $.ajax({
                type: "POST",
                url: "php/controller/salarie.php", //process to mail
                data: $(this).serialize(),
                success: function(msg){
                    if(parseInt(msg)==1){
                        swal({ title: "Bravo !", text: "Le salari&eacute; a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true});
                        $(document).click(function(){
                            window.location.href = "salarie_liste";
                        });
                    }else if(parseInt(msg)==2){ 
                        swal({ title: "Erreur", text: "Ce login est d&eacute;j&agrave; utilis&eacute; par une autre personne", imageUrl: 'images/icones/error.png', html: true});
                    }else if(parseInt(msg)==3){ 
                        swal({ title: "Erreur", text: "Cette adresse email est d&eacute;j&agrave; utilis&eacute;e par une autre personne", imageUrl: 'images/icones/error.png', html: true});
                    }else{ 
                        swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true});
                    }
                   // alert(msg);
                   $('.loaderMessage').removeClass('is-active');
                },
                error: function(){
                    $('.loaderMessage').removeClass('is-active');
                    swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true});
                }
            });
        }
        else{
             $('.loaderMessage').removeClass('is-active');
            swal({ title: "Erreur", text: "Les mots de passe saisis ne sont pas identique, veuillez les v&eacute;rifier ou les resaisir", imageUrl: 'images/icones/errorPass.png', html: true});
        }
    });
    
    $('#monFormMod').on('submit', function(e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active');     
        $.ajax({
            type: "POST",
            url: "php/controller/salarie.php", //process to mail
            data: $(this).serialize(),
            success: function(msg){
                if(parseInt(msg)==1){
                    swal({ title: "Bravo !", text: "Le salari&eacute; a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true});
                    $(document).click(function(){
                        window.location.href = "salarie_liste";
                    });
                }else if(parseInt(msg)==2){ 
                    swal({ title: "Erreur", text: "Ce login est d&eacute;j&agrave; utilis&eacute; par une autre personne", imageUrl: 'images/icones/error.png', html: true});
                }else if(parseInt(msg)==3){ 
                    swal({ title: "Erreur", text: "Cette adresse email est d&eacute;j&agrave; utilis&eacute;e par une autre personne", imageUrl: 'images/icones/error.png', html: true});
                }else{ 
                    swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true});
                }
               // alert(msg);
               $('.loaderMessage').removeClass('is-active');
            },
            error: function(){
                $('.loaderMessage').removeClass('is-active');
                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true});
            }
        });
    });


    $('#monFormUpdateProfile').on('submit', function(e) {
        e.preventDefault();
        $('.loaderMessage').addClass('is-active'); 
        if($("#motDePasse").val() == $("#motDePasse2").val()){
            $.ajax({
                type: "POST",
                url: "php/controller/salarie.php", //process to mail
                data: $(this).serialize(),
                success: function(msg){
                    if(parseInt(msg)==1){
                        swal({ title: "Bravo !", text: "Votre mot de passe a &eacute;t&eacute; modifi&eacute; avec succ&egrave;s. <br>Lors de votre prochaine connexion, c'est ce nouveau mot de passe que vous devez utiliser", imageUrl: 'images/icones/success.png', html: true});
                        $(document).click(function(){
                            location.reload();
                        });
                    }else if(parseInt(msg)==2){ 
                        swal({ title: "Erreur", text: "Le 'Mot de passe actuel' que vous avez saisi ne correspond &agrave; celui de votre compte", imageUrl: 'images/icones/error.png', html: true});
                    }
                   // alert(msg);
                   $('.loaderMessage').removeClass('is-active');
                },
                error: function(){
                    $('.loaderMessage').removeClass('is-active');
                    swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true});
                }
            });
        }else{
             $('.loaderMessage').removeClass('is-active');
            swal({ title: "Erreur", text: "Les nouveaux mots de passe saisis ne sont pas identiques, veuillez les v&eacute;rifier ou les resaisir", imageUrl: 'images/icones/errorPass.png', html: true});
        } 
    });
    
});


