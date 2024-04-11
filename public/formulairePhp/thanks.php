<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $user_firstName = $_POST['user_firstName'];
    $user_email = $_POST['user_email'];
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Adresse e-mail invalide.";
    }
    $phone = $_POST['phone'];
    $selectReason = $_POST['selectReason'];
    $message = $_POST['user_message'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <p>Merci <?= $user_firstName ?> <?= $user_name ?> de nous avoir contacté à propos de "<?= $selectReason ?>"<br>
            Un de nos conseillers vous contactera soit à l’adresse <?= $user_email ?> ou par téléphone au <?= $phone ?>
            dans les plus brefs délais pour traiter votre demande : <br>
            <?= $message ?>
        </p>
    </div>
</body>

</html>