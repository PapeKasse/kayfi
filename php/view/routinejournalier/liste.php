<script type="text/javascript" src="php/view/routinejournalier/table.js"></script>

<div class="container" style="padding: 10px;">
  <!-- <div > -->
    <!--DataTables example-->
    <div class="row" style="background-color: white; padding: 30px;">
       <div id="table-datatables">
        <h4 class="header">Liste des Stock</h4>
        <div class="row">
          <div class="col s12">
           <?php if($tab["menu"]["routinejournalier"]["ajouter"]==1) echo"<a href='routinejournalier_ajouter' class='btn waves-effect waves-light green darken-1'>Nouveau</a>"; ?>
            <span id='modif'>
            <?php if($tab["menu"]["routinejournalier"]["modifier"]==1) echo"<a id='modifiers' href='javascript:void();' class='btn waves-effect waves-light blue darken-1'>Modifier</a>"; ?>
            
            </span>

            <?php if($tab["menu"]["routinejournalier"]["supprimer"]==1) echo"<a id='supp' href='javascript:void();' class='btn waves-effect red waves-light  darken-1'>Supprimer</a>"; ?>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <table id="data-table-simple" class="responsive-table display tableRow" cellspacing="0">
              <thead>
                <tr>
                  <th>Journalier</th>
                  <th>Date Prise</th>                  
                </tr>
              </thead>
              <tfoot>
              <tr>
                  <th>Journalier</th>
                  <th>Date Prise</th>                  
                </tr>
              </tfoot>
              <tbody>
              <?php
                require_once('php/classe/classeStock.php');
                $Sortie= new Stock();
                $list = $Sortie->listRoutine();
                foreach($list as $value){
                  echo '
                      <tr id="'.$value['idRoutine'].'">
                          <td hidden>'.$value['idRoutine'].'</td>
                          <td>'.$value['nom'].'</td>
                          <td>'.$value['datePrise'].'</td>
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
<input type="hidden" id="sup" value="">