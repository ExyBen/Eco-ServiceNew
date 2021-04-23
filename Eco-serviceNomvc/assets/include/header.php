
<?php if (isset($_SESSION['email']) AND isset($_SESSION['id']))  // SI IL YA UNE SESSION ID SESSION PSEUDO GRACE AU SESSION SET DANS CONNEXION.PHP ON AFFICHE SA
{?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Eco-Service</title>
        <!-- CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    </head>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="accueil.php" ><img src="http://localhost/Eco-service/vue/img/Logo.png" width="100" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-navicon" style="color:#668B22; font-size:28px;"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                    
                
                    <li class="nav-item col-4">
                        <a class="nav-link" href="allProducts.php">Produits</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="nav-link"  href="deconnexion.php">Deconnexion</a>
                    </li>
                    

                </ul>

                <div class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <a href="#" class ="iconnav" ><img title="search" alt="search" src="assets/images/icones/search.png" width="30px"></a> 
                        <a href="#" class ="iconnav"><img title="panier" alt="panier" src="assets/images/icones/panier.png" width="30px"></a> 
                        <a href="profil.php" class ="iconnav"><img title="profil" alt="profil" src="assets/images/icones/profil.png" width="30px"></a> 
                    </div>
                    
                </div>
                
            </div>
        </div>
    </nav>
    			
        <a class="lead mb-4 ">Bonjour <?php echo $_SESSION['email']; echo $_SESSION['id'];?></a></div>
    <?php }else{ ?>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Eco-Service</title>
        <!-- CSS -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    </head>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="accueil.php" ><img src="http://localhost/Eco-service/vue/img/Logo.png" width="100" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-navicon" style="color:#668B22; font-size:28px;"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                    
                
                    <li class="nav-item col-4">
                        <a class="nav-link" href="allProducts.php">Produits</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item col-4">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="nav-link"  href="deconnexion.php">Deconnexion</a>
                    </li>
                    

                </ul>

                <div class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <a href="#" class ="iconnav" ><img title="search" alt="search" src="assets/images/icones/search.png" width="30px"></a> 
                        <a href="#" class ="iconnav"><img title="panier" alt="panier" src="assets/images/icones/panier.png" width="30px"></a> 
                        <a href="log.php" class ="iconnav"><img title="profil" alt="profil" src="assets/images/icones/profil.png" width="30px"></a> 
                    </div>
                    
                </div>
                
            </div>
        </div>
    </nav>
                
            <a>No sesssion</a>

        <?php }?>