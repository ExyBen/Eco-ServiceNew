
<!-- Header -->
<?php 
session_start();
include('assets/include/connexionbdd.php');
require_once('assets/include/header.php'); 

?>
<!-- Fin du Header -->


<div class="taille">
    <div class="row">
        <div class="col-12 col-md-12 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/Recyclage.png" alt="1st slide">
                   </div>
            </div>
        </div>
        
    </div>
</div>
<section class="jumbotron  ">
    <div class="container">
        <h1 class="jumbotron-heading DecouvrezNosProduits text-center" >Demarche Zero-Déchets </h1></br>
        <div class="row text-center">
            <div class="col-5-5 card item-card">
                </br>

                <h5>Qui sommes nous ?</h5>
                </br></br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci inventore quisquam, harum qui vero nostrum dolores, voluptates ipsam laborum soluta incidunt. Laudantium magnam culpa officiis, exercitationem unde iste praesentium provident.</p>
            </div>
            <div class="col-1">
            </div>

            <div class="col-5-5 card item-card2">
                </br>
                <h5>Comment ça marche ?</h5>
                </br></br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci inventore quisquam, harum qui vero nostrum dolores, voluptates ipsam laborum soluta incidunt. Laudantium magnam culpa officiis, exercitationem unde iste praesentium provident.</p>

            </div>    
        </div>
    </div>
</section>


<div class="container mt-3">
<h1 class="jumbotron-heading DecouvrezNosProduits text-center" >Decouvrez nos produits ! </h1></br>

    <div class="row">
    
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-color2 text-white text-uppercase">
                    <i class="fa fa-star"></i> Nos derniers produits 
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php

                    $sql = "SELECT * FROM article  ORDER BY date_ajout DESC";
                    $bdd = $bdd->prepare($sql);
                  
                    $bdd->execute();
              
                    $results = $bdd->fetchAll();
                    
                    foreach($results as $result): ?>
                        <div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" src ="assets/images/articleImg/<?php echo $result['img'] ?>.jpg" class="img-fluid rounded " alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="product.html" title="View Product"><?php echo $result['titre_article'] ; ?></a></h4>
                                    <p class="card-text"><?php echo $result['description'] ; ?></p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-danger btn-block"><?php echo $result['prix'] ; ?> €</p>
                                        </div>
                                        <div class="col">
                                            <a href="cart.html" class="btn btn-success btn-block">Ajouter au panier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php endforeach;?> 
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="jumbotron  ">
    <div class="container">
        <h1 class="jumbotron-heading DecouvrezNosProduits text-center" >Decouvrez nos services</h1></br>
        <div class="row ">
            <div class="col-5">
            <img src ="assets/images/imgservices.jpg" class=" img-fluid float-left" width='100%'height="100%">

            </div>
            <div class="col-7">
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, soluta sapiente distinctio quaerat, est accusamus eum explicabo, asperiores repellendus numquam ab error quas saepe dolorum impedit quo delectus quibusdam alias.</p>
            <button class="btn btn-success">Voir nos services</button>
            </div>
            
        </div>
    </div>
</section>



<!-- Footer -->
<?php require_once('assets/include/footer.php');?>
<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
