<?php
/**
 * Created by PhpStorm.
 * User: Pierrot
 * Date: 2019-03-01
 * Time: 14:51
 */

class VueModal {

    /**
     * Affichage la fenêtre de dialogue pour ajouter une tâche
     * @param void
     * @return void
     */
    public function afficherModalTache() {
        $sHtml = "
        <div class='modal' id='modalTodo'>
            <div class='modal-contenu modal-todo'>
                <span><i class='fas fa-times'></i></span>
                <h3>Ajouter une tâche</h3>
    
                <form action='index.php' method='POST'>
                    <div class='flex-container'>
                        <p>Tâche</p>
                        <input type='text' name='sNomTache' id='sNomTache' placeholder='Tâche à réaliser'>
                    </div>
    
                    <button>Créer</button>
                </form>
            </div>
        </div>";

        echo $sHtml;
    }


    /**
     * Afficher la fenêtre de dialogue pour ajouter un événement
     * @param void
     * @return void
     */
    public function afficherModalEvenement(){
        $sHtml = "
        <div class='modal' id='modalEvent'>
        <div class='modal-contenu event'>
            <span><i class='fas fa-times'></i></span>
            <h3>Ajouter un événement</h3>

            <form action='index.php' method='POST'>
                <div class='flex-container'>
                    <p>Titre</p>
                    <input type='text' name='sNomEvenement' id='sNomEvenement' placeholder=\"Titre de l'événement\">
                </div>
                <div class='flex-container'>
                    <p>Début</p>
                    <div>
                        <label for='sDateDebut'><i class='far fa-calendar'></i></label>
                        <input type='text' name='sDateDebut' id='sDateDebut' placeholder='2019-02-27'>
                    </div>
                    <div>
                        <label for='sHeureDebut'><i class='far fa-clock'></i></label>
                        <input type='text' name='sHeureDebut' id='sHeureDebut' placeholder='12:00'>
                    </div>

                    <label class='container'>
                        <input type='checkbox' name='cchJournee' id='cchJournee'>
                        <span class='checkmark'></span>
                        <p>Toute la journée</p>
                    </label>
                </div>
                <div class='flex-container'>
                    <p>Fin</p>
                    <div>
                        <label for='sDateFin'><i class='far fa-calendar'></i></label>
                        <input type='text' name='sDateFin' id='sDateFin' placeholder='2019-02-27'>
                    </div>
                    <div>
                        <label for='sHeureFin'><i class='far fa-clock'></i></label>
                        <input type='text' name='sHeureFin' id='sHeureFin' placeholder='12:00'>
                    </div>
                </div>

                <button>Créer</button>
            </form>
        </div>
    </div>";

        echo $sHtml;
    }
}
