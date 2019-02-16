<?php
// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['ajouterArticle'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['title']) and !empty($_POST['description']) and !empty($_FILES['picture'])) {
        include("classes/functions.php");      
        // RECUPERER LES POSTS
        $title = $_POST['title'];
        $description = $_POST['description'];
        $publicationDate = date('Y-m-d H:i:s');
        $dogId = $_GET['id'];
        $picture = upload($_FILES['picture']);
        //var_dump($picture);
// FAIRE UNE FONCTION QUI VERIFIE SI LE FICHIER A BIEN ETE AJOUTER AVANT D'AJOUTER LE CHIEN
// LA FONCTION DOIT POUVOIR AUSSI RETOURNER LES ERREURS
        // APPEL DE MA FONCTION QUI AJOUTE UN CHIEN
        $idArticle = $appli->setArticle($title, $picture, $description, $publicationDate, $dogId);

        echo "<script type='text/javascript'>document.location.replace('article-du-chien.php?id=$idArticle.php');</script>";
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