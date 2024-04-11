<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <form action="/formulairePhp/thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name" required>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstName" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="user_email" name="user_email" required>
        </div>
        <div>
            <label for="telephone">Téléphone :</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <select name="selectReason" id="selectReason" required>
                <option value="">Merci de choisir un sujet</option>
                <option name="internet">Plus de réseau</option>
                <option name="tele">Plus de télévision</option>
                <option name="phoneFix">Plus de téléphone</option>
                <option name="communication">Problème de communication</option>
                <option name="other">Autre</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
    <?php
    var_dump($_POST);

    ?>
</body>

</html>