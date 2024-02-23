<?php
// Définir le nom et la valeur du cookie
$nom_cookie = "mon_cookie";
$valeur_cookie = "valeur_du_cookie";

// Définir la durée de validité du cookie (par exemple, 30 jours)
$expiration = time() + (30 * 24 * 60 * 60);

// Définir l'attribut SameSite à None
$attributs_cookie = "SameSite=None";

// Définir le cookie en utilisant setcookie()
setcookie($nom_cookie, $valeur_cookie, $expiration, '/', '', false, true); // false indique que le cookie n'est pas sécurisé, true indique que l'attribut SameSite est défini

echo "Cookie créé avec succès.";
?>
