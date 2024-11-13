<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $fileName = basename($_FILES['image']['name']);
    $targetFile = $targetDir . $fileName;
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($imageData = getimagesize($_FILES['image']['tmp_name'])) {
        if (in_array($fileExtension, $allowedExtensions)) {
            if ($_FILES['image']['size'] <= 5000000) {
                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }
                $safeFileName = preg_replace("/[^a-zA-Z0-9_\-\.]/", "", $fileName);
                $safeFilePath = $targetDir . $safeFileName;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $safeFilePath)) {
                    echo "Fichier téléchargé en toute sécurité : <a href='$safeFilePath'>Voir l'image</a>";
                } else {
                    echo "Erreur lors du téléchargement.";
                }
            } else {
                echo "Le fichier est trop volumineux.";
            }
        } else {
            echo "Extension non autorisée.";
        }
    } else {
        echo "Le fichier n'est pas une image valide.";
    }
}
?>
