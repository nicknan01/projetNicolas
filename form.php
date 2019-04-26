<?php
?>
<form id="add-content" method="post"action="../app/article.php"enctype="multipart/form-data">
      <legend class="btn btn-outline-warning">Ajouter un nouvel article</legend>
      <input class="form-control"type="text"name="name"placeholder="nom de l\'article"><br>
      <select name="category"class="form-control">
        <option value="engins">engins</option>
        <option value="outils">outils</option>
        <option value="services">services</option>
        </select><br>
        <input class="form-control"type="text"name="price"placeholder="prix"><br>
        <textarea name="description"class="form-control">ecrivez une description ici</textarea><br>
        <input class="form-control"type="file"name="image"id="file"><br>
        <div class="progress"id="progress">
        <div class="progressbar"id="progressbar"role="">
        </div>
        </div><br>
        <button class="col-md-6 btn btn-outline-warning">Ajouter</button>
      </form>