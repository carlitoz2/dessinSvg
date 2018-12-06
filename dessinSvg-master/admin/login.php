<?php
session_start();
include('../config/config.php');
include('../lib/bdd.lib.php');

$title = "Login";
$vue = 'login.phtml';
$error =false;
$noCo = false;
var_dump($_SESSION);



try
{   
    if (array_key_exists('email',$_POST)){
        
        $autCredentials=
        [
        'aut_email' => $_POST['email']
        ];   

        $dbh = connexion();

        $req = $dbh->prepare('SELECT * FROM blog_auteurs WHERE aut_email = :aut_email');

        $req->execute(array('aut_email' =>$_POST['email']));

        $verif = $req->fetch(PDO::FETCH_ASSOC);
        
        var_dump($verif);
        if ($verif != false){

            if (password_verify($_POST['password'],$verif['aut_password'])){
                    echo 'connexion reussie!';
                    $_SESSION['connect'] = true;
                    header('Location:addArticle.php');
                    exit();
                }
            else{
                echo 'pasbon...';
            }    
        }
        else{
            $noCo = 'Connexion impossible';
        }
    }

}

catch(PDOException $e)
{

    //Si une exception est envoyée par PDO (exemple : serveur de BDD innaccessible) on arrive ici
    $error =  'Une erreur de connexion a eu lieu :'.$e->getMessage();
}


include('tpl/layout.phtml');