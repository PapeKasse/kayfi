<script type="text/javascript" src="php/view/sortie/table.js"></script>
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

 <!----------------- DEBUT Code à afficher dans les divs affiche ou affiche2 ---------------->  

<div class="col-md-12">
<div class="row"  class="blocSecondaire">
          <div  class="col s12 blocPrincipal">
          <?php
          require_once('../../classe/classeSortie.php');
            $Sortie = new Sortie();  
            $id =  htmlspecialchars($_GET['send']);
            $list = $Sortie->listDetailsSortie($id);
            echo'
            <table id="tableRow" class="table table-responsive">
              <thead>
                <tr>
                  <th>Article</th>
                  <th>Quantite</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
              
              ';
                
                foreach ($list as $value) {
                 
                    echo '
                    <tr>
                        <td hidden>'.$value['idDetailssortie'].'</td>
                          <td hidden>'.$value['codeArticle'].'</td>
                          <td>'.$value['codeArticle'].'-'.$value['libelle'].'</td>
                          <td>'.$value['quantite'].'</td>
                          <td hidden>'.$value['idSortie'].'</td>
                          <td>
                          <button  onclick="mySupprression(\''.$value['idDetailssortie'].'\')"  class="btn-floating btn-flat tooltipped white waves-effect waves-light" data-position="top" data-tooltip="Supprimer"><i class="material-icons" style="color: #F44336;">delete</i></button>
                          <button class="testModal" id="'.$value['idDetailssortie'].'" data-toggle="modal" data-id="'.$value['idDetailssortie'].'"  class="btn-floating btn-flat tooltipped white waves-effect waves-light" data-position="top" data-tooltip="Modifier"><i class="material-icons" style="color: #000;">create</i></button>
                          </td>
                      </tr>
                  ';
                }
              ?>
              </tbody>
            </table>
          </div>
        </div>
                      <!----------------- FIN du code d'affichage ---------------->
        
<input type="hidden" id="sup" value="">

  <!-- DEBUT Fonction Javscript pour supprimer un article via le modal et Rediréction avec l'idSortie sur la même page affiche.php-->

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
                              $('#affiche2').load("php/view/sortie/affiche.php?send="+idSortie);
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