<?php 
require'../config/database.php';
require'partiels/header.php';
?>
<body>
<div class="cover">
<div class="overlay">
</div>
</div>
<div id="content"class="container">
    <div class="row titre">
        <span class="col-md-5 col-sm-5  plus">
        </span>
        <span class="text-titre">Articles</span>
        <span class="col-md-5 col-sm-5  plus">
        </span> 
    </div>
<div class="parent row">
<div style="margin-top:600px;"class="col-md-5 offset-md-2 loader">
</div> 
<?php
$categorie="";
$count=0;
$db = Database::connect();
$statement = $db->query('SELECT article.id ,nomsociete,price,image,name,category,id_user  FROM  article, users WHERE users.id=article.id_user LIMIT 0,4 ');
foreach($statement as $item)
{
  $categorie=$item['category'];
  $count++;
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
if($count===4)
{
?>
<form id="plus"class="row col-md-12">
    <span class="col-md-5 col-sm-5 plus"></span>
    <input hidden name="categorie"value="<?=$categorie?>">
    <button type="submit"class="bouttonplus"href="#"><span>+</span></button>
    <i class="text">plus d'articles</i>
    <span class="col-md-4 col-sm-5 plus"></span>
</form>
<?php
}
?>
<?php
}
?>
</div>
</div>
<?php require'partiels/footer.php';?>
 <script src="../dist/js/jquery-3.3.1.js"></script>
  <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.js"></script>
<script src="../dist/js/js.js"></script>
   </body>
</html>
