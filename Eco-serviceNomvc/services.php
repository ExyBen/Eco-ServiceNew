<!DOCTYPE html>





<?php 
session_start();
include('assets/include/connexionbdd.php');
require_once('assets/include/header.php'); 

?>
<!-- Fin du Header -->
<section class="jumbotron  ">
    <div class="container">
        <h1 class="jumbotron-heading DecouvrezNosProduits text-center" >Decouvrez nos services </h1></br>
        <div >
        </div>
    </div>
</section>

<div class="container w-100">
    <div class="row container-services">
        <div class='col-7'>
            </br>
            <h3 style="color:white;">Service Zero Déchets</h3>
            </br>
            <p style="color:white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus animi non facere necessitatibus tempora quos, accusantium nisi numquam officiis doloremque est incidunt voluptate error molestias nihil quasi natus reprehenderit fuga.</p>
            <button class="buttonDevis  center-block">Demande de devis</button>
        </div>

        <div class='col-5 no-padding ' >
            <img src ="http://localhost/Eco-service/vue/img/imgservices.jpg" class=" img-fluid float-right" width='100%'height="100%">
        </div>
    </div>
</div>

</div>




<!-- Footer -->
<?php require_once('assets/include/footer.php');?>
<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

