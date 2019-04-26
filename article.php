<?php
session_start();
require'../config/database.php';
require'action.php';
 
    $nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = "";
    $ok;
    if($_POST)
    {
        $ok=true;
        $name               = verifier($_POST['name']);
        $description        = verifier($_POST['description']);
        $price              = verifier($_POST['price']);
        $category           = verifier($_POST['category']); 
        if(!empty($_FILES)){
            $file_name = $_FILES['image']['name'];
            $file_type = $_FILES['image']['type'];
    
            $file_extension =strrchr($file_name, "."); 
    
            $file_tmp_name = $_FILES['image']['tmp_name'];
            $file_dest = '../images/'.$file_name;
            $extensions_autorisees = array('.jpg','.jpeg','.gif','.svg');
            if(in_array($file_extension ,$extensions_autorisees)){
               if(move_uploaded_file($file_tmp_name ,$file_dest)){
                   echo'fichier envoyé avec succès';
                   $ok=true;
               }
               else{
                   echo'erreur lors de l\'envoi';
                   $ok=false;
               } 
            }
            else{
                echo'veuillez choisir une image compatible';
                $ok=false;
            }
            echo 'nom :'.$file_name .'<br>'; 
            echo 'type :' .$file_type .'<br>';
            echo 'extension :' .$file_extension .'<br>';
        }
        if($ok) 
        {
            $db = Database::connect();
            $statement = $db->prepare("INSERT INTO article (name,description,price,category,image,id_user) values(?, ?, ?, ?, ?, ?)");
            $statement->execute(array($name,$description,$price,$category,$file_name,$_SESSION['id']));
            Database::disconnect();
            header('location:../vues/index.php');
        }
        
        
    }
