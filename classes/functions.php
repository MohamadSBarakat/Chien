<?php

// FONCTION QUI PREND EN PARAMETRE $_FILES, QUI AJOUTE LA PHOTO ET LE CHEMIN DANS LE SERVEUR ET LA BDD
function upload($picture){
    // INITIALISER L'EXTENSION D'ERREUR À FALSE
    $extensions_erreur = false;
    // Liste des extensions que j'autorise à être dans ma base de données
    $extensions = array ('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG', 'gif', 'GIF');
    // Liste des erreurs probables 
    $phpFileUploadErrors = array(
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    );
    $file_extension = explode('.', $picture['name']); 
    $file_extension = end($file_extension);

    $uploadedFileName = $picture['name']; 
    $uploadedFile = new SplFileInfo($uploadedFileName);
    $extension_Fichier = $uploadedFile->getExtension();

    // SI LE NOM D'EXTENSION N'EST PAS LE MÊME
    if(!in_array($file_extension, $extensions)){
        $extensions_erreur = true;
    }
    // SI L'ERREUR N'EST PAS EGAL À 0
    if($picture['error']){
        echo $phpFileUploadErrors[$picture['error']];
    } elseif ($extensions_erreur) {
        echo 'Extension invalide <br> Veuillez choisir une extension de type "jpg", "jpeg", "gif" ou "png" ';
    } else {
        $today = date('Ymd_His-');
        $fileName = $today.$picture['name'];
        // DEPLACER LE FICHIER TELECHARGÉ DANS LE SERVEUR
        move_uploaded_file($picture['tmp_name'], 'images/dog/'.$fileName);
        echo "Bravo! L'image a été téléchargé!";
        return $fileName;
    }
}

  
           
                   
?>