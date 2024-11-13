<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Niveau 2</title>
</head>
<body>
    <h2>Uploader une image (Niveau 2 - Vérification du type MIME)</h2>
    <form action="niveau2_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Uploader</button>
    </form>
</body>
</html>
