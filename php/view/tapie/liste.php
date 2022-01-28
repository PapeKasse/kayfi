<script type="text/javascript" src="php/view/tapie/table.js"></script>

<div class="container" style="padding: 10px;">
  <!-- <div > -->
    <!--DataTables example-->
    <div class="row" style="background-color: white; padding: 30px;">
       <div id="table-datatables">
        <h4 class="header">Liste des Tapies</h4>
        <div class="row">
          <div class="col s12">
           <?php if($tab["menu"]["tapie"]["ajouter"]==1) echo"<a href='tapie_ajouter' class='btn waves-effect waves-light green darken-1'>Nouveau</a>"; ?>
            <?php if($tab["menu"]["tapie"]["modifier"]==1) echo"<a id='modif' href='javascript:void();' class='btn waves-effect waves-light blue darken-1'>Modifier</a>"; ?>
            <?php if($tab["menu"]["tapie"]["supprimer"]==1) echo"<a id='supp' href='javascript:void();' class='btn waves-effect red waves-light  darken-1'>Supprimer</a>"; ?>
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
                  <th>Description</th>
                  <th>Ajouter Le</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Photo</th>
                  <th>Nom</th>
                  <th>Prix</th>
                  <th>Description</th>
                  <th>Ajouter Le</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                require_once('php/classe/classeTapie.php');
                $Tapie= new Tapie();
                $list = $Tapie->listTapie();
                foreach($list as $value){
                 
                  echo ' <tr id="'.$value['idTapie'].'">';
                  echo'<td><img src="php/controller/photos/'.$value['photo'].'" alt="" style="width:100px;height:100px;" /></td>';
                       echo' <td>'.$value['nom'].'</td>';
                        echo'  <td>'.$value['prix'].'</td>';
                          echo'<td>'.$value['descript'].'</td>';
                         echo' <td>'.$value['dateTapie'].'</td>';
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