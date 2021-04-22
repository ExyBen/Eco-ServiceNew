<?php


     function inscription(){
         include('./modele/user.php');
        $mdp = $_POST['mdp'];
        $email = $_POST['email'];
        $siret = $_POST['siret'];
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $prenom = $_POST['prenom'];
        $mdp = sha1($mdp);
        addUser($nom, $prenom, $email, $adresse, $mdp, $siret);

        include('./vue/inscription.php');


    }

    function login(){
        include('./modele/user.php');
        $mdp = $_POST['mdp'];
        $email = $_POST['email'];
        $mdp = sha1($mdp);
       
        $user = login_user($email,$mdp); 
        if(!empty($user)){
            if((!isset($_SESSION['user']))){
                session_start();
            }
            
            $_SESSION['user'] = $user;
        }
        
        include("./modele/article.php");
        $results = getAllArticles();
        require("./vue/accueil.php");

    }
?>