
<?php 
 if (!isset($_SESSION))
 {
     session_start();
 }
include('assets/include/connexionbdd.php');

require_once('assets/include/header.php'); 
if(!isset($_POST['titre_article'])){
    $_POST['titre_article'] = '';
}
    if(!isset($_POST['description'])){
        $_POST['description'] = '';
}

if(!isset($_POST['prix'])){
    $_POST['prix'] = '';
}
if(!isset($_POST['categoriearticle'])){
    $_POST['categoriearticle'] = '';
}

?>
<section class="jumbotron  ">
    <div class="container">
        <h1 class="jumbotron-heading profil text-center" > Ajoutez un produit ! </h1></br>
    </div>
</section>

<section class=" testici  container w-100 divBoxLog2 col-lg-4 col-10  ">
    
    <div class="rectangle">
        <div class="row text-center logSignForm">
            <div id="inscriptionForm" style = "display:black;" class="container w-100 col-12">
            <form action="addproduct_post.php" method="post" enctype="multipart/form-data" id="register_form">
             <div class="form-group">
                 <label for="titre">Titre de l'article  <a style="color:red;">*</a> :</label><input type="text" name="titre_article"  class="form-controll" value="<?php echo htmlspecialchars($_POST['titre_article'])?>"/><br/> <!-- value on protege contre l'injection de html grace a htmlspecialchars -->


                <label for="description">Description de l'article <a style="color:red;">*</a> :</label>   <input type="text" name="description" class="form-controll"  value="<?php echo htmlspecialchars($_POST['description'])?>"/><br /> 
                <label for="prix">Prix de l'article <a style="color:red;">*</a> :</label>   <input type="text" name="prix" class="form-controll"  value="<?php echo htmlspecialchars($_POST['prix'])?>"/><br /> 
                <label for="categoriearticle">Catégorie  <a style="color:red;">*</a> :</label><input type="text" name="categoriearticle"   class="form-controll" value="<?php echo htmlspecialchars($_POST['categoriearticle'])?>"/><br /> 
                <label>Image : </label>
                <input type="file" name="img" /><br/><br/>
                <p><a style="color:red;">*</a> Champs obligatoires </p>
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

            </div>              
        </div>
    </div>
</section>


<?php require_once('assets/include/footer.php');?>
