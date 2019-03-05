<?php
/**
 * Created by PhpStorm.
 * User: Pierrot
 * Date: 2019-03-01
 * Time: 13:13
 */

class VueUtilisateur
{

    /**
     * Afficher le Header avec le nom de l'utilisateur
     *
     * @param Utilisateur $oUtilisateur
     */
    public function afficherNav(Utilisateur $oUtilisateur)
    {

        $sHtml = "
        <main class='flex-container'>
            <header class='flex-container'>
                <div id='search'>
                    <span><i class='fas fa-search'></i></span>
                    <input type='text' placeholder='Rechercher sur Google' action='http://www.google.com/search'>
                </div>
                <div id='user' class='flex-container'>
                    <p>" . $oUtilisateur->getsPrenom() . " " . substr($oUtilisateur->getsNom(), 0, 1) . "</p>
                    <img src='../medias/P1020673.jpg' alt=''>
                </div>
                <div id='settings'>
                    <a href='#'><i class='fas fa-cog'></i></a>
                </div>
            </header>
            
            <div id='content'>
            ";

        echo $sHtml;
    }
}
