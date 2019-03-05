<?php
/**
 * Created by PhpStorm.
 * User: Pierrot
 * Date: 2019-03-01
 * Time: 14:43
 */

class VueMeteo {

    /**
     * Afficher la météo
     * @param void
     * @return void
     */
    public function afficherMeteo(){
        $sHtml = "
            <div id=\"meteo\">
                <h1>1°C <span>Ensoleillé</span></h1>
                <div>
                    <h2>Prévisions</h2>
                    <div id=\"prevision-container\">
                        <div class=\"item meteo-item\">
                            <span>Mardi</span>
                            <p>1°C <span>//</span><span>Averses de neige</span></p>
                        </div>
                    </div>
                </div>
            </div>
        ";
        echo $sHtml;
    }

}
