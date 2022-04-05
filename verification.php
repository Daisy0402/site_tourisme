<?php 
session_start();
require_once "connect.php";


if (isset($_POST['email']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    

    if ($username !== "" && $password !== "") {
        $requete = $conn->prepare('SELECT id, nom, prenom, mail, mdp, admin from utilisateur where mail= ?');
        $requete->execute(array($username));
        $data=$requete->fetch();
        $row=$requete->rowCount();
        

        if($row > 0)
        {
            if(filter_var($username, FILTER_VALIDATE_EMAIL))
            {
                if (password_verify($password, $data['mdp']))
                {
                    session_regenerate_id();
                    $_SESSION['email'] = $data['prenom'];
                    $_SESSION['role'] = $data['admin'];
                    $_SESSION['idUser'] = $data['id'];
                    if ($_SESSION['role']==1){
                        header('Location: admin.php');
                    }
                    else{
                        header('Location: index.php');
                    }
                    
                    die();
                }else{ echo "error password";}

            }else{ echo "error email";}

        } else {echo "error email utilisateur";}
        
            
        
        
            
            

    } else{ echo "error";}
} else {echo "error";}
