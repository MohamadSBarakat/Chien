<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Bienvenue sur Instadog";
// INCLURE LE HEADER
include "header.php";
// INITIALISER LA VARIABLE POUR LA RECHERCHE
$keywords = "";
// SI LE PARAMÈTRE PASSÉ PAR L'URL A ÉTÉ RÉCUPÉRÉ  
if (isset($_GET["keywords"])){
    $keywords = $_GET["keywords"];
}
// APPEL DE LA FONCTION DE RECHERCHE DE L'OBJET CONNEXION
$listDogs = $appli->getDogsByKeywords($keywords);
if (isset($_GET["race"])){
    $race = $_GET["race"];
    $listDogs = $appli->getDogsByRace($race);
}
?>
<!-- CONTAINER DU BODY -->
<div class="container bg-white text-dark">
    <div class="row">
        <div class="col">
            <h1 class="display-2 text-center">InstaDog</h1>
            <h2 class="text-center">Découvrez la magie des moments de chien de tous les jours.</h2>
        </div>
    </div>

    <div class="row">
        <?php 
        foreach ($listDogs as $dog) {
            // IMAGE DU CHIEN ET SON NICKNAME
            echo '<div class="card col-lg-3 col-md-4" style="width: 17rem; margin:auto; padding:0;">';
                echo "<a href='profil-du-chien.php?id=" . $dog->getId() . "'>";
                    echo '<img class="card-img-top" src="images/dog/'.$dog->getPicture().'" alt="Photo de profil de ' . $dog->getNickname() . '">';
                    echo '<div class="card-img-overlay">';
                        echo '<h4 class="card-title dogyy">' . $dog->getNickname() . '</h4>';
                    echo '</div>';
                echo'</a>';
            echo'</div>';
        }
        ?>
    </div>
</div>
<?php 
// INCLURE FOOTER
include "footer.php"
?>