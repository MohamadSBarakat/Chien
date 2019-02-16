<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Ajouter Un Chien";
// INCLURE LE HEADER
include "header.php";
?>
<div class="container">
     <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ajouter Un Chien</h5>
                    <form class="form-signin" action="" method="POST" enctype="multipart/form-data" >
                        <?php include "action/ajouter-un-chien-form.php";?>    
                        <div class="form-label-group">
                            <label for="inputPrenom">Nom du chien</label>
                            <input type="text" id="inputPrenom" name ="nickname" class="form-control" placeholder="Nom du chien" required autofocus> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputNom"></label>
                            <input type="Date" id="inputNom" name ="birthday" class="form-control" placeholder="Date" required> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputPays">Téléverser la photo de votre chien</label>
                            <input type="file" id="inputPhoto" name ="picture" class="form-control" placeholder="Téléverser la photo de votre chien" required> 
                        </div>
   
                        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Race(s)</label>
                    </div>
                    <select class="custom-select" name ="race1" id="inputGroupSelect01">
                        <option selected>Choisir...</option>
                        <?php $races = $appli->getAllRaces();
                          foreach  ($races  as  $race) {
                          $dogRace = $race->nameRace;
                          echo "<option value = '$dogRace' >$dogRace</option>";  
                          }  ?>
                    </select>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase btn-aj-ch" name="ajouterDog" type="submit">Enregistrer</button>
                </div> 
            </div>
        </div>      
    </div>
</div>


<?php 
include "footer.php"
?>