<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>manuX engin traveaux main-oeuvre</title>
    <!-- Bootstrap -->
    <link href="../dist/css/all.css"rel="stylesheet"> <!--load all styles -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<nav id="navbar-default"class="navbar fixed-top navbar-expand-lg navbar-default ">
    <div class="container-fluid">
 <a href="index.php"id="logo"class="navbar-brand"> <span class="logo">M</span>manuX</a>
    <div>
    <ul class="navbar-nav mr-auto">
    </ul>
    <?php
    if(isset($_SESSION['nomutilisateur']))
    {
    ?>
      <div class="col-md-9 dashbord">
      <div class="row">
      <div class="bar col-md-3">
      <button id="add"class="form-control btn btn-outline-warning ajouter">ajouter un article</button>
      <form id="voir">
      <input hidden name="voir" value="<?=$_SESSION['id']?>">
      <button type="submit"class="form-control btn btn-outline-warning ajouter">Voir mes articles</button>
      </form>
      <button id="devis"class="form-control btn btn-outline-warning ajouter">Voir les devis recus</button>
      </div>
      <div class="content-bar col-md-9">
      <span style="cursor:pointer;position:absolute;right:10px;"class="close">x</span>
      
    </div>
      </div>
      </div>
       <form id="logout"class="form-inline my-2 my-lg-0">
       <a class="profil"> <?=$_SESSION['nomutilisateur']?> <i class="fas fa-user"></i> </a>
       <div class="icon-profil">
       <span></span>
       <span></span>
       <span></span>
       </div>
      
       <div class="profilDiv">
     
       <a href="#"class="dash btn btn-default">Tableau de bord</a>
      <input hidden type="text"name="action"value="deconnexion">
       <button type="submit"class="btn btn-default"><i class="fas fa-sign-out-alt"></i>Deconnexion</button>
       </div>
       </form>
      <?php
    }
    else
    {
      echo'<form class="form-inline my-2 my-lg-0">';
      echo '<a href="login.php"class="seConnecter"><i class=" fas fa-user"></i> se connecter</a>';
      echo'</form>';
    }
    ?>  
  </div>
    </div> 
</nav>