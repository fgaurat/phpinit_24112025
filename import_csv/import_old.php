<?php
$fichier = fopen('data.txt', 'r');
if ($fichier) {
    // Lire ligne par ligne
    while (!feof($fichier)) {
        $ligne = fgets($fichier);
        echo htmlspecialchars($ligne);
    }
    fclose($fichier);
    "<br>";
}



// Autre syntaxe
$fichier = fopen('data.txt','r');
if ($fichier) {
    while (($ligne = fgets($fichier)) !== false) {
        echo $ligne .
            "<br>";
    }
    fclose($fichier);
}
