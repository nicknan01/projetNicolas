<?php require'partiels/header.php';?>
<body class="bodyCompte">

<div class="cover coverCompte">
<div class="overlay">
</div>
</div>
<div class="col-md-7 offset-md-4">
        <form id="connexion">
        <div class="col-md-2 offset-md-2 loader">
                                </div>
                <div class="col-md-6 input-group mb-2 mr-sm-2">
                               <legend>Vous etes deja inscrit ?</legend>     
                      </div>
                      <div class="col-md-6 input-group mb-2 mr-sm-2">
                   <h6 class="erreurConnection col-md-12 alert alert-danger"></h6>         
                </div>
                <div class="col-md-6 input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" class="champlog col-md-12 form-control" id="inlineFormInputGroupUsername2" name="login"placeholder="Email ou login">
                 
                </div>
                <div class="col-md-12">
                <span class="erreur erreurLogin"></span>
                </div>
                <div class="col-md-6 input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-lock"></i></div>
                        </div>
                        <input type="password" name="pass"class="champlog form-control"placeholder="Mot de passe">
                </div>
                <div class="col-md-12">
                <span class="erreur erreurPassLog"></span>
                </div>
                <div class="col-md-6 input-group mb-2 mr-sm-2">
                     
                      <p> <a href="#">Mot de passe oublié </a><br> pas de compte <a href="inscription.php"> S'inscrire ici</a></p>
                      
                </div>
                <div class="col-md-6 input-group mb-2 mr-sm-2">
                        <input name="connexion"type="submit" class=" btn btn-outline-dark mb"value="connexion">
                </div>
        </form>
</div>
<?php require'partiels/footer.php';?>
 <script src="../dist/js/jquery-3.3.1.js"></script>
  <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.js"></script>
<script src="../dist/js/js.js"></script>
   </body>
</html>
