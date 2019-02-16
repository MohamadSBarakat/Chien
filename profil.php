<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Profil de l'utilisateur";
// INCLURE LE HEADER
include "header.php";

/* ------------------------------------------------------------------------------------------------------*/
/* ////////////////////////////   APPELER LES FUNCTION POUR RECUPER LES DATA   //////////////////////////*/
/* ------------------------------------------------------------------------------------------------------*/

$id = $_SESSION['id'];

$userProfile = $appli->getUserProfile($id);
$dogs        = $appli->getUserDogs($id);

$id          = $userProfile->getId();
$email       = $userProfile->getEmail();
$lastName    = $userProfile->getLastName();
$firstName   = $userProfile->getFirstName();
$country     = $userProfile->getCountry();
$city        = $userProfile->getCity();

?>
<div class="container">

    <div class="row">         
        <div class="col col-md-6 mx-auto mt-4">   
        <a href="ajouter-un-chien.php" class="btn btn-lg btn-primary btn-block text-uppercase">Ajouter un chien</a>
        </div> 
    </div>

    <div class="row">
        <!-- PROFIL -->
        <div class="col-12 col-md-6 mx-auto">
            <div class="row">
                <form class="form-signin" action="" method="post" enctype="multipart/form-data" >
                    <div class="col">
                        <div class="card card-signin my-5">
                            <div class="card-body">
                                <h5 class="card-title text-center">Mon profil</h5>
                                <?php include "action/profil-form.php";?>
                                <div class="form-label-group">
                                    <label for="inputPrenom">Prénom</label>
                                    <input type="text" id="inputPrenom" class="form-control" name="firstName" value="<?php echo $firstName;?>" placeholder="Prénom" autofocus> 
                                </div>
                                <div class="form-label-group">
                                    <label for="inputNom">Nom</label>
                                    <input type="text" id="inputNom" class="form-control" name="lastName" value="<?php echo $lastName;?>" placeholder="Nom"> 
                                </div> 
                                <div class="form-label-group">
                                    <label for="inputPays">Pays</label>
                                    <input type="text" id="inputPays" class="form-control" name="country" value="<?php echo $country;?>" placeholder="Pays">
                                </div>
                                <div class="form-label-group">
                                    <label for="inputVille">Ville</label>
                                    <input type="text" id="inputVille" class="form-control" name="city" value="<?php echo $city;?>" placeholder="Ville">
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" name="update" type="submit">Enregistrer</button>
                            </div>
                        </div>   
                    </div>
                </form>   
            </div>
        </div>
        <!-- CHIENS -->
        <?php
            if (sizeof($dogs) > 0){ ?>
                <div class="col-12 col-md-6 mt-5">
                    <div class="row">
                        <?php foreach ($dogs as $dog) { ?>
                            <div class="card col-12 col-md-6" style="width: 17rem; margin:auto; padding:0;">
                                <a href="profil-du-chien.php?id=<?php echo $dog->getId()?>">
                                    <img class="card-img-top" src="images/dog/<?php echo $dog->getPicture()?>" alt="Photo de profil de <?php echo $dog->getNickname()?>">
                                    <div class="card-img-overlay">
                                        <h4 class="card-title dogyy"><?php echo $dog->getNickname()?></h4>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }
        ?>
    </div>
  
<?php 
include "footer.php"
?>
