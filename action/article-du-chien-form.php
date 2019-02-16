<?php
// SI L'UTILISATEUR A APPUYÉ SUR LE BOUTON INSCRIPTION
if (isset($_POST['ajouterCommentaire'])) {
    // SI IL N'A PAS DE CHAMPS VIDES
    if (!empty($_POST['comment']) ) {   
        // RECUPERER LES POSTS
        $comment = $_POST['comment'];
        $articleId = $_POST['idArticle'];
        $userId = $_POST['id'];
        $publicationDate = date('Y-m-d H:i:s');
        // APPEL DE MA FONCTION QUI AJOUTE UN ARTICLE
        $appli->setComment($comment, $publicationDate, $articleId, $userId);
       echo "<script type='text/javascript'>document.location.replace('article-du-chien.php?id=$articleId');</script>";
    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Veuillez remplir ce champ obligatoires.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
    }
}

?>