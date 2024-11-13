<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES['image']['name']);
    $imageFileType = getimagesize($_FILES['image']['tmp_name'])['mime'];

    if (strpos($imageFileType, 'image/png') === 0 ) {
        if ($_FILES['image']['size'] <= 5000000) { // Limite à 5 Mo
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
            echo "Fichier téléchargé : <a href='$targetFile'>Voir le fichier</a>";
        } else {
            echo "Le fichier est trop volumineux.";
        }
    } else {
        echo "Le fichier n'est pas une image valide ou l'extension n'est pas autorisée.";
    }
}
?>
