<script type="text/javascript" src="php/view/literie/literie.js"></script>
<script type="text/javascript" src="php/view/literie/table.js"></script>
<div class="container" style="background-color: white; padding: 30px; margin-top: 10px;">
  <div class="loader loaderMessage loader-bar" data-text="Envoi des donn&eacute;es en cours. Veuillez patienter" data-rounded></div>
  <div id="mail-app" class="section">
    <div class="row">
      <div class="col s12 m12 l12">
        <h4 class="header2">Modification</h4>
        <?php
            require_once('php/classe/classeLiterie.php');
            $Literie = new Literie();
            $list = $Literie->rechercheLiterie($opt[1]);
            foreach($list as $value){
        ?>
          <div class="row">
            <form class="col s12" id="monFormMod" class="needs-validation" enctype="multipart/form-data">
              <div class="row">

                <div class="input-field col s12 m6 l6">
                  <input value="<?php echo $value['nom'] ?>" required id="nom" name="nom" type="text">
                  <label for="dateSortie">Nom</label>
                </div>

                <div class="input-field col s12 m6 l6">
                  <input value="<?php echo $value['prix'] ?>" required id="prix" name="prix" type="number">
                  <label for="prix">Prix</label>
                </div>

                <div class="input-field col s12 m6 l6">
                  <input value="<?php echo $value['prixBarre'] ?>" required id="prixBarre" name="prixBarre" type="number">
                  <label for="prixBarre">Prix</label>
                </div>

                <div class="input-field col s12 m6 l6">
                  <input value="<?php echo $value['descript'] ?>" required id="descript" name="descript" type="text">
                  <label for="descript">Description</label>
                </div>

                <div class="input-field col s12 m6 l6">
                  <input value="<?php echo $value['photo'] ?>" required id="photo" name="image" type="file">
                  <label for="photo"></label>
                </div>

              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="hidden" name="modifier" value="<?php echo $value['idLiterie'] ?>">
                  <button class="btn green waves-effect waves-light right" type="submit" name="modifier">Valider</button>
                  <a class="btn mr-1 red waves-effect waves-light right" href="literie_liste">Annuler
                  </a>
                </div>
              </div>
            </form>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>