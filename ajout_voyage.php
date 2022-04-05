<?php 
session_start();
require_once "connect.php";

if(!isset($_POST["pays"]) || empty($_POST["pays"])){
    $_SESSION['FLASH']["message"] = "Vous n'avez pas entrer de pays";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=ajouter");
    die;

    //echo "Le champs pays est obligatoire."; die;
    
}
if(!isset($_POST["prix"]) || empty($_POST["prix"])){
    $_SESSION['FLASH']["message"] = "Vous n'avez pas indiquer de prix";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=ajouter");
    die;
}
if(!isset($_POST["description"]) || empty($_POST["description"])){
    $_SESSION['FLASH']["message"] = "Il faut un minimum de description !";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=ajouter");
    die;
}

$pays = $_POST["pays"];
$prix = $_POST["prix"];
$description = $_POST["description"];


try{
    $sql = "INSERT INTO voyage(pays,description,prix) VALUES( '$pays','$description','$prix')";
    //var_dump($sql); die;
    $sth =$conn->prepare($sql);
    $sth->execute();
    $sth->debugDumpParams();

    //echo "Vos informations on été ajouter";
    $_SESSION['FLASH']["message"] = "Vos information ont été ajouter";
    $_SESSION['FLASH']["type"] = "success";
    header("location: admin.php?page=ajouter");
}
catch (Exeption $e){
    echo $e->getMessage();
    die;

}



?>