<?php
require'../config/database.php';
if($_POST)
{
$db = Database::connect();
$statement= $db->prepare('SELECT id,name ,category,description,image,price,id_user FROM article WHERE id=?');
$statement->execute(array($_POST['id']));
$item=$statement->fetch(); 
?>
 <form id="form-devis"style="padding: 50px;"class="col-md-12">
     <div class="col-md-6 offset-md-3 loader">
    </div> 
     <div class="row">
     <div class="article col-md-7">
      <div class="row">
          <div style="background: url('../images/<?=$item['image']?>')center;background-size:contain;background-repeat: no-repeat;"
          class="image">
            </div>
            <div class="desc">
              <h3><?=$item['name']?></h3>
              <div><?=$item['description']?></div>
              <input hidden class="nom-article"name="id"value="<?=$item['id_user']?>">
              <input hidden class="nom-article"name="image"value="<?=$item['image']?>">
            </div>
      </div>
</div>
<div class=" col-md-5">
    <legend>Formulaire de location</legend>
    <div class="col-md-12">
                 <h5>date de debut</h5>
                <div class=" input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
             </div>
                <input type="text" class="champ form-control"name="datedebut"placeholder="Ex 10-03-2019">
</div>
</div>
<div class="col-md-12">
                <h5>date de fin</h5>
                <div class=" input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
             </div>
                <input type="text"class="champ form-control"name="datefin"placeholder="Ex 15-03-2019">
</div>
</div>
<div class="col-md-12">
        <?php
        $prix=intval($item['price']);
        $pourcent=5/100;
        $frais=20000;
        $total=$prix*$pourcent + $frais;
        
        if($item['category']){
            echo'FRAIS DE TRANSPORT ' . $prix*$pourcent . ' FCFA '.'<br>';
            echo'+ 20000 FCFA pour location chauffeur <br>';
            echo'TOTAL DES FRAIS : '. $total.' FCFA';
        }
        ?>
        </div>
        <input hidden type="text"name="total"value="<?=$total?>">
<div class="col-md-12">
     <button class="envoyer col-md-12 btn btn-outline-warning">Louer dès maintenant</button><br>

     <div id="alert"class="col-md-12"></div>
</div>
</div>
</div>
    </div>
     </div>
  </form>

<?php
}
?>
