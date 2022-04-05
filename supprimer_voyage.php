<?php 
session_start();
require_once "connect.php";

$pays = $_POST['unPays'];
//var_dump($pays);
//die;
if(!isset($_POST["unPays"]) || empty($_POST["unPays"]) || ($_POST["unPays"]=="Choisir le pays")){
    $_SESSION['FLASH']["message"] = "Vous n'avez selectionné de pays";
    $_SESSION['FLASH']["type"] = "danger";
    header("location: admin.php?page=supprimer");
    die;
}

try
{
    $sql = "DELETE from voyage where pays= '$pays' ";
    var_dump($sql);
    $sth = $conn->prepare($sql);
    $sth->execute();
    $sth->debugDumpParams();

    $_SESSION['FLASH']["message"] = "Vous avez supprimer un voyage";
    $_SESSION['FLASH']["type"] = "success";
    header("location: admin.php?page=supprimer");

}

catch (Exeption $e)
{
    
    echo $e->getMessage();
    die;
    
}