<?php
// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['ajouterDog'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['nickname']) and !empty($_POST['birthday']) and !empty($_FILES['picture']) ) {
        include("classes/functions.php");      
        // RECUPERER LES POSTS
        $nickname = $_POST['nickname'];
        $birthday = $_POST['birthday'];
        $race1 = $_POST['race1'];
        // $race2 = $_POST['race2'];
        $userId = $_SESSION['id'];
        $picture = upload($_FILES['picture']);
        //var_dump($picture);
        // FAIRE UNE FONCTION QUI VERIFIE SI LE FICHIER A BIEN ETE AJOUTER AVANT D'AJOUTER LE CHIEN
        // LA FONCTION DOIT POUVOIR AUSSI RETOURNER LES ERREURS
        // APPEL DE MA FONCTION QUI AJOUTE UN CHIEN
       $appli->setDog($nickname, $birthday, $picture, $userId);
       echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
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