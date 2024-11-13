<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Niveau 1</title>
</head>
<body>
    <h2>Uploader une image (Niveau 1 - Aucune sécurité)</h2>
    <form action="niveau1_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit">Uploader</button>
    </form>
</body>
</html>
