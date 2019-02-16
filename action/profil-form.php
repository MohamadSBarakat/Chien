<?php
// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['update'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['lastName']) or !empty($_POST['firstName']) or !empty($_POST['country']) or !empty($_POST['city'])) {

                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $country = $_POST['country'];
                $city = $_POST['city'];
                $idUser = $_SESSION['id'];
                $appli->UpdateUserProfile($idUser, $lastName, $firstName, $country, $city);

    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Veuillez remplir au moins un des champs avant de valider.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
    }
}


?>