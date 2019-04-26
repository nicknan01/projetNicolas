<?php
session_start();
require'../config/database.php';
if($_POST)
{
    $db = Database::connect();
    $statement = $db->prepare('SELECT * FROM devis WHERE user=?');
    $statement->execute(array($_SESSION['id']));
    echo'<table class="table table-bordered table-condensed table-striped">
        <thead>
            <th>Image article</th>
            <th>Nom client</th>
            <th>Localisation</th>
            <th>Contact</th>
            <th>Total devis</th>
            <th>Du</th>
            <th>Au</th>
        </thead>';
        foreach($statement as $item)
    {
    ?>
     <tbody>
        <td style="background:url('../images/<?=$item['image']?>')center;background-size:ccontain;background-repeat:no-repeat"></td>
            <td><?=$item['image']?></td>
            <td><?=$item['name']?></td>
            <td><?=$item['localisation']?></td>
            <td><?=$item['contact']?></td>
            <td><?=$item['total']?></td>
            <td><?=$item['date_debut']?></td>
            <td><?=$item['date_fin']?></td>
            </tbody>
            <?php

    }
       
   echo'</table>';
   
}