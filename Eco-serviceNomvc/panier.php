<?php 
if (!isset($_SESSION))
{
    session_start();
}
include('assets/include/connexionbdd.php');
require_once('assets/include/header.php'); 




$sql = "SELECT * FROM panier LEFT JOIN article ON panier.idArticle = article.id  WHERE panier.idUser = :iduser";

$panier = $bdd->prepare($sql);
$panier->bindParam(':iduser', $_SESSION['id']);
$panier->execute();
$articles = $panier->fetchall();
$total = 0;
?>

<h3 class="text-center">Panier</h3>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="col-6" >
            <?php foreach($articles as $article): $total +=   $article['exemplaire'] * $article['prix'] ;?>
                <div class="border mb-5">
                    <table>
                        <tr>
                            <td>
                                <?php echo $article['titre_article'] ?>
                            </td>
                            <td>
                                <?php echo $article['prix'] ."€" ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <img width="50px" src="assets/images/articleImg/<?php echo $article['img']?>">
                            </td>
                            <td>
                                <?php echo "x". $article['exemplaire'] ?>
                            </td>
                        </tr>
                    </table>
                    <?php echo "total : ". $article['exemplaire'] * $article['prix'] . "€"; ?>
                </div>

            <?php endforeach ?>
            </div>
            
        </div>
       <div class="col-6">
            <?php echo "Total de la commande:" . $total ?>


            <a href="https://paypal.me/nathan93600" > <img src="" ></a>

        </div> 
    </div>

</div>