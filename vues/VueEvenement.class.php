<?php
/**
 * Created by PhpStorm.
 * User: Pierrot
 * Date: 2019-03-01
 * Time: 13:13
 */

class VueEvenement
{

    // Tableau contenant les mois en français
    private $aMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    // Tableau contenant les jours de la semaine en français
    private $aJours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');


    /**
     * Afficher le calendrier avec les évènements de l'utilisateur
     * @param $aoEvenements
     * @param string $sMsg
     */
    public function afficherTousAuj($aoEvenements, $sMsg = "")
    {
        $sHtml = "
            <div id='calendrier'>
                <table>
                    <tr>
                        <th>D</th>
                        <th>L</th>
                        <th>M</th>
                        <th>M</th>
                        <th>J</th>
                        <th>V</th>
                        <th>S</th>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><span class='auj'>4</span></td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class='event-bullet'></span></td>
                        <td></td>
                        <td><span class='event-bullet'></span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <div>
                    <h2>Événements</h2>
                    <div id='events-container'>
                        <div class='item events-item live'>
                            <span>En cours - Fin à 23:59</span>
                            <p>Sprint 3 - Projet de fin d'études</p>
                        </div>
                    </div>
                </div>
            </div>
            ";

        echo $sHtml;
    }

    public function afficherEvenements($aoEvenements, $sMsg = "")
    {
        $sHtml = "";

        $sHtml .= $sMsg;

        if ($aoEvenements) {
            for ($i = 0; $i < count($aoEvenements); $i++) {

                $sDateDebut = ($aoEvenements[$i]->getsDateDebut());
                $sDateFin = ($aoEvenements[$i]->getsDateFin());
                $sDateMaintenant = new DateTime("now", new DateTimeZone("America/Toronto"));

                if ($sDateDebut <= $sDateMaintenant->format("Y-m-d H:i:s") && $sDateFin >= $sDateMaintenant->format("Y-m-d H:i:s")) {
                    $sHtml .= "
                        <div class='flex-container event-item event-item-now'>
                            <div>";
                    $sHtml .= "<span>En cours - Fin à " . date('H:i', strtotime($sDateFin)) . "</span>";
                } else if ($sDateDebut >= $sDateMaintenant->format("Y-m-d H:i:s")) {
                    $sHtml .= "
                        <div class='flex-container event-item'>
                            <div>";
                    $sHtml .= "<span>" . date('H:i', strtotime($sDateDebut)) . "</span>";
                }

                $sHtml .= "
                            <p>" . $aoEvenements[$i]->getsNomEvenement() . "</p>
                        </div>
                        <a href='#'><i class='fas fa-ellipsis-v'></i></a>
                    </div>
        ";
            }
        } else {
            $sHtml .= "<p>Aucun événement prévu.</p>";
        }


        echo $sHtml;
    }
}
