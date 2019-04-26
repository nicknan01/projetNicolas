<?php
session_start();
if($_POST){
    if($_POST['action']==="deconnexion"){
        session_destroy();
    }
}