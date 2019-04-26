<?php
require'../config/database.php';
if($_POST)
{
    $db = Database::connect();
    $statement = $db->prepare('SELECT * FROM article WHERE id_user=?');
    $statement->execute(array($_POST['voir']));
    echo'<table class="table table-bordered table-striped">
        <thead>
            <th>Image article</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Actions</th>
        </thead>';
        foreach($statement as $item)
    {
    ?>
     <tbody>
        <td style="background:url('../images/<?=$item['image']?>')center;background-size:ccontain;background-repeat:no-repeat"></td>
            <td style="height:100px;"><?=$item['name']?></td>
            <td><?=$item['description']?></td>
            <td><?=$item['price']?></td>
            <td></td>
            </tbody>
            <?php

    }
       
   echo'</table>';
   
}