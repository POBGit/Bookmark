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
<main class="flex-container">
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

        <div id="langue">
            <div>
                <h2>Langue</h2>
            </div>
            <div>
                <select name="sLangue" id="sLangue">
                    <option value="fr">Français</option>
                </select>
            </div>
        </div>

        <div id="theme">
            <div>
                <h2>Thème</h2>
            </div>
            <div>
                <select name="sTheme" id="sTheme">
                    <option value="auto">Automatique</option>
                    <option value="light">Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
        </div>

        <div id="moteur">
            <div>
                <h2>Moteur de recherche</h2>
            </div>
            <div>
                <select name="sMoteurDeRecherche" id="sMoteurDeRecherche">
                    <option value="google">Google</option>
                    <option value="duckduckgo">DuckDuckGo</option>
                    <option value="yahoo">Yahoo!</option>
                    <option value="bing">Bing</option>
                    <option value="ecosia">Ecosia</option>
                </select>
            </div>
        </div>

        <div id="sources">
            <div>
                <h2>Sources d'actualité</h2>
            </div>
            <div>
                <select name="sSource" id="sSource">
                    <option value="google">Google News</option>
                </select>
            </div>
        </div>

        <div id="info">
            <div>
                <h2>Informations</h2>
            </div>
            <div>
                <div id="imgProfil">
                    <img src="medias/P1020673.jpg" alt="">
                    <input type="file" name="sAvatar" id="sAvatar">
                </div>
                
                <div>
                    <label for="sPrenom"><i class="fas fa-user"></i></label>
                    <input type="text" placeholder="Prénom" name="sPrenom" id="sPrenom">
                </div>

                <div>
                    <label for="sNom"><i class="fas fa-user"></i></label>
                    <input type="text" placeholder="Nom" id="sNom" name="sNom">
                </div>
                <div>
                    <label for="sCourriel"><i class="fas fa-envelope"></i></label>
                    <input type="email" placeholder="Courriel" id="sCourriel" name="sCourriel">
                </div>
                <div>
                    <label for="sMotDePasse"><i class="fas fa-lock"></i></label>
                    <input type="password" placeholder="Mot de passe" id="sMotDePasse" name="sMotDePasse">
                </div>
            </div>
        </div>

        <input type="submit" name="cmd" value="Sauvegarder">
    </form>
</main>

</body>
</html>
