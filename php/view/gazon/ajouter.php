<script type="text/javascript" src="php/view/gazon/gazon.js"></script>
<script type="text/javascript" src="php/view/gazon/table.js"></script>
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
                       <h4 class="header2">Ajouter Gazon</h4>
                    
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

                           <div class="input-field col s12 m6 l6">
                            <input required id="prixBarre" name="prixBarre" type="text">
                            <label for="prix">Prix Barré</label>
                          </div>

                        </div>
                        <div class="row" id="camouflage">
                          <div class="input-field col s12">
                            <input type="hidden" name="ajouter">
                            <button  class="btn green waves-effect waves-light right" type="submit" name="ajouter">Valider</button>
                            <a class="btn mr-1 red waves-effect waves-light right" href="gazon_liste">Annuler
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
