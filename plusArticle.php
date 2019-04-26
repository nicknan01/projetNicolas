<?php
require'../config/database.php';
if($_POST)
{

$db = Database::connect();
 $statement = $db->prepare('SELECT article.id ,nomsociete,price,image,name,category,id_user  FROM  article INNER JOIN users ON users.id=article.id_user WHERE category=?');
 $statement->execute(array($_POST['categorie']));
echo'<div style="margin-top:600px;"class="col-md-5 offset-md-2 loader">';
echo'</div>';
echo'<div class="parent row">';
echo'<div style="margin:15px;text-align:center;"class="col-md-12">';
    echo'<h4>';
    echo 'Tous les  '. $_POST['categorie'];
    echo'</h4>';
echo'</div>';
foreach($statement as $item)
{
?>
  <form id="article"class="article col-md-3">
    <div class="col-md-12">
      <div class="row">
          <div style="background: url('../images/<?=$item['image']?>')center;background-size:contain;background-repeat: no-repeat;"
          class="image">
          <div class="image-overlay">
            <i class="fas fa-arrow-right"></i>
          </div>
            </div>
            <div class="desc">
              <input class="nom-article" name="name"value="<?=$item['name']?>">
              <input hidden class="nom-article"name="id"value="<?=$item['id']?>">
             <span class="prix-article">A partir<?= $item['price']?> FCFA/J</span>
              <h6 class="nom-societe"><i>Mise en ligne par</i> <?=$item['nomsociete']?></h6>
            </div>
      </div>
    </div>
  </form>
  <?php
}
echo'<div>';
}