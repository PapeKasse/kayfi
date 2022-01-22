$(function(){
    var tab=new Array;
    var i=0;
    $('.tableRow > tbody > tr').css('cursor','pointer');
       $("#modif").hide();
       $("#resetPassword").hide();
       $("#supp").hide();
 
 
    $("#modif").click(function(){
        var Id=tab[0];
        window.location.href = "salarie_modifier-"+Id;
    });
    
    $("#resetPassword").click(function(){
        var Id=tab[0];
        
        swal({   title: "Reinitialisation",   
            text: "&Ecirc;tes-vous s&ucirc;r de vouloir reinitialiser le mot de passe de ce compte</strong>",   
            type: "warning",   
            showCancelButton: true,
            html:true,   
            confirmButtonColor: '#FF0000',   
            confirmButtonText: "Reinitialiser",   
            cancelButtonText: "Annuler",   
            closeOnConfirm: false,   
            closeOnCancel: false }, 
            function(isConfirm){   
                if (isConfirm) {  
                    $.ajax({
                        type: "GET",
                        url: "php/controller/salarie.php?resetPassword="+Id, //process to mail
                        data: '',
                        success: function(msg){
                            if(parseInt(msg)==1){
                                swal({ title: "Bravo!", text: "La reinitialiser du mot de passe a &eacute;t&eacute; effectu&eacute;e avec succ&egrave;s<br><br> L'salarie re&ccedil;evra un mail contenant son nouveau mot de passe", imageUrl: 'images/icones/success.png', html: true});
                                $(document).click(function(){
                                   location.reload();
                                });
                            }
                            else{ 
                                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true});
                            }
                           //alert(msg); 
                        },
                        error: function(){
                            swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true});                            
                        }
                        });  
                } 
                else {
                    swal({ title: "Annul&eacute;", text: "Le mot de passe du compte n'a pas &eacute;t&eacute; chang&eacute;", imageUrl: 'images/icones/success.png', html: true});

                } 
            });
    });
 
    $("#supp").click(function(){
        var Id=tab.join('$');
        $("#sup").attr('value', Id);
        // alert();
        var etat = $("#supp").attr('data-etat');
        var mot = "";
        var motSansArticle = "";
        var verbe = "";
        var couleur = "";
        if(etat == 1){
            mot = "L'Activation";
            motSansArticle = "Activation";
            verbe = "Activer";
            verbeSp = "Activer";
            couleur = "green";
        }else if(etat == 0){
            mot = "La D&eacute;sactivation";
            motSansArticle = "D&eacute;sactivation";
            verbe = "D&eacute;sactiver";
            verbeSp = "Desactiver";
            couleur = "red";
        }
        swal({   title: motSansArticle,   
             text: "&Ecirc;tes-vous s&ucirc;r de vouloir "+verbe+" ce (s) compte (s)</strong>",   
             type: "warning",   
             showCancelButton: true,
             html:true,   
             confirmButtonColor: couleur,   
             confirmButtonText: verbeSp,   
             cancelButtonText: "Annuler",   
             closeOnConfirm: false,   
             closeOnCancel: false }, 
            function(isConfirm){   
                if (isConfirm) {  
                    $.ajax({
                        type: "GET",
                        url: "php/controller/salarie.php?changerEtat="+Id+"&etat="+etat, //process to mail
                        data: '',
                        success: function(msg){
                            if(parseInt(msg)==1){
                                swal({ title: "Bravo!", text: mot+" a &eacute;t&eacute; effectu&eacute;e avec succ&egrave;s", imageUrl: 'images/icones/success.png', html: true});
                                $(document).click(function(){
                                   location.reload();
                                });
                            }
                            else{ 
                                swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue lors de la connexion &agrave; la base de donn&eacute;es, veuillez r&eacute;essayer plus tard", imageUrl: 'images/icones/errorDb.png', html: true});
                            }
                           // alert(msg); 
                        },
                        error: function(){
                            swal({ title: "D&eacute;sol&eacute;", text: "Une erreur est survenue veuillez contacter l'administrateur", imageUrl: 'images/icones/error.png', html: true});                            
                        }
                        });  
                } 
                else {
                    swal({ title: "Annul&eacute;", text: "L'&eacute;tat des compte n'a pas &eacute;t&eacute; chang&eacute;", imageUrl: 'images/icones/success.png', html: true});

                } 
        });
    });
       

    $('.tableRow > tbody > tr').click(function() {
        var t = $(this).attr('rel');
        var top = 1;
        var etat = 0;
        if(t != 1){
           $(this).css('background','#90E5B7');
           $(this).addClass('selected');
           $(this).attr('rel', 1);
            tab[i] = $(this).attr('id');
            if(tab.length != 1){
             $('#modif').hide(); 
             $('#resetPassword').hide(); 

            }else{
                $('#modif').show();
                $('#resetPassword').show();
                // alert($('.selected').length);
                // alert($('.selected[etat="1"]').length);
                if($('.selected').length == $('.selected[etat="1"]').length){
                    $("#supp").html('D&eacute;sactiver');
                    $("#supp").addClass('red');
                    $("#supp").removeClass('green');
                    $("#supp").attr('data-etat', 0);
                }
                else if($('.selected').length == $('.selected[etat="0"]').length){
                    $("#supp").html('Activer');
                    $("#supp").addClass('green');
                    $("#supp").removeClass('red');
                    $("#supp").attr('data-etat', 1);
                }
            }
            if(tab.length > 0)
                $('#supp').show();
            i++;
        }else{
           $(this).attr('rel', 0);
           $(this).css('background','#FFF');
           $(this).removeClass('selected');
             var rm = $(this).attr('id');
             tab = jQuery.grep(tab, function(value){
                return value != rm;
                 
             });
             if(tab.length == 1){
             $('#modif').show(); 
             $('#resetPassword').show(); 
             if($('.selected').length == $('.selected[etat="1"]').length){
                $("#supp").html('D&eacute;sactiver');
                    $("#supp").addClass('red');
                    $("#supp").removeClass('green');
                    $("#supp").attr('data-etat', 0);
             }
             else if($('.selected').length == $('.selected[etat="0"]').length){
                $("#supp").html('Activer');
                    $("#supp").addClass('green');
                    $("#supp").removeClass('red');
                    $("#supp").attr('data-etat', 1);
             }
             
            }else{
                $('#modif').hide();
                $('#resetPassword').hide();
            }
             
             
            if(tab.length == 0){
             $('#supp').hide(); 
             
            }
             i--;
            
        }
        if($('.selected').length != $('.selected[etat="0"]').length){
            if($('.selected').length != $('.selected[etat="1"]').length)
                top = 0;
        }
        // });
        if(top == 0 || tab.length == 0){
            $('#supp').hide();
        }else{
            $('#supp').show(); 
        }
    });
});
