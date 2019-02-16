<?php
// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['inscription'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['password-repeat'])) {
        // SI LES MOTS DE PASSE SONT IDENTIQUES
        if ($_POST['password'] === $_POST['password-repeat']) {
            // SI L'UTILISATEUR N'EST PAS DÉJÀ INSCRIT
            if ($appli->getUsersByEmail($_POST['email']) == false) {
                // HASHER LE PASSWORD
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // On l'ajoute dans la base de données
                $lastConnectionDate = date('Y-m-d H:i:s');; // GETDATE();
                $lastName = null;
                $firstName = null;
                $country = null;
                $city = null;
                $_SESSION['id'] = $appli->setUserDog($_POST['email'], $passwordHash, $lastConnectionDate, $lastName, $firstName, $country, $city);
                // On crée quelques variables de session dans $_SESSION
                // session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['pwd'] = $_POST['password'];
                
                //header("Location: profil.php");
                echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
            } else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Ce compte existe déjà!!</strong> Veuillez-vous connecter!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Les mots de passe ne sont pas identiques.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
        }
    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Veuillez remplir tous les champs obligatoires.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
    }
}


?>