<?php

  function addUser($nom,$prenom,$email,$adresse,$mdp,$siret){
    include('connexion.php');

    if(empty($siret)){
        $sql = "INSERT INTO USER (email, mdp, adresse, prenom, nom, statut) VALUES ('$email', '$mdp', '$adresse', '$prenom', '$nom', '1')";
    }
    else{
        $sql = "INSERT INTO USER (email, mdp, adresse, prenom, nom, statut, siret) VALUES ('$email', '$mdp', '$adresse', '$prenom', '$nom', '1', '$siret')";
    }

    $pdo = $pdo->prepare($sql);
    $pdo->execute();
  }

  function login_user($email,$mdp){
    include('connexion.php');
      $sql = "SELECT email, mdp from USER WHERE email = '$email' AND mdp = '$mdp'";
      $pdo = $pdo->prepare($sql);
      
      $pdo->execute();

      $result = $pdo->fetch();
      return $result;
  }