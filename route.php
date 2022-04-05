<?php 

require_once "connect.php";

$pages = [
    'accueil' => 'accueil.php',
    'ajouter' => 'adminAjouter.php',
    'supprimer' => 'supprimer.php',
    'modifier' => 'modifier.php',
    '' => 'accueil.php',
    


];

$page = (isset($_GET['page'])) ? $_GET['page'] : null;

if (!isset($page)) {
    header("location: admin.php?page=accueil");
}
// Si la page envoyé n'est pas gérer dans mon tableau de route ($pages) alors je génère une 404 manuelement
else if (!isset($pages[$page])) {
    echo "error";
}