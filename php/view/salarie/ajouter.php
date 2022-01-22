<script type="text/javascript" src="php/view/salarie/salarie.js"></script>
<div class="container" style="background-color: white; padding: 30px; margin-top: 10px;">
  <div class="loader loaderMessage loader-bar" data-text="Envoi des donn&eacute;es en cours. Veuillez patienter" data-rounded></div>
  <div id="mail-app" class="section">
    <!--DataTables example-->
    <div class="row">
      <div class="col s12 m12 l12">
        <!-- <div class="card-panel"> -->
          <h4 class="header2">Ajouter un utilisateur</h4>
          <div class="row">
            <form class="col s12" id="monForm">
              <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input required id="nom" name="nom" type="text">
                  <label for="nom">Nom</label>
                </div>
             
                <div class="input-field col s12 m4 l4">
                  <input required id="prenom" name="prenom" type="text">
                  <label for="prenom">Pr&eacute;nom</label>
                </div>
             
                <div class="input-field col s12 m4 l4">
                  <input id="adresse" name="adresse" type="text">
                  <label for="adresse">Adresse</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input required id="email" name="email" type="email">
                  <label for="email">E-mail</label>
                </div>
             
                <div class="input-field col s12 m4 l4">
                  <input id="telephone" name="telephone" type="text">
                  <label for="telephone">T&eacute;l&eacute;phone</label>
                </div>
             
                <div class="input-field col s12 m4 l4">
                  <input required id="login" name="login" type="text">
                  <label for="login">Login</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 m4 l4">
                  <input required id="motDePasse" name="motDePasse" type="password">
                  <label for="motDePasse">Mot de passe</label>
                </div>

                <div class="input-field col s12 m4 l4">
                  <input required id="motDePasse2" name="motDePasse2" type="password">
                  <label for="motDePasse2">Confirmer mot de passe</label>
                </div>
              </div>
              <div class="row">
                <p>Base(s)</p>
                <?php
                  require_once('php/classe/classeSalarie.php');
                  $Salarie = new Salarie();
                  $list3 = $Salarie->listBase();
                  foreach($list3 as $value3){
                ?>
                  <p style="display: inline-block; margin-right: 15px;">
                    <input type="checkbox" id="role<?php echo $value3['idBase'] ?>" value="<?php echo $value3['idBase'] ?>" />
                    <label for="role<?php echo $value3['idBase'] ?>"><?php echo $value3['libelle'] ?></label>
                  </p> 
                <?php  } ?>
              </div>
              <div class="row">
                  <div class="input-field col s12">
                    <input type="hidden" name="idRolesalarie" value="1">
                    <input type="hidden" name="idDepartement" value="1">
                    <input type="hidden" id="bases" name="bases">
                    <input type="hidden" name="ajouter">
                    <button class="btn green waves-effect waves-light right" type="submit" name="action">Valider
                    </button>
                    <a class="btn mr-1 red waves-effect waves-light right" href="salarie_liste">Annuler
                    </a>
                  </div>
              </div>
            </form>
          </div>
        <!-- </div> -->
      </div>
    </div>
   
  </div>
</div>

<script type="text/javascript">
  $("input[type=checkbox]").on("click", function(){
    var selected = [];
    $('input[type=checkbox]:checked').each(function() {
        selected.push($(this).attr('value'));
    });
    $("#bases").attr('value', selected);
   
  });
</script>