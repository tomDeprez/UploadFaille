<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Niveau 4</title>
</head>
<body>
    <h2>Uploader une image (Niveau 4 - Sécurité maximale)</h2>
    <form action="niveau4_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Uploader</button>
    </form>
</body>
</html>
