<?php
/**
 * Created by PhpStorm.
 * User: PO
 * Date: 2019-02-26
 * Time: 20:40
 */

class Utilisateur {

    private $idUtilisateur,
        $sNom,
        $sPrenom,
        $sCourriel,
        $sMotDePasse,
        $sAvatar,
        $sDateInscription,
        $sLangue,
        $sTheme,
        $sMoteurRecherche,
        $sSources;

    /* =============================================================================================== */

    /**
     * Set l'id de l'utilisateur
     *
     * @param $idUtilisateur
     *
     * @throws TypeException
     */
    public function setidUtilisateur($idUtilisateur) {
        TypeException::estNumerique($idUtilisateur);

        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * Set le nom de famille de l'utilisateur
     *
     * @param $sNom
     *
     * @throws TypeException
     */
    public function setsNom($sNom) {
        TypeException::estChaineDeCaracteres($sNom);

        $this->sNom = $sNom;
    }

    /**
     * Set le prénom de l'utilisateur
     *
     * @param $sPrenom
     *
     * @throws TypeException
     */
    public function setsPrenom($sPrenom) {
        TypeException::estChaineDeCaracteres($sPrenom);

        $this->sPrenom = $sPrenom;
    }

    /**
     * Set le courriel de l'utilisateur
     *
     * @param $sCourriel
     *
     * @throws TypeException
     */
    public function setsCourriel($sCourriel) {
        TypeException::estChaineDeCaracteres($sCourriel);

        $this->sCourriel = $sCourriel;
    }

    /**
     * Set le mot de passe de l'utilisateur
     *
     * @param $sMotDePasse
     *
     * @throws TypeException
     */
    public function setsMotDePasse($sMotDePasse) {
        TypeException::estChaineDeCaracteres($sMotDePasse);

        $this->sMotDePasse = $sMotDePasse;
    }

    /**
     * Set l'avatar de l'utilisateur
     *
     * @param $sAvatar
     *
     * @throws TypeException
     */
    public function setsAvatar($sAvatar) {
        TypeException::estChaineDeCaracteres($sAvatar);

        $this->sAvatar = $sAvatar;
    }

    /**
     * Set la date d'inscription de l'utilisateur
     *
     * @param $sDateInscription
     *
     * @throws TypeException
     */
    public function setsDateInscription($sDateInscription) {
        TypeException::estChaineDeCaracteres($sDateInscription);

        $this->sDateInscription = $sDateInscription;
    }

    /**
     * Set la langue de l'utilisateur
     *
     * @param $sLangue
     *
     * @throws TypeException
     */
    public function setsLangue($sLangue) {
        TypeException::estChaineDeCaracteres($sLangue);

        $this->sLangue = $sLangue;
    }

    /**
     * Set le thème de la page de l'utilisateur
     *
     * @param $sTheme
     *
     * @throws TypeException
     */
    public function setsTheme($sTheme) {
        TypeException::estChaineDeCaracteres($sTheme);

        $this->sTheme = $sTheme;
    }

    /**
     * Set le moteur de recherche de l'utilisateur
     *
     * @param $sMoteurRecherche
     *
     * @throws TypeException
     */
    public function setsMoteurRecherche($sMoteurRecherche) {
        TypeException::estChaineDeCaracteres($sMoteurRecherche);

        $this->sMoteurRecherche = $sMoteurRecherche;
    }


    /**
     * Set les sources d'actualités de l'utilisateur
     *
     * @param $sSources
     *
     * @throws TypeException
     */
    public function setsSources($sSources) {
        TypeException::estChaineDeCaracteres($sSources);

        $this->sSources = $sSources;
    }

    /* =============================================================================================== */

    /**
     * Get l'id de l'utilisateur
     * @return mixed
     */
    public function getidUtilisateur() {
        return $this->idUtilisateur;
    }

    /**
     * Get le nom de famille de l'utilisateur
     * @return mixed
     */
    public function getsNom() {
        return $this->sNom;
    }

    /**
     * Get le prénom de l'utilisateur
     * @return mixed
     */
    public function getsPrenom() {
        return $this->sPrenom;
    }

    /**
     * Get le courriel de l'utilisateur
     * @return mixed
     */
    public function getsCourriel() {
        return $this->sCourriel;
    }

    /**
     * Get le mot de passe de l'utilisateur
     * @return mixed
     */
    public function getsMotDePasse() {
        return $this->sMotDePasse;
    }

    /**
     * Get l'avatar de l'utilisateur
     * @return mixed
     */
    public function getsAvatar() {
        return $this->sAvatar;
    }

    /**
     * Get la date d'inscription de l'utilisateur
     * @return mixed
     */
    public function getsDateInscription() {
        return $this->sDateInscription;
    }

    /**
     * Get la langue de l'utilisateur
     * @return mixed
     */
    public function getsLangue() {
        return $this->sLangue;
    }

    /**
     * Get le thème de l'utilisateur
     * @return mixed
     */
    public function getsTheme() {
        return $this->sTheme;
    }

    /**
     * Get le moteur de recherche de l'utilisateur
     * @return mixed
     */
    public function getsMoteurRecherche() {
        return $this->sMoteurRecherche;
    }

    /**
     * Get la sources d'actualités de l'utilisateur
     * @return mixed
     */
    public function getsSources() {
        return $this->sSources;
    }


    /* =============================================================================================== */

    /**
     * Utilisateur constructor.
     *
     * @param int $idUtilisateur
     * @param string $sNom
     * @param string $sPrenom
     * @param string $sCourriel
     * @param string $sMotDePasse
     * @param string $sAvatar
     * @param string $sDateInscription
     *
     * @throws TypeException
     */
    public function __construct($idUtilisateur = 1, $sNom = "", $sPrenom = "", $sCourriel = "", $sMotDePasse = "", $sAvatar = "", $sDateInscription = "", $sLangue = "fr", $sTheme = "auto", $sMoteurRecherche = "google", $sSources = "google") {
        $this->setidUtilisateur($idUtilisateur);
        $this->setsNom($sNom);
        $this->setsPrenom($sPrenom);
        $this->setsCourriel($sCourriel);
        $this->setsMotDePasse($sMotDePasse);
        $this->setsAvatar($sAvatar);
        $this->setsDateInscription($sDateInscription);
        $this->setsLangue($sLangue);
        $this->setsTheme($sTheme);
        $this->setsMoteurRecherche($sMoteurRecherche);
        $this->setsSources($sSources);
    }

    /* =============================================================================================== */

    /**
     * Ajouter un utilisateur dans la BDD
     * @return bool|int
     */
    public function ajouter() {
        //Se connecter à la base de données
        $oPDOLib = new PDOLib();
        //Réaliser la requête
        $sRequete = "INSERT INTO utilisateur
			(sNom, sPrenom, sCourriel, sMotDePasse, sAvatar, sDateInscription, sLangue, sTheme, sMoteurRecherche, sSources)
			VALUES(:sNom, :sPrenom, :sCourriel, :sMotDePasse, :sAvatar, :sDateInscription, :sLangue, :sTheme, :sMoteurRecherche, :sSources)";

        //Préparer la requête
        $oPDOStatement = $oPDOLib->getoPDO()->prepare($sRequete);

        //Lier les paramètres aux valeurs
        $oPDOStatement->bindValue(":sNom", $this->getsNom(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sPrenom", $this->getsPrenom(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sCourriel", $this->getsCourriel(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sMotDePasse", $this->getsMotDePasse(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sAvatar", $this->getsAvatar(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sDateInscription", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sLangue", $this->getsLangue(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sTheme", $this->getsTheme(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sMoteurRecherche", $this->getsMoteurRecherche(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sSources", $this->getsSources(), PDO::PARAM_STR);

        //Exécuter la requête
        $b = $oPDOStatement->execute();

        //Si la requête a bien été exécutée
        if ($b == true) {

            return (int)$oPDOLib->getoPDO()->lastInsertId();
        }
        $oPDOLib->fermerLaConnexion();
        return false;
    }


    /**
     * Modifier un utilisateur dans la BDD
     * @return bool|int
     */
    public function modifier() {
        //Se connecter à la base de données
        $oPDOLib = new PDOLib();
        //Réaliser la requête
        $sRequete = "
			UPDATE utilisateur
			SET sNom= :sNom, sPrenom= :sPrenom, sCourriel= :sCourriel, sMotDePasse= :sMotDePasse, sAvatar= :sAvatar, sLangue = :sLangue, sTheme = :sTheme, sMoteurRecherche = :sMoteurRecherche, sSources = :sSources
			WHERE idUtilisateur= :idUtilisateur";

        //Préparer la requête
        $oPDOStatement = $oPDOLib->getoPDO()->prepare($sRequete);

        //Lier les paramètres aux valeurs
        $oPDOStatement->bindValue(":sNom", $this->getsNom(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sPrenom", $this->getsPrenom(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sCourriel", $this->getsCourriel(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sMotDePasse", $this->getsMotDePasse(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sAvatar", $this->getsAvatar(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sLangue", $this->getsLangue(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sTheme", $this->getsTheme(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sMoteurRecherche", $this->getsMoteurRecherche(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":sSources", $this->getsSources(), PDO::PARAM_STR);
        $oPDOStatement->bindValue(":idUtilisateur", $this->getidUtilisateur(), PDO::PARAM_INT);

        //Exécuter la requête
        $b = $oPDOStatement->execute();

        //Si la requête a bien été exécutée
        if ($b == true) {
            $oPDOLib->fermerLaConnexion();
            return (int)$oPDOStatement->rowCount();
        }
        $oPDOLib->fermerLaConnexion();
        return false;
    }

    /**
     * Supprimer un utilisateur de la BDD
     * @return bool|int
     */
    public function supprimer() {
        //Se connecter à la base de données
        $oPDOLib = new PDOLib();
        //Réaliser la requête
        $sRequete = "
			DELETE FROM utilisateur
			WHERE idUtilisateur= :idUtilisateur";


        //Préparer la requête
        $oPDOStatement = $oPDOLib->getoPDO()->prepare($sRequete);

        //Lier les paramètres aux valeurs
        $oPDOStatement->bindValue(":idUtilisateur", $this->getidUtilisateur(), PDO::PARAM_INT);

        //Exécuter la requête
        $b = $oPDOStatement->execute();

        //Si la requête a bien été exécutée
        if ($b == true) {
            $oPDOLib->fermerLaConnexion();
            return (int)$oPDOStatement->rowCount();
        }
        $oPDOLib->fermerLaConnexion();
        return false;
    }

    /**
     * Rechercher un utilisateur dans la BDD
     * @return bool
     * @throws TypeException
     */
    public function rechercherUn() {
        //Se connecter à la base de données
        $oPDOLib = new PDOLib();
        //Réaliser la requête
        $sRequete = "
			SELECT * 
			FROM utilisateur
			WHERE idUtilisateur= :idUtilisateur";

        //Préparer la requête
        $oPDOStatement = $oPDOLib->getoPDO()->prepare($sRequete);

        //Lier les paramètres aux valeurs
        $oPDOStatement->bindValue(":idUtilisateur", $this->getidUtilisateur(), PDO::PARAM_INT);

        //Exécuter la requête
        $b = $oPDOStatement->execute();

        //var_dump($oPDOStatement->errorInfo());

        //Si la requête a bien été exécutée
        if ($b == true) {
            //Récupérer l'enregistrement (fetch)
            $aEnregs = $oPDOStatement->fetch(PDO::FETCH_ASSOC);
            if ($aEnregs !== false) {
                //Affecter les valeurs aux propriétés privées de l'objet
                $this->__construct(
                    $aEnregs['idUtilisateur'],
                    $aEnregs['sNom'],
                    $aEnregs['sPrenom'],
                    $aEnregs['sCourriel'],
                    "",
                    $aEnregs['sAvatar'],
                    $aEnregs['sDateInscription'],
                    $aEnregs['sLangue'],
                    $aEnregs['sTheme'],
                    $aEnregs['sMoteurRecherche'],
                    $aEnregs['sSources']
                );

                $oPDOLib->fermerLaConnexion();
                return true;
            }
        }
        $oPDOLib->fermerLaConnexion();
        return false;
    }

    /**
     * Rechercher tous les utilisateurs
     * @return array|bool
     * @throws TypeException
     */
    public function rechercherTous() {
        //Se connecter à la base de données
        $oPDOLib = new PDOLib();
        //Réaliser la requête
        $sRequete = "
			SELECT * 
			FROM utilisateur";

        //Préparer la requête
        $oPDOStatement = $oPDOLib->getoPDO()->prepare($sRequete);

        //Lier les paramètres aux valeurs
        //void

        //Exécuter la requête
        $b = $oPDOStatement->execute();

        //Si la requête a bien été exécutée
        if ($b == true) {
            //Récupérer le array
            $aEnregs = $oPDOStatement->fetchAll(PDO::FETCH_ASSOC);
            $iMax = count($aEnregs);
            $aoEnregs = array();
            if ($iMax > 0) {
                for ($iEnreg = 0; $iEnreg < $iMax; $iEnreg++) {
                    $aoEnregs[$iEnreg] = new Utilisateur(
                        $aEnregs[$iEnreg]['idUtilisateur'],
                        $aEnregs[$iEnreg]['sNom'],
                        $aEnregs[$iEnreg]['sPrenom'],
                        $aEnregs[$iEnreg]['sCourriel'],
                        "",
                        $aEnregs[$iEnreg]['sAvatar'],
                        $aEnregs[$iEnreg]['sDateInscription'],
                        $aEnregs[$iEnreg]['sLangue'],
                        $aEnregs[$iEnreg]['sTheme'],
                        $aEnregs[$iEnreg]['sMoteurRecherche'],
                        $aEnregs[$iEnreg]['sSources']
                    );
                }
                $oPDOLib->fermerLaConnexion();
                //Retourner le array d'objets de la classe Administrateur
                return $aoEnregs;
            }
        }
        $oPDOLib->fermerLaConnexion();
        return false;
    } // fin ()
} // fin classe
