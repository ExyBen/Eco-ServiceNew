
<?php 
session_start();
include('assets/include/connexionbdd.php');
require_once('assets/include/header.php'); 

?>
<!-- Fin du Header -->


<section class=" testici  container w-100 divBoxLog col-lg-4 col-10  ">
    <div class="row chooseLog">
            <a class="col-5-5 text-center justify-content-around itemConnec" id="selectConnexion" onclick="showConnexion()">CONNEXION </a>
            <a class=" col-custom text-center justify-content-around" ><span class="vertical"></span></a>

            <a class=" col-5-5 text-center justify-content-around itemConnec" id="selectInscription"onclick="showInscription()">INSCRIPTION</a>
        
    </div>
    <div class="rectangle">
        <div class="row text-center logSignForm">
            <div id="connexionForm" style = "display:block;"  class="container w-100 col-12">
                <form action="connexion_post.php" method="post">
                <?php if(isset($error)) { ?>     <!-- On a cree l'erreur dans result.php ou si pseudo _ error est true (existe)(soit il est vide car il existe si et seulement si il est vide) , on l'affiche-->
                        <p class="form_error"> <?php echo $error ?> </p> 
                         <?php } ?>
                    <p>Email  <br><input type="text" name="email" required/></p>
                    <p>Mot de passe  <br><input type="password" name="pass" required/></p>
                    <p><input type="submit" value="Se connecter"></p>
                </form>
            </div>
            <div id="inscriptionForm" style = "display:none;" class="container w-100 col-12">
                <form action="inscription_post.php" method="post">
                    <p>Nom  <br><input type="text" name="nom" required/></p>
                    <p>Prénom <br><input type="text" name="prenom" required/></p>
                    <p>Adresse <br><input type="text" name="adresse" required/></p>
                    <p>Email <br><input type="text" name="email" required/></p>
                    <?php if(isset($email_error)) { ?>     <!-- On a cree l'erreur dans result.php ou si pseudo _ error est true (existe)(soit il est vide car il existe si et seulement si il est vide) , on l'affiche-->
                        <p class="form_error"> <?php echo $email_error ?> </p> 
                         <?php } ?>
                    <p>Mot de passe  <br><input  name="pass" type="password" required/></p>
                    <p>Confirmez votre mot de passe  <br><input type="password" name="pass2" required/></p>
                    <?php if(isset($password_error)) { ?>     <!-- On a cree l'erreur dans result.php ou si pseudo _ error est true (existe)(soit il est vide car il existe si et seulement si il est vide) , on l'affiche-->
                        <p class="form_error"> <?php echo $password_error ?> </p> 
                         <?php } ?>
                    <p>N° Siret <br> <input type="text" name="siret" /></p>
                    <p><input type="submit" value="S'inscrire"></p>
                </form>
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
<script>

function showConnexion() {
    var selectConnexion = document.getElementById('selectConnexion');
    var connexionForm = document.getElementById("connexionForm");
    var inscriptionForm = document.getElementById("inscriptionForm");

    inscriptionForm.style.display = "none";
    connexionForm.style.display = "block";
    selectConnexion.style.fontWeight="bold";
    selectInscription.style.fontWeight="normal";
}
function showInscription() {
    var selectInscription = document.getElementById('selectInscription');

    var connexionForm = document.getElementById("connexionForm");
    var inscriptionForm = document.getElementById("inscriptionForm");

    selectInscription.style.fontWeight="bold"
    selectConnexion.style.fontWeight="normal";

    inscriptionForm.style.display = "block";
    connexionForm.style.display = "none";
  
}
</script>



