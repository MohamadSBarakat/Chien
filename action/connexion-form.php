<?php


// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['connexion'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        $userProfile = $appli->getUsersByEmail($_POST['email']);
        // SI L'UTILISATEUR N'EST PAS INSCRIT OU QUE LE MOT DE PASSE EST FAUX
        if (($appli->getUsersByEmail($_POST['email']) !== false) ) {
           if (password_verify($_POST['password'], $userProfile->getPwd())) {
                // On crée quelques variables de session dans $_SESSION
                $_SESSION['id'] = $userProfile->getId();
                $_SESSION['email'] = $userProfile->getEmail();
                $_SESSION['lastName'] = $userProfile->getLastName();
                $_SESSION['pwd'] = $userProfile->getPwd();
                $appli->insertLastConnectionDateToUser($userProfile->getId());
                // On redirige l'utilisateur sur la page d'accueil
                // header("Location: index.php");
                echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
           }
           else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>L’adresse e-mail et le mot de passe ne correspondent pas aux données enregistrées!</strong> Veuillez vérifier vos données et réessayer.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
           }
        } else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>L’adresse e-mail et le mot de passe ne correspondent pas aux données enregistrées!</strong> Veuillez vérifier vos données et réessayer.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
        }

    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Veuillez remplir tous les champs!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
    }
} 
// else {
//     header("Location: connexion.php");
// }

?>