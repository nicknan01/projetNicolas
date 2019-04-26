<?php
session_start();
$d=[];
require'../config/database.php';
if($_POST){
    if(!empty($_SESSION['nomutilisateur'])){

        $d['success']='Votre devis a bien été enregistré !';
        $db = Database::connect(); 
        $statement = $db->prepare('INSERT INTO devis(name,localisation,contact,date_debut,date_fin,total,user,image)VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
        $statement->execute(array($_SESSION['nom'],$_SESSION['localisation'],$_SESSION['contact'],$_POST['datedebut'],$_POST['datefin'],$_POST['total'],$_POST['id'],$_POST['image']));
    }
    else{
        $d['error']="ok";
    }
}
echo json_encode($d);