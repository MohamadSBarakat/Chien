<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Ajouter Un Article";
// INCLURE LE HEADER
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
<!-- !!!!! AJOUTER UNE PHOTO DU CHIEN EN BANNIERE !!!!!! -->
                    <h5 class="card-title text-center">Ajouter Un Article</h5>
                    <form class="form-group" action="" method="POST" enctype="multipart/form-data" >
                        <?php include "action/ajouter-un-article-form.php";?>
                        <!-- TITRE DE L'ARTICLE -->
                        <div class="input-group input-group-lg inp-articl">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Titre</span>
                            </div>
                            <input type="text" class="form-control" name="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required autofocus>
                        </div>
                        <!-- PHOTO DE L'ARTICLE -->
                        <div class="card">
                            <label for="inputPays">Téléverser la photo de votre chien</label>
                            <input type="file" id="inputPhoto" name ="picture" class="form-control" placeholder="Téléverser la photo de votre chien" required> 
                        </div>
                        <!-- DESCRIPTION DE L'ARTICLE -->
                        <div class="form-group txtara">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5" required></textarea>
                        </div>
                        <!-- VALIDER L'ARTICLE -->
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" name="ajouterArticle" type="submit"> Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include "footer.php"
?>
