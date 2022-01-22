<script type="text/javascript" src="php/view/routinejournalier/routinejournalier.js"></script>
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

<!-- DEBUT Formulaire de Modification pour numéro bon commande et date sortie -->


<div class="container" style="background-color: white; padding: 30px; margin-top: 10px;">
  <div class="loader loaderMessage loader-bar" data-text="Envoi des donn&eacute;es en cours. Veuillez patienter" data-rounded></div>
  <div id="mail-app" class="section">
    <div class="row">
      <div class="col s12 m12 l12">
      <h5 align="center">MODIFICATIONS</h5>
        <?php
            require_once('php/classe/classeStock.php');
            $Stock = new Stock();
            $list = $Stock->rechercheRoutine($opt[1]);
            foreach($list as $value){
        ?>
          <div class="row">
            <form class="col s12" id="monFormMod">
              
                <div class="input-field col s12 m6 l6">
                  <input value="<?php echo $value['datePrise'] ?>" required id="datePrise" name="datePrise" type="date">
                  <label for="datePrise"></label>
                </div>
                 
                <div class="input-field col s12 m6 l6 mt-3">
                <label class="labelForSelect2 active">Journalier</label>
                  <select id="idSalarie" name="idSalarie" class="browser-default js-example-basic-single" required="" style="width: 100%;">
                    <?php
                      require_once('php/classe/classeSalarie.php');
                      $Article = new Salarie();
                      $list = $Article->listSalaries();
                      foreach ($list as $value1) {
                          ?>
                      <option <?php if($value['idSalarie'] == $value1['idSalarie']) echo "selected"; ?> value="<?php echo $value1['idSalarie']; ?>"><?php echo $value1['nom']; ?></option> 
                      <option value="<?php echo $value['idSalarie'];?>"><?php echo $value['nom'];?></option>   
                    <?php
                      }
                    ?>
                  </select>
                    </div>          
              <div class="row">
                <div class="input-field col s12">
                  <input type="hidden" id="idRoutine" name="modifier" value="<?php echo $value['idRoutine'] ?>">
                  <button class="btn green waves-effect waves-light right" type="submit" name="action">Valider</button>
                  <a class="btn mr-1 red waves-effect waves-light right" href="routinejournalier_liste">Annuler
                  </a>
                </div>
              </div>
            </form>
          </div>
        <?php } ?>
      </div>
    </div>
                        <!----------- Fin de la Modification ----------->  
        </br>

<!-- DEBUT Affichage des articles avec Modification et Suppresssion -->

      <div class="row"  id="affiche2" class="blocSecondaire">
        <!---On affiche ici(dans ce div "affiche2") le contenu du fichier affiche.php --->
          </br>
          <div class="col s12 blocPrincipal">
            <table class="table table-responsive">
              <thead>
                <tr>
                
                  <th>Articles</th>
                  <th>Quantite</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
              <?php
          require_once('php/classe/classeStock.php');
            $Sortie = new Stock();  
            $list = $Sortie->listDetailsStock($opt[1]); 
                foreach ($list as $value) {
                    echo '
                    <tr>
                        <td hidden>'.$value['idStock'].'</td>
                        <td hidden>'.$value['idArticle'].'</td>
                        <td hidden>'.$value['idArticle'].'</td>
                        <td>'.$value['libelle'].'</td>
                        <td>'.$value['quantite'].'</td>
                        <td hidden>'.$value['idRoutine'].'</td>
                        <td>
                          <button id="'.$value['idRoutine'].'" onclick="mySupprression(\''.$value['idStock'].'\')"  class="btn-floating btn-flat tooltipped white waves-effect waves-light" data-position="top" data-tooltip="Supprimer"><i class="material-icons" style="color: #F44336;">delete</i></button>
                          <button class="testModal" id="'.$value['idStock'].'" data-toggle="modal" data-id="'.$value['idStock'].'"  class="btn-floating btn-flat tooltipped white waves-effect waves-light" data-position="top" data-tooltip="Modifier"><i class="material-icons" style="color: #000;">create</i></button>
                          </td>
                      </tr>
                  ';
                }
              ?>
              </tbody>
            </table>
                </div>  
          </div>
                <div>
                    <a style="margin-top:4px" class="btn green waves-effect waves-light right" href="routinejournalier_liste" data-dismiss="modal">TERMINER
                    </a>
                </div>

                
      </div>
      
<!----------------- FIN Affichage des articles ----------------->


<!-- DEBUT Modal -->
<div class="modal2 fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MODIFICATIONS</h5>
      </div>
      <div class="modal-body">
      <form class="col s12" id="formModif2">
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
            <input required id="quantiteUpdate" name="quantite" type="number" placeholder="">
            <label for="quantiteUpdate">Quantite</label>
          </div>

          <input type="hidden" id="idRoutines" name="idRoutine">
  
        </div>

        <div class="row" style="margin:10px;">
          <div class="input-field col s12">
            <input type="hidden" name="modifier2" id="idModal">
            <button class="btn green waves-effect waves-light right" type="submit" name="action">Valider</button>
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
                          $(document).click(function(){
                            console.log(idStock);
                            $('#affiche2').load("php/view/routinejournalier/affiche.php?send="+idRoutine);
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