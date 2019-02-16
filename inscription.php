<?php 
// SE CONNECTER A LA BASE DE DONNEES
require("classes/Connexion.php");
// ON DEMARRE LA SESSION AVANT D'ECRIRE DU CODE HTML
session_start();
// DEMARRER UN NOUVEL OBJET DE CONNEXION
$appli = new Connexion();
// TITRE DE LA PAGE
$title = "Profil utilisateur";
// INCLURE LE HEADER
include "header.php";

?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Inscrivez-vous</h5>
          <hr class="my-4">
          <form class="form-signin needs-validation" action="" method="post" enctype="multipart/form-data" novalidate >
            <?php include "action/inscription-form.php";?>
            <div class="form-label-group">
              <label for="inputEmail">Adresse e-mail</label>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Adresse e-mail" required autofocus> 
              <div class="invalid-feedback">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Email!</strong> non valide.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>

            <div class="form-label-group">
              <label for="inputPassword">Mot de passe (au moins 6 caractères)</label>
              <input type="password" id="inputPassword" name="password" minlength=6 class="form-control" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[~`!@#$%^&*()\-_+={};:\[\]\?\.\\/,]).{6,}" title="Le mot de passe doit contenir une lettre majuscule, un caractère spécial et un chiffre." placeholder="Mot de passe" required onchange="checkPassword()">
              <div class="invalid-feedback">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Mot de passe!</strong> non valide.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <small>Le mot de passe doit contenir une lettre majuscule, un caractère spécial et un chiffre.</small> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>  
              </div>
            </div>

            <div class="form-label-group">
              <label for="inputPasswordConfirm">Confirmez le mot de passe</label>
              <input type="password" id="inputPasswordConfirm" name="password-repeat" minlength=5 class="form-control" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[~`!@#$%^&*()\-_+={};:\[\]\?\.\\/,]).{6,}" title="Veuillez saisir le même mot de passe" placeholder="Confirmez le mot de passe" required onkeyup="checkPassword()">
            </div>
            <hr class="my-4">
            
            <button class="btn btn-lg btn-success btn-block text-uppercase" name="inscription" type="submit">S'inscrire</button>
              <div class="text-center">
                <span class="small">Vous avez déjà un compte? </span>
                <a class="small" href="connexion.php">Connectez-vous ici</a>
              </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- INCLURE LE FOOTER -->
<?php 
include "footer.php"
?>