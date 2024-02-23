<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Chemin du fichier à supprimer
    $chemin_fichier = '/var/www/html/blank.php';

    // Vérifier si le fichier existe avant de le supprimer
    if (file_exists($chemin_fichier)) {
        // Supprimer le fichier
        if (unlink($chemin_fichier)) {
            echo "Le fichier blank.php a été supprimé avec succès.";
        } else {
            echo "Une erreur s'est produite lors de la suppression du fichier.";
        }
    } else {
        echo "Le fichier blank.php n'existe pas.";
    }
}
?>
