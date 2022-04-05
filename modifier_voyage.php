<?php 
session_start();
require_once "connect.php";

$lePays=$_POST['lePays'];
//var_dump($lePays);
$prix=$_POST['prix'];
$description=$_POST['description'];

if(!isset($_POST["lePays"]) || empty($_POST["lePays"]) || ($_POST["lePays"]=="Choisir le pays")){
    $_SESSION['FLASH']["message"] = "Vous n'avez pas selectionné de pays";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=modifier");
    die;

    //echo "Le champs pays est obligatoire."; die;
    
}
if(!isset($_POST["prix"]) || empty($_POST["prix"])){
    $_SESSION['FLASH']["message"] = "Vous n'avez pas indiquer de prix";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=modifier");
    die;
}
if(!isset($_POST["description"]) || empty($_POST["description"])){
    $_SESSION['FLASH']["message"] = "Il faut un minimum de description !";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=modifier");
    die;
}

try
{
    $sql = "update voyage set prix=" . $prix . ", description='" . $description . "' where pays='" . $lePays ."'";
    var_dump($sql);
    $sth = $conn->prepare($sql);
    $sth->execute();
    $sth->debugDumpParams();
    //echo "informations modifier";
    $_SESSION['FLASH']["message"] = "Vos modifications ont été enregistré";
    $_SESSION['FLASH']["type"] = "success";
    header("location: admin.php?page=modifier");

}
catch (Exeption $e)
{
    
    echo $e->getMessage();
    die;
    
}