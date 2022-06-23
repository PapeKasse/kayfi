<script type="text/javascript" src="php/view/literie/table.js"></script>

<div class="container" style="padding: 10px;">
  <!-- <div > -->
    <!--DataTables example-->
    <div class="row" style="background-color: white; padding: 30px;">
       <div id="table-datatables">
        <h4 class="header">Liste des Literie</h4>
        <div class="row">
          <div class="col s12">
           <?php if($tab["menu"]["literie"]["ajouter"]==1) echo"<a href='literie_ajouter' class='btn waves-effect waves-light green darken-1'>Nouveau</a>"; ?>
            <?php if($tab["menu"]["literie"]["modifier"]==1) echo"<a id='modif' href='javascript:void();' class='btn waves-effect waves-light blue darken-1'>Modifier</a>"; ?>
            <?php if($tab["menu"]["literie"]["supprimer"]==1) echo"<a id='supp' href='javascript:void();' class='btn waves-effect red waves-light  darken-1'>Supprimer</a>"; ?>
          </div>     
        </div>      
        <div class="row">
          <div class="col s12">
            <table id="data-table-simple" class="responsive-table display tableRow" cellspacing="0">
              <thead>
                <tr>
                  <th>Photo</th>
                  <th>Nom</th>
                  <th>Prix</th>
                  <th>Prix Barré</th>
                  <th>Description</th>
                  <th>Ajouter Le</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Photo</th>
                  <th>Nom</th>
                  <th>Prix</th>
                  <th>Prix Barré</th>
                  <th>Description</th>
                  <th>Ajouter Le</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                require_once('php/classe/classeLiterie.php');
                $Literie= new Literie();
                $list = $Literie->listLiterie();
                foreach($list as $value){
                 
                  echo ' <tr id="'.$value['idLiterie'].'">';
                  echo'<td><img src="php/controller/photos/'.$value['photo'].'" alt="" style="width:150px;height:110px;" /></td>';
                       echo' <td>'.$value['nom'].'</td>';
                        echo'  <td>'.$value['prix'].' FCFA</td>';
                        echo'  <td> <del>'.$value['prixBarre'].' FCFA</del></td>';
                          echo'<td>'.$value['descript'].'</td>';
                         echo' <td>'.$value['dateLiterie'].'</td>';
                      echo'</tr>';
                  
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
<input type="hidden" id="sup" value="">