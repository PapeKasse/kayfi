$(function () {
    var tab = new Array;
    var i = 0;
    $('.tableRow > tbody > tr').css('cursor', 'pointer');
    $("#modif").hide();
    $("#resetPassword").hide();
    $("#supp").hide();

    $("#modif").click(function () {
        var Id = tab[0];
        window.location.href ="sardin_modifier-"+Id;
    });

    $("#supp").click(function () {  
        var Id = tab.join('$');
        $("#sup").attr('value', Id);
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
                    var Id = $('#sup').attr('value');
                    $("#supp").trigger('click');
                    $.ajax({
                        type: "GET",
                        url: "php/controller/sardin.php?supprimer=" + Id, //process to mail
                        data: '',
                        success: function (msg) {
                            if (parseInt(msg) == 1) {
                                swal("Bravo!", "L'élément a été supprimé avec succès", "success");
                                $(document).click(function () {
                                    location.reload();
                                });
                            }
                            else {
                                swal("Une erreur est survenue lors de la connexion à la base de données");
                            }
                            // alert(msg); 
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



    $('.tableRow > tbody > tr').click(function () {
        var t = $(this).attr('rel');
        if (t != 1) {
            $(this).css('background', '#90E5B7');
            $(this).attr('rel', 1);
            tab[i] = $(this).attr('id');
            if (tab.length != 1) {
                $('#modif').hide();

            } else
                $('#modif').show();

            if (tab.length > 0)
                $('#supp').show();
            i++;
        } else {
            $(this).attr('rel', 0);
            $(this).css('background', '#FFF');
            var rm = $(this).attr('id');
            tab = jQuery.grep(tab, function (value) {
                return value != rm;

            });
            if (tab.length == 1) {
                $('#modif').show();

            } else
                $('#modif').hide();



            if (tab.length == 0) {
                $('#supp').hide();

            }
            i--;

        }
    });


    $('.testModal').click(function () {
        //$( '#listArticle' ).hide();
        tab[i] = $(this).attr('id');
        var Id = tab[0];
        console.log(Id);
        //("#idModal").val(Id);
        //alert(Id);
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $("#idModal").val(data[0]);
        $('#codeArticleUpdate').val(data[1]);
        $('#codeArticleUpdate').select2();
        $('#quantiteUpdate').val(data[3]);
        $("#idSorties").val(data[4]);
        
    });


});
