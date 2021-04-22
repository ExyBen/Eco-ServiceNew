<?php
    include('assets/include/connexionbdd.php');

    $id_article = $_POST['id_article'];
    if(!isset($_POST['exemplaire'])){
        $exemplaire = $_POST['exemplaire'];
        $sql = "INSERT INTO panier (idUser, idArticle, exemplaire) VALUES (\'". $_SESSION['id'] ."', '". $id_article."', '". $exemplaire . "');";
    }else
        $sql = "INSERT INTO panier (idUser, idArticle, exemplaire) VALUES (\'". $_SESSION['id'] ."', '". $id_article."', '1');";

    $panier = $bdd->prepare($sql);
    $check = $panier->execute();
    $redirection = $_GET['link'];
    if($check)
        $msg = "votre article a bien été ajouté";
    else
        $msg = "votre article n'a pas pu être ajouté";
    if($redirection == 'allProducts')
        include("product.php?article=$id_article");
    if($redirection == 'product')
        include('allProducts.php');

    
