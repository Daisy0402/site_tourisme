<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
try{
     $conn = new PDO("mysql:host=$servername;dbname=site_tourisme", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOExeption $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>   

  
