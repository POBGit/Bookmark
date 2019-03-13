<?php
/**
 * Created by PhpStorm.
 * User: PO
 * Date: 2019-03-05
 * Time: 16:20
 */

class VueNouvelle
{

    /**
     * Afficher toutes les nouvelles
     *
     * @param void
     *
     * @return void
     */
    public function afficherTousNouvelles($aoNouvelles, $sMsg = "")
    {
        $sHtml = "<div id='nouvelles'>
                <h2>Nouvelles</h2>
                <div id='news-container' class='div-content'>";

        for ($i = 0; $i < count($aoNouvelles); $i++) {
            $sHtml .= "
                    <div class='item news-item'>
                        <span>" . $aoNouvelles[$i]->getsSource() . "</span>
                        <a href='" . $aoNouvelles[$i]->getsLien() . "'>" . $aoNouvelles[$i]->getsTitre() . "</a>
                    </div>";
        }

        $sHtml .= "
                </div>
            </div>";

        echo $sHtml;
    }

    /**
     * Afficher la bourse
     *
     * @param void
     *
     * @return void
     */
    public function afficherTousBourse()
    {
        $sHtml = "
            <div id='bourse'>
                <h2>Bourse</h2>
                <div id='stock-container'>
                </div>
            </div>
        ";

        echo $sHtml;
    }
}
