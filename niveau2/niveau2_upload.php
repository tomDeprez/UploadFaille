<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES['image']['name']);
    $imageFileType = $_FILES['image']['type'];

    if (strpos($imageFileType, 'image/png') === 0) {
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
        echo "Fichier téléchargé : <a href='$targetFile'>Voir le fichier</a>";
    } else {
        echo "Le fichier n'est pas une image valide.";
    }
}
?>
