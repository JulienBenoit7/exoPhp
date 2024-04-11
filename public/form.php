<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uploadDir = 'public/uploads/';

    $tmpName = $_FILES['avatar']['tmp_name'];

    $maxFileSize = 1000000;
    if ($_FILES['avatar']['size'] > $maxFileSize) {
        $errors[] = 'Votre fichier doit faire moins de 2M';
    }

    $authorizedExtensions = ['jpg', 'gif', 'png', 'webp'];
    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

    if (!in_array($extension, $authorizedExtensions)) {
        $errors[] = 'Veuillez sélectionner une image de type jpg ou jpeg ou png.';
    }
    if (empty($errors)) {
        $uniqueName = uniqid('image_') . '.' . $extension;

        $uploadFile = $uploadDir . $uniqueName;

        if (move_uploaded_file($tmpName, $uploadFile)) {
            echo "L'upload de l'image a été réalisé avec succès.";

        } else {
            $errors[] = "Une erreur est survenue lors de l'upload de l'image.";

        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <label for="imageUpload">Sélectionnez votre image :</label>
        <input type="file" name="avatar" id="imageUpload" />
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>