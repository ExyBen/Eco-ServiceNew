<?php

function getAllCommandes($id){
    include('connexion.php');
    $sql= "SELECT * FROM commande WHERE idUser = :id";
   
    try{
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question -> bindValue(":id",$id);
        $b_Question = $cde_Question ->execute();
      
        $tabCommandes = array();
        if($b_Question ){
            while($tab = $cde_Question->fetch()){
                $tabCommandes [] = $tab;

            }
            
        }
    }
    catch (PDOException $e) {
        echo utf8_encode("Echec du select : " . $e->getMessage() . "\n");
        die();
    }
    return $tabCommandes;

}

?>