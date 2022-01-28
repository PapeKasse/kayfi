<script type="text/javascript" src="php/view/tapie/tapie.js"></script>
<script type="text/javascript" src="php/view/tapie/table.js"></script>
<!----------------- DEBUT CSS pour styliser l'affichage de nos Articles ---------------->
<style>
.blocPrincipal{
  width: 50%;
  height: 250px;
  border: 1px solid black;
  overflow-y: auto;
  overflow-x: hidden;
}
.blocSecondaire{
  /* background-color: lightGreen; */
  width: 100%;
  height: 30%;
}

td {
    text-align: center;
}
th {
    text-align: center;
}
</style>



<!----------------- FIN CSS---------------->

  <div class="container" style="background-color: white; padding: 30px; margin-top: 10px;">
      <div class="loader loaderMessage loader-bar" data-text="Envoi des donn&eacute;es en cours. Veuillez patienter" data-rounded></div>
        <div id="mail-app" class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                       <h4 class="header2">Ajouter Tapie</h4>
                    
                  <div class="row">
                      <form id="monForm" method="Post" class=" col s12" enctype="multipart/form-data">
                        <div class="row">

                          <div class="input-field col s12 m6 l6">
                            <input required id="file" name="image" type="file">
                            <label for="file"></label>
                          </div>

                          <div class="input-field col s12 m6 l6">
                            <input required id="nom" name="nom" type="text">
                            <label for="nom">Nom</label>
                          </div>

                          
                          <div class="input-field col s12 m6 l6">
                            <input required id="descript" name="descript" type="text">
                            <label for="descript">Description</label>
                          </div>

                          
                          <div class="input-field col s12 m6 l6">
                            <input required id="prix" name="prix" type="text">
                            <label for="prix">Prix</label>
                          </div>

                        </div>
                        <div class="row" id="camouflage">
                          <div class="input-field col s12">
                            <input type="hidden" name="ajouter">
                            <button  class="btn green waves-effect waves-light right" type="submit" name="ajouter">Valider</button>
                            <a class="btn mr-1 red waves-effect waves-light right" href="tapie_liste">Annuler
                            </a>
                          </div>
                        </div>
                      </form>
                    </div>
               </div>  
                    </br>

             </div>
       </div>
    </div>

  <!-- fin modal  -->

  <!-- DEBUT Fonction Javscript pour supprimer un article via le modal et Rediréction avec l'idSortie vers affiche.php-->

<script type="text/javascript"> 

function mySupprression(idDetailssortie){
  var idSortie = document.getElementById("idSortie").value;

    swal({   title: "Suppression?",   
        text: "Êtes-vous sûr de vouloir supprimer? Il sera impossible de récupérer l'élément après la suppression!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Supprimer",   
        cancelButtonText: "Annuler",   
        closeOnConfirm: false,   
        closeOnCancel: false }, 
        function(isConfirm){   
            if (isConfirm) {        
              $.ajax({
                  type: "GET",
                  url: "php/controller/sortie.php?supprimer2="+idDetailssortie, //process to mail
                  data: '',
                  success: function(msg){
                      if(parseInt(msg)==1){
                          swal("Bravo!", "L'élément a été supprimé avec succès", "success");
                          
                          $(document).ready(function(){
                              $('#affiche').load("php/view/sortie/affiche.php?send="+idSortie);
                          });
                      }
                      else{ 
                          swal("Une erreur est survenue lors de la connexion à la base de données");
                      }
                      // alert(msg); 
                  },
                  error: function(){
                      swal("Une erreur est survenue veuillez contacter l'administrateur");
                  }
              });  
            } 
              else {
                    swal("Annulé!", "L'élément a été conservé", "error");   
              } 
          }); 
}
</script>

               <!----------------- FIN Fonction Javscript ---------------->