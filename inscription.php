<?php require'partiels/header.php';?>
  <body class="bodyCompte">
<div class="cover coverCompte">
<div class="overlay">
</div>
</div>
<div class="col-md-8 offset-md-2">
        <form id="formInscription">
               <div class="row form">
                               <div class="col-md-6 offset-md-3 loader">
                                </div> 
                            <div class="col-md-12 input-group mb-2 mr-sm-2">
                                    <legend>Regoignez dès maintenant la communauté manuX</legend>   
                           </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2 mr-sm-2">
                                 <div class="input-group-prepend">
                                   <div class="input-group-text"><i class="fas fa-user"></i></div>
                                 </div>
                                 <input type="text" class="champ form-control"name="nom"placeholder="Nom">
                                 
                               </div>
                               <span class="erreur erreurNom"></span>
                               </div>    
                               <div class="col-md-6">
                                <div class=" input-group mb-2 mr-sm-2">
                               <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                             </div>
                             <input type="text" class="champ form-control"name="prenom"placeholder="prenom">
                             </div>
                             <span class="erreur erreurPrenom"></span>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text"class="champ form-control"name="nomutilisateur"placeholder="Nom utilisateur">
                        </div>
                        <span class="erreur erreurUser"></span>
                        </div>
                        <div class="col-md-6">
                                <div class=" input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                        </div>
                                        <input type="date" class="champ form-control"name="datenaissance">
                                </div>
                                <span class="erreur erreurDate"></span>
                               </div>
                               <div class="col-md-6">
                                    <div class=" input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class="fas fa-building"></i></div>
                                            </div>
                                            <input type="text" class="champ form-control"name="nomsociete"placeholder="Nom de la société">
                                    </div>
                                    <span class="erreur erreurSociete"></span>
                                  </div>
                                  <div class="col-md-6">
                                    <div class=" input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"> <i class="fas fa-map-marker-alt"></i></div>
                                            </div>
                                            <input type="text"class="champ form-control"name="localisation"placeholder="localisation">
                                    </div>
                                    <span class="erreur erreurLocalisation"></span>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class="fas fa-at"></i></div>
                                            </div>
                                            <input type="Email"class="champ form-control"name="email"placeholder="Email">
                                    </div>
                                    <span class="erreur erreurEmail"></span>
                                  </div>
                                  <div class="col-md-6">
                                        <div class=" input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                </div>
                                                <input type="tel" class="champ form-control"name="contact"placeholder="Contact">
                                        </div>
                                        <span class="erreur erreurContact"></span>
                                     </div>
                                  <div class="col-md-6">
                                        <div class=" input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                </div>
                                                <input type="password" class="champ form-control"name="pass"placeholder="Mot de passe">
                                        </div>
                                        <span class="erreur erreurPass"></span>
                                     </div>
                                     <div class="col-md-6">
                                        <div class=" input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                </div>
                                                <input type="password"class="champ form-control"name="passconf"placeholder="Confirmer le mot de passe">
                                        </div>
                                        <span class="erreur erreurPassConf"></span>
                                     </div>         
                      </div>
                <div class="input-group mb-2 mr-sm-2">
                  <input hidden type="text"value="inscription"name="inscription">
                        <button type="submit" class="btn btn-outline-dark mb-2">Inscription <i class="fas fa-sign-in-alt"></i></button>
                </div>
                <div class="alertInscription alert alert-primary col-md-12">  
               <h5> Felicitation vous avez été bien enregisré !</h5>       
              </div>
        </form>
        <div id="formAbonnement">
            <div class="col-md-12">
            <div class="row">
            <legend class="col-md-12">Choisissez un Abonnement pour compléter votre inscription</legend>
              <div class="gratuit col-md-6">
              <form class="element col-md-12">
                  <input hidden id="gratuit"type="text"name="abonnement"value="free">
                  <div class="row abover">
                    <div class="offset-3 abtext">
                        <h1> manuX FREE</h1>
                        <h5>0 FCFA/mois</h5>
                    </div>
                  </div>
                </form>
              </div>
              <div class="pro col-md-6">
              <form class="element col-md-12">
                  <input hidden id="pro"type="text"name="abonnement"value="pro">
                  <div class="row abover">
                      <div class="offset-md-3 abtext">
                          <h1> manuX PRO</h1>
                          <h5>1000 FCFA/mois</h5>
                      </div>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
</div>
<?php require'partiels/footer.php';?>
 <script src="../dist/js/jquery-3.3.1.js"></script>
  <script src="../dist/js/popper.min.js"></script>
    <script src="../dist/js/bootstrap.js"></script>
<script src="../dist/js/js.js"></script>
   </body>
</html> 
