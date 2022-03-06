<?php require_once "connect.php";

if(!isset($_POST["nom"]) || empty($_POST["nom"])){
    echo "Le champs produit est obligatoire."; die;
}
if(!isset($_POST["prenom"])){
    echo "Le champs prenom est obligatoire."; die;
}
if(!isset($_POST["email"]) || empty($_POST["email"])){
    echo "Le champs email est obligatoire."; die;
}
if(!isset($_POST["password"])){
    echo "Le champs mot de passe est obligatoire."; die;
}

$name_user = $_POST["nom"];
$firstname_user = $_POST["prenom"];
$mail_user = $_POST["email"];
$password_user = $_POST["password"];

try{
    $sql = "INSERT INTO utilisateur(nom,prenom,mail,mdp) VALUES( '$name_user','$firstname_user','$mail_user','$password_user')";
    //var_dump($sql); die;
    $sth =$conn->prepare($sql);
    $sth->execute();
    $sth->debugDumpParams();

    echo "votre compte a été crée";
}
catch (Exeption $e){
    echo $e->getMessage();
    die;

}
?>