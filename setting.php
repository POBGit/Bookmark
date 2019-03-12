<?php
/**
 * Created by PhpStorm.
 * User: PO
 * Date: 2019-03-11
 * Time: 17:13
 */

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookmark | Paramètres</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700,900" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <div>
        <a href="index.php"><i class="fas fa-arrow-left"></i> Retour</a>
    </div>
    <div>
        <h1>Paramètres</h1>
        <p>Choisissez les paramètres qui vous définissent le mieux.</p>
    </div>
</header>

<form action="setting.php" method="post">
    <div>
        <div>
            <h2>Langue</h2>
        </div>
        <div>
            <select name="" id="">
                <option value="fr">Français</option>
            </select>
        </div>
    </div>

    <div>
        <div>
            <h2>Thème</h2>
        </div>
        <div>
            <select name="" id="">
                <option value="auto">Automatique</option>
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
        </div>
    </div>

    <div id="info">
        <div>
            <h2>Informations</h2>
        </div>
        <div>
            <div>
                <label for=""><i class="fas fa-user"></i></label>
                <input type="text" placeholder="Prénom">
            </div>

            <div>
                <label for=""><i class="fas fa-user"></i></label>
                <input type="text" placeholder="Nom">
            </div>
            <div>
                <label for=""><i class="fas fa-envelope"></i></label>
                <input type="email" placeholder="Courriel">
            </div>
            <div>
                <label for=""><i class="fas fa-lock"></i></label>
                <input type="password" placeholder="Mot de passe">
            </div>
        </div>
    </div>
    <input type="submit" name="cmd" value="Sauvegarder">

</form>


</body>
</html>
