<script type="text/javascript" src="php/view/routinejournalier/table.js"></script>
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


<script type="text/javascript" src="php/view/routinejournalier/routinejournalier.js"></script>
<div class="container" style="background-color: white; padding: 30px; margin-top: 10px;">
  <div class="loader loaderMessage loader-bar" data-text="Envoi des donn&eacute;es en cours. Veuillez patienter" data-rounded></div>
  <div id="mail-app" class="section">
    <!--DataTables example-->
    <div class="row">
      <div class="col s12 m12 l12">
        <!-- <div class="card-panel"> -->
          <h4 class="header2">Ajouter une Routine Journalière</h4>
          <div class="row">
            <form class="col s12" id="monForm">
              <div class="row">

              <div class="input-field col s12 m6 l6">
                <input id="datePrise" required id="datePrise" name="datePrise" type="date">
                <label for="datePrise"></label>
              </div> 

               <div class="input-field col s12 m6 l6 mt-3">
                  <label class="labelForSelect2 active">Journalier</label>
                  <select id="idSalarie" name="idSalarie" class="browser-default js-example-basic-single" required="" style="width: 100%;">
                    <?php
                      require_once('php/classe/classeSalarie.php');
                      $Article = new Salarie();
                      $list = $Article->listSalaries();
                      foreach ($list as $value) {
                          ?>
                      <option value="<?php echo $value['idSalarie'];?>"><?php echo $value['nom'];?></option>   
                    <?php
                      }
                    ?>
                  </select>
                </div>

                <div class="row">
                <div class="input-field col s12">
                  <input type="hidden" name="ajouter">
                  <button class="btn green waves-effect waves-light right" id="camouflage" type="submit" name="action">Suivant</button>
                </div>
              </div>
            </form>
          </div>
          </br>
        <!-- </div> -->

          </br>

<!-- DEBUT Affichage des articles -->

        <div class="row" style="display: none;" id="routine">
          <h5 align="center">AFFICHE ARTICLES</h5>
          <div class="col s12 blocPrincipal">
            <div class="blocSecondaire">
                <div id="affiche">
                <!---On affiche ici(dans ce div "affiche" ) le contenu du fichier affiche.php --->
            <div>
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Articles</th>
                  <th>Quantite</th>
                  <th>Options</th>
                </tr>
              </thead>
            </table>
                </div>
            </div>
          </div>
        </div>
 
      <div class="row" style="display: none;" id="routine1">
        <div class="row">
          <form class="col s12" id="monFormDetail">
                <div class="input-field col s12 m6 l6 mt-3">
                <label class="labelForSelect2 active">Articles</label>
                  <select id="idArticle" name="idArticle" class="browser-default js-example-basic-single" required="" style="width: 100%;">
                    <?php
                      require_once('php/classe/classeStock.php');
                      $Article = new Stock();
                      $list = $Article->listArticle();
                      foreach ($list as $value) {
                          ?>
                      <option value="<?php echo $value['idArticle'];?>"><?php echo $value['libelle'];?></option>  
                    <?php
                      }
                    ?>
                  </select>
                </div>

                <div class="input-field col s12 m6 l6"> 
                  <input required id="quantite" name="quantite" type="text">
                  <label for="quantite">Quantite</label>
               </div>
            
              <input type="hidden" id="idRoutine" name="idRoutine">
              
              <div class="row">
                <div class="input-field col s12">
                  <input type="hidden" name="ajouter2">
                  <button class="btn green waves-effect waves-light right" type="submit" name="action">Valider</button>
                  <a class="btn mr-1 red waves-effect waves-light right" href="routinejournalier_liste">Annuler
                  </a>
                </div>
              </div>
          </form>
        </div>
        </div>
      </div>
    </div>       
  </div>     
</div>

<!----------------- FIN Affichage des articles ----------------->



<!-- DEBUT Modal -->

<div class="modal2 fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modifications</h5>
      </div>
      <div class="modal-body">
      <form class="col s12" id="formModif">
        <div class="row"> 

             <label class="labelForSelect2 active">Articles</label>
              <select id="codeArticleUpdate" name="idArticle" class="browser-default js-example-basic-single" required="" style="width: 100%;">
                <option value="" selected disabled >Choix</option>
                  <?php
                    require_once('php/classe/classeStock.php');
                    $Type = new Stock();
                    $list3 = $Type->listArticle();
                    foreach ($list3 as $value3) {
                        ?> 
                   <!-- <?php $jj == $value3['idArticle'];
                        echo "selected"; ?> --> 
                <option  value="<?php echo $value3['idArticle'];?>"><?php echo $value3['libelle'];?></option>  
                  <?php
                    }
                  ?>
              </select>
          </div>

          <?php echo $codeA = '<script type="text/javascript">document.write(codeArticle1);</script>'; ?> 
          <div class="input-field col s12 m12 l12">
            <input required id="quantiteUpdate" name="quantite" type="text" placeholder="">
            <label for="quantiteUpdate">Quantite</label>
          </div>

          <input type="hidden" id="idRoutines" name="idRoutine">
          
        </div>

        <div class="row" style="margin:10px;>
          <div class="input-field col s12">
            <input type="hidden" name="modifier2" id="idModal">
            <button id="finish" class="btn green waves-effect waves-light right" type="submit" name="action">Valider</button>
            <a class="btn mr-1 red waves-effect waves-light right" data-dismiss="modal">Annuler
            </a>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

  <!-- fin modal  -->

  <!-- DEBUT Fonction Javscript pour supprimer un article via le modal et Rediréction avec l'idSortie vers affiche.php-->

<script type="text/javascript"> 

function mySupprression(idStock){
  var idRoutine = document.getElementById("idRoutine").value;

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
                  url: "php/controller/routinejournalier.php?supprimer2="+idStock, //process to mail
                  data: '',
                  success: function(msg){
                      if(parseInt(msg)==1){
                          swal("Bravo!", "L'élément a été supprimé avec succès", "success");
                          
                          $(document).ready(function(){
                              $('#affiche').load("php/view/routinejournalier/affiche.php?send="+idRoutine);
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


















        