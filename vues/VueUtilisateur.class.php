<?php
/**
 * Created by PhpStorm.
 * User: Pierrot
 * Date: 2019-03-01
 * Time: 13:13
 */

class VueUtilisateur {

    /**
     * Afficher le Header avec le nom de l'utilisateur
     *
     * @param Utilisateur $oUtilisateur
     */
    public function afficherNav(Utilisateur $oUtilisateur) {

        $sHtml = "
        <main class='flex-container'>
            <header class='flex-container'>
                <div id='search'>
                    <span><i class='fas fa-search'></i></span>
                    <form action='http://www.google.com/search' method='get'> 
                        <input type='text' name='q' placeholder='Rechercher sur Google' required autocomplete='off'>
                        </form>
                </div>
                <div id='user' class='flex-container'>
                    <p>" . $oUtilisateur->getsPrenom() . " " . substr($oUtilisateur->getsNom(), 0, 1) . ".</p>
                    <img src='medias/" . $oUtilisateur->getsAvatar() . "' alt=''>
                </div>
                <div id='settings'>
                    <a href='setting.php'><i class='fas fa-cog'></i></a>
                </div>
            </header>
            
            <div id='content'>
            ";

        echo $sHtml;
    }

    /* ============================================================================================================== */

    public function adm_afficherProfil(Utilisateur $oUtilisateur, $sMsg = "") {

        $aLangue = array(
            array("sNomLangue" => "Français", "sValeur" => "fr"),
            array("sNomLangue" => "Anglais", "sValeur" => "en")
        );
        $aTheme = array(
            array("sNomTheme" => "Automatique", "sValeur" => "auto"),
            array("sNomTheme" => "Light", "sValeur" => "light"),
            array("sNomTheme" => "Dark", "sValeur" => "dark")
        );
        $aMoteurRecherche = array(
            array("sNomMoteur" => "Google", "sValeur" => "google"),
            array("sNomMoteur" => "DuckDuckGo", "sValeur" => "duckduckgo"),
            array("sNomMoteur" => "Yahoo!", "sValeur" => "yahoo"),
            array("sNomMoteur" => "Bing", "sValeur" => "bing"),
            array("sNomMoteur" => "Écosia", "sValeur" => "ecosia")
        );
        $aSources = array(
            array("sNomSource" => "Google News", "sValeur" => "google")
        );

        $sHtml = "";

        if(empty($sMsg) == false){
            $sHtml .= $sMsg;
        }

        $sHtml .= "
        <form action='setting.php' method='post'>
    
            <div id='langue'>
                <div>
                    <h2>Langue</h2>
                </div>
                <div>
                    <select name='sLangue' id='sLangue'>";

        // Afficher les options de langues et cocher le choix de l'utilisateur
        for ($i = 0; $i < count($aLangue); $i++) {
            $select = "";
            if ($oUtilisateur->getsLangue() == $aLangue[$i]['sValeur']) {
                $select = "selected";
            }
            $sHtml .= "<option value='" . $aLangue[$i]['sValeur'] . "' " . $select . ">" . $aLangue[$i]['sNomLangue'] . "</option>";
        }

        $sHtml .= "
                    </select>
                </div>
            </div>
    
            <div id='theme'>
                <div>
                    <h2>Thème</h2>
                </div>
                <div>
                    <select name='sTheme' id='sTheme'>";

        // Afficher les options de thème et cocher le choix de l'utilisateur
        for ($i = 0; $i < count($aTheme); $i++) {
            $select = "";
            if ($oUtilisateur->getsTheme() == $aTheme[$i]['sValeur']) {
                $select = "selected";
            }
            $sHtml .= "<option value='" . $aTheme[$i]['sValeur'] . "' " . $select . ">" . $aTheme[$i]['sNomTheme'] . "</option>";
        }

        $sHtml .= "
                    </select>
                </div>
            </div>
    
            <div id='moteur'>
                <div>
                    <h2>Moteur de recherche</h2>
                </div>
                <div>
                    <select name='sMoteurRecherche' id='sMoteurRecherche'>";

        // Afficher les options de moteur de recherche et cocher le choix de l'utilisateur
        for ($i = 0; $i < count($aMoteurRecherche); $i++) {
            $select = "";
            if ($oUtilisateur->getsMoteurRecherche() == $aMoteurRecherche[$i]['sValeur']) {
                $select = "selected";
            }
            $sHtml .= "<option value='" . $aMoteurRecherche[$i]['sValeur'] . "' " . $select . ">" . $aMoteurRecherche[$i]['sNomMoteur'] . "</option>";
        }

        $sHtml .= "
                    </select>
                </div>
            </div>
    
            <div id='sources'>
                <div>
                    <h2>Sources d'actualité</h2>
                </div>
                <div>
                    <select name='sSources' id='sSources'>";

        // Afficher les options de sources d'actualité et cocher le choix de l'utilisateur
        for ($i = 0; $i < count($aSources); $i++) {
            $select = "";
            if ($oUtilisateur->getsSources() == $aSources[$i]['sValeur']) {
                $select = "selected";
            }
            $sHtml .= "<option value='" . $aSources[$i]['sValeur'] . "' " . $select . ">" . $aSources[$i]['sNomSource'] . "</option>";
        }

        $sHtml .= "
                    </select>
                </div>
            </div>
    
            <div id='info'>
                <div>
                    <h2>Informations</h2>
                </div>
                <div>
                    <div id='imgProfil'>
                        <img src='medias/" . $oUtilisateur->getsAvatar() . "' alt=''>
                        <input type='file' name='sAvatar' id='sAvatar'>
                    </div>
                    
                    <div>
                        <label for='sPrenom'><i class='fas fa-user'></i></label>
                        <input type='text' placeholder='Prénom' name='sPrenom' id='sPrenom' value='" . $oUtilisateur->getsPrenom() . "'>
                    </div>
    
                    <div>
                        <label for='sNom'><i class='fas fa-user'></i></label>
                        <input type='text' placeholder='Nom' id='sNom' name='sNom' value='" . $oUtilisateur->getsNom() . "'>
                    </div>
                    <div>
                        <label for='sCourriel'><i class='fas fa-envelope'></i></label>
                        <input type='email' placeholder='Courriel' id='sCourriel' name='sCourriel' value='" . $oUtilisateur->getsCourriel() . "'>
                    </div>
                    <div>
                        <label for='sMotDePasse'><i class='fas fa-lock'></i></label>
                        <input type='password' placeholder='Mot de passe' id='sMotDePasse' name='sMotDePasse'>
                    </div>
                </div>
            </div>
    
            <input type='submit' name='cmd' value='Sauvegarder'>
        </form>
        ";

        echo $sHtml;
    }
}
