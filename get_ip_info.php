<?php
// Récupérer l'adresse IP de l'interface réseau enp4s0
$adresse_ip = shell_exec("ip addr show enp4s0 | grep -oP '(?<=inet\s)\d+(\.\d+){3}'");

// Afficher l'adresse IP récupérée
echo "Adresse IP récupérée : $adresse_ip<br>";

// Si une adresse IP a été trouvée
if (!empty($adresse_ip)) {
    // Créer un fichier .txt avec le nom de l'adresse IP
    $fichier = "/var/www/html/$adresse_ip.txt";
    $resultat = file_put_contents($fichier, "");

    // Vérifier si la création du fichier a réussi
    if ($resultat !== false) {
        echo "Fichier créé avec succès : $fichier";
    } else {
        echo "Erreur lors de la création du fichier : $fichier";
    }
} else {
    echo "Aucune adresse IP trouvée pour l'interface enp4s0.";
}
?>
