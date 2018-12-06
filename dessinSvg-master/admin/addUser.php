<?php
include('../config/config.php');
include('../lib/bdd.lib.php');

$title = "Inscription";
$vue = 'addUser.phtml';
$error = []; // l'erreur n'existe pas par défaut
//var_dump($_POST);
$tabNewUser= 
[
'aut_nom' => '',
'aut_prenom' => '',
'aut_email' => '',
'aut_password' => '',
'aut_biographie' => '',
'aut_username' => ''
];
try
{   
    if (array_key_exists('name',$_POST))
    {
    
        if(isset($_POST['name']) && $_POST['name'] != ''){
            $tabNewUser['aut_nom'] = $_POST['name'];
        } 
        else{
            array_push($error,'Veuillez remplir le champ nom');
        }
        
        if(isset($_POST['prenom']) && $_POST['prenom'] != ''){
            $tabNewUser['aut_prenom'] = $_POST['prenom'];
        } 
         else{
             array_push($error,'Veuillez remplir le champ prenom');
        }
        
        if(isset($_POST['email']) && $_POST['email'] != ''){
           if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $tabNewUser['aut_email'] = $_POST['email'];
           }
           else{
            array_push($error,'Veuillez renseigner une adresse email valide');
           }     
        } 
        else{
            array_push($error,'Veuillez remplir le champ email');
        }
        
        
        if(isset($_POST['password']) && $_POST['password'] != ''){
           
            if ($_POST['password'] === $_POST['conf_password']){
                $tabNewUser['aut_password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
            }
            else{
                array_push($error,'Veuillez vérifier la concordance des mots de passe');    
            }
        } 
        else{
            array_push($error,'Veuillez remplir le champ password');
        }

        if(isset($_POST['pseudo']) && $_POST['pseudo'] != ''){
            $tabNewUser['aut_username'] = $_POST['pseudo'];
        } 
        else{
            array_push($error,'Veuillez remplir le champ pseudo');
        }

        if (empty($error)){

            $dbh = connexion();
            /**2 : Prépare ma requête SQL */
            $sth = $dbh->prepare('INSERT INTO blog_auteurs (aut_id , aut_nom, aut_prenom,aut_email, aut_password, aut_biographie, aut_avatar, aut_username) VALUES (NULL, :aut_nom, :aut_prenom, :aut_email, :aut_password, :aut_biographie,NULL,:aut_username);');
            /** 3 : executer la requête */
            $sth->execute($tabNewUser);
            /** 4 : recupérer les résultats 
            * On utilise FETCH car un seul résultat attendu
            */
                                                   
        }    
    }      
}

catch(PDOException $e)
{

    //Si une exception est envoyée par PDO (exemple : serveur de BDD innaccessible) on arrive ici
    $error =  'Une erreur de connexion a eu lieu :'.$e->getMessage();
}

include('tpl/layout.phtml');

//header('Location: add_user.php');