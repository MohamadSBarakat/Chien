<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Articles des chiens";
// INCLURE LE HEADER
include "header.php";
// RECUPERER L'ID PASSÉ EN PARAMETRE
// $id = $_GET['id'];
// APPEL DES FONCTIONS DE MON OBJET CONNEXION
// $dogProfile = $appli->getDogProfile($id);
// $dogId = $dogProfile->getId();
// $owner = $appli->getUserProfile($dogProfile->getUserId());
$listeArticles = $appli->getArticles();
 
?>
<style>
.container2 {
  position: relative;
  text-align: left;
  color: white;
}

.bottom-left2 {
  position: absolute;
  top: 8px;
  left: 5%;
}

.myleft{
    padding-left:0px;
	font-size: 30px;
	list-style-type: none;
}

</style>

<div class="container-liste-articles">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h1 class="display-2 text-center">Articles</h1>
            <h2 class="text-center">Tous les articles concernant les chiens</h2>
        </div>
    </div>
		<?php 
		foreach ($listeArticles as $article){
		echo'<div class="post show post-photopost" style="background-image: url(images/dog/' . $article->getPicture() . '); background-color: #98A5B0; background-position: 50% 0%;" id="post-ng2VjB" data-id="516849" data-type="post" data-created="1521933880">';
			
			echo'<div class="post-bgscreen">';
				echo'<div class="post-container">';
					echo'<div class="post-header">';
						echo'<h2>' . $article->getTitle() . ' <a href="#" class="post-humanname">Ange Gnamba</a></h2>';
						
						echo'<div class="post-stamp">';	
							echo'<div class="post-time"><a href="#">' . $article->getPublicationDate() . '</a></div>';
						echo'</div>';
					echo'</div>'; // post header
					echo'<div class="post-content">';
						echo'<a class="post-wrapper" href="article-du-chien.php?id=' . $article->getId() . '"><img src="images/dog/' . $article->getPicture() . '" alt="Photo article de ' . $article->getTitle() . '"></a>';
					echo'</div>';

					echo'<div class="post-actions">	';			
						echo'<div class="post-caption">';
							echo'<p>' . $article->getDescription() . '</p>';
						echo'</div>';
					echo'</div>';
				echo'</div>';// post-container -->
			echo'</div>';// post-bgscreen -->
			
        echo'</div>'; // post -->
	}?>
	
</div>

<?php 
include "footer.php"
?>