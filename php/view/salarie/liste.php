<script type="text/javascript" src="php/view/salarie/table.js"></script>

<div class="container" style="padding: 10px;">
  <!-- <div > -->
    <!--DataTables example-->
    <div class="row" style="background-color: white; padding: 30px;">
       <div id="table-datatables">
        <h4 class="header">Liste des utilisateurs</h4>
        <div class="row">
          <div class="col s12">
           <?php if($tab["menu"]["salarie"]["ajouter"]==1) echo"<a href='salarie_ajouter' class='btn waves-effect waves-light green darken-1'>Nouveau</a>"; ?>
            <?php if($tab["menu"]["salarie"]["modifier"]==1) echo"<a id='modif' href='javascript:void();' class='btn waves-effect waves-light blue darken-1'>Modifier</a>"; ?>
            <?php if($tab["menu"]["salarie"]["supprimer"]==1) echo"<a id='supp' href='javascript:void();' class='btn waves-effect waves-light  darken-1'></a>"; ?>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <table id="data-table-simple" class="responsive-table display tableRow" cellspacing="0">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Pr&eacute;nom</th>
                  <th>E-mail</th>
                  <th>Adresse</th>
                  <th>T&eacute;l&eacute;phone</th>
                  <th>Login</th>
                  <th>Etat</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nom</th>
                  <th>Pr&eacute;nom</th>
                  <th>E-mail</th>
                  <th>Adresse</th>
                  <th>T&eacute;l&eacute;phone</th>
                  <th>Login</th>
                  <th>Etat</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                require_once('php/classe/classeSalarie.php');
                $Salarie= new Salarie();
                $list = $Salarie->listSalarie2();
                foreach($list as $value){
                  if($value['etat'] == 1)
                    $etatCompte = "Activ&eacute;";
                  else
                    $etatCompte = "D&eacute;sactiv&eacute;";
                  echo '
                      <tr id="'.$value['idSalarie'].'" etat="'.$value['etat'].'">
                          <td>'.$value['nom'].'</td>
                          <td>'.$value['prenom'].'</td>
                          <td>'.$value['email'].'</td>
                          <td>'.$value['adresse'].'</td>
                          <td>'.$value['telephone'].'</td>
                          <td>'.$value['login'].'</td>
                          <td>'.$etatCompte.'</td>
                      </tr>
                  ';
                }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  <!-- </div> -->
</div>