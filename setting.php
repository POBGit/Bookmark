<?php
/**
 * Created by PhpStorm.
 * User: PO
 * Date: 2019-03-11
 * Time: 17:13
 */

// Afficher les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* ========================================================================================== */

// Définir le fuseau horaire à Toronto
date_default_timezone_set('America/Toronto');

/* ========================================================================================== */

// Controleur
require('controleur/Controleur.class.php');

// Require Modèles / Vues / Lib
require('lib/Autoloader.class.php');
spl_autoload_register('autoload');

/* ========================================================================================== */

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

    <?php

    try{
        $oVueUtilisateur = new VueUtilisateur();
        $oUtilisateur = new Utilisateur(1);
        $oUtilisateur->rechercherUn();
        $sAlerte = "";
        $sMsg = "";

        if(isset($_POST['cmd']) == false){
            $oVueUtilisateur->adm_afficherProfil($oUtilisateur);
        }
        else{

            $oUtilisateur->setsNom($_POST['sNom']);
            $oUtilisateur->setsPrenom($_POST['sPrenom']);
            $oUtilisateur->setsCourriel($_POST['sCourriel']);
            $oUtilisateur->setsCourriel($_POST['sCourriel']);
            $oUtilisateur->setsTheme($_POST['sTheme']);
            $oUtilisateur->setsMoteurRecherche($_POST['sMoteurRecherche']);
            $oUtilisateur->setsSources($_POST['sSources']);


            if(file_exists($_FILES['sAvatar']['tmp_name']) || is_uploaded_file($_FILES['sAvatar']['tmp_name'])){
                // Téléverser l'image
                $aInfo = $oUtilisateur->televerserPhoto();

                if($aInfo["erreur"] == false){
                    $oUtilisateur->setsAvatar($aInfo["sInfo"]);
                }
                else{
                    $sMsg = $aInfo['sInfo'];
                }
            }

            if(empty($_POST['sMotDePasse']) == false){
                $oUtilisateur->setsMotDePasse($_POST['sMotDePasse']);
            }

            if($oUtilisateur->modifier()){
                $sMsg = "Les modifications ont été sauvegardées!";
                $sAlerte = "
                    <div class='flex-container alerte' data-opt='success'>
                        <span><i class='fas fa-check-circle'></i></span>
                        <p>". $sMsg ."</p>
                    </div>";
            }
            else{
                if(empty($sMsg)){
                    $sMsg = "Erreur : Les modifications n'ont pas été sauvegardées!";
                }

                $sAlerte = "
                    <div class='flex-container alerte' data-opt='error'>
                        <span><i class='fas fa-exclamation-circle'></i></span>
                        <p>". $sMsg ."</p>
                    </div>";
            }

            $oVueUtilisateur->adm_afficherProfil($oUtilisateur, $sAlerte);
        }

    }
    catch (Exception $oException){
        echo "<p>". $oException->getMessage() ."</p>";
    }

    ?>

</main>

</body>
</html>
