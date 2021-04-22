<?php

function acc(){
	include("./modele/article.php");
	$results = getAllArticles();
	require("./vue/accueil.php");
	
}

function connexion(){
	require_once("./vue/inscription.php");
}

function profil(){
	/*include("./modele/profil.php");
	$commandes = getAllCommandes($_SESSION['user']);*/
	require("./vue/profil.php");

}

function allProducts(){
	include("./modele/article.php");
	$results = getAllArticlesByDate();
	$res = getAllArticles();
	require_once("./vue/allProducts.php");
	
}

function services(){
	require_once("./vue/services.php");
}

function contact(){
	require("./vue/contact.php");
}

?>