<?php
/**
 * @author Ulysse
 * @version: 2019-02-28
 */

class Controleur
{

    private $oUtilisateur;

    /**
     * Gérer l'affichage du site
     *
     * @param void
     *
     * @return void
     */
    public function gererSite()
    {

        try {

            $oVuePage = new VuePage();

            // Récupérer l'ID de l'utilisateur de la Session dans le fichier Index.php
            $this->oUtilisateur = new Utilisateur($_SESSION['connexion']);
            $this->oUtilisateur->rechercherUn();

            /* ========================================================================================== */
            /* HEAD DE LA PAGE */
            /* ========================================================================================== */

            // Afficher le HEAD de la page
            $oVuePage->getHead($this->oUtilisateur);

            /* ========================================================================================== */
            /* NAV DE LA PAGE */
            /* ========================================================================================== */

            // Afficher le NAV de la page
            $oVuePage->getNav();

            $this->gererAfficherHeader();

            /* ========================================================================================== */
            /* CONTENU DE LA PAGE */
            /* ========================================================================================== */

            // Afficher la date du jour
            $this->gererAfficherDate();

            /* ========================================================================================== */
            /* RANGÉE #1 */
            /* ========================================================================================== */

            echo "<div class='row'>";

            // Afficher le calendrier
            $this->gererAfficherEvenements();

            // Horloge
            $this->gererAfficherMeteo();


            // Bourse
            $this->gererAfficherBourse();

            // Citation
            $this->gererAfficherCitation();

            echo "</div>";

            /* ========================================================================================== */
            /* RANGÉE #2 */
            /* ========================================================================================== */

            echo "<div class='row'>";

            // Taches
            $this->gererAfficherTaches();

            // Nouvelles
            $this->gererAfficherNouvelle();

            // Calculatrice
            $this->gererAfficherCalculatrice();

            /* ========================================================================================== */

            echo "</div>";

            /* ========================================================================================== */

            echo "</div></main>";

            // Afficher les modals
            $this->gererAfficherModal();

            /* ========================================================================================== */
            /* FIN DE LA PAGE */
            /* ========================================================================================== */

            // Fin de la page HTML
            $oVuePage->getFoot();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    } // fin ()

    /* ========================================================================================== */

    /**
     * Gérer l'affichage du nav
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherHeader()
    {
        try {

            $oVueUtilisateur = new VueUtilisateur();

            $oVueUtilisateur->afficherNav($this->oUtilisateur);
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage de la citation
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherCitation()
    {
        try {
            $oVueCitation = new VueCitation();
            $oCitation = new Citation();
            $oCitation->chercherRandCitation();

            $oVueCitation->afficherUn($oCitation);
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage du calendrier
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherEvenements()
    {
        try {
            $oVueEvenement = new VueEvenement();
            $oEvenement = new Evenement();
            $oEvenement->setoUtilisateur($this->oUtilisateur);
            $aoEvenements = $oEvenement->rechercherTousAuj();

            $oVueEvenement->afficherTousAuj($aoEvenements);
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage de la liste des choses à faire
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherTaches()
    {
        try {
            $oVueTache = new VueTache();
            $oTache = new Tache();
            $oTache->setoUtilisateur($this->oUtilisateur);

            $aoTaches = $oTache->rechercherTousParUtilisateur();


            $oVueTache->afficherTous($aoTaches);
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage du temps (Horloge et chronomètre)
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherHorloge()
    {
        try {
            $oVueTemps = new VueTemps();

            $oVueTemps->afficherHorloge();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage de la date d'aujourd'hui
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherDate()
    {
        try {
            $oVueTemps = new VueTemps();

            $oVueTemps->afficherDate();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage de la météo
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherMeteo()
    {
        try {
            $oVueMeteo = new VueMeteo();
            $oVueMeteo->afficherMeteo();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage des nouvelles
     * @param void
     * @return void
     */
    public function gererAfficherNouvelle()
    {
        try {
            $oNouvelle = new Nouvelle();
            $oVueNouvelle = new VueNouvelle();
            $aoNouvelles = $oNouvelle->rechercherActualite();

            $oVueNouvelle->afficherTousNouvelles($aoNouvelles);
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage de la bourse
     * @param void
     * @return void
     */
    public function gererAfficherBourse()
    {
        try {
            $oVueNouvelle = new VueNouvelle();
            $oVueNouvelle->afficherTousBourse();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage de la calculatrice
     * @param void
     * @return void
     */
    public function gererAfficherCalculatrice()
    {
        try {
            $oVueCalculatrice = new VueCalculatrice();
            $oVueCalculatrice->afficherUn();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }

    /**
     * Gérer l'affichage des fenêtres de dialogue
     *
     * @param void
     *
     * @return void
     */
    public function gererAfficherModal()
    {
        try {
            $oVueModal = new VueModal();

            $oVueModal->afficherModalTache();
            $oVueModal->afficherModalEvenement();
        } catch (Exception $oException) {
            echo "<p>" . $oException->getMessage() . "</p>";
        }
    }
} // fin classe
