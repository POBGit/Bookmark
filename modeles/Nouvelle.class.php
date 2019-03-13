<?php

// Classe où l'on retire les dernières nouvelles 
class Nouvelle
{

    private $sTitre;
    private $sLien;
    private $sSource;

    /* =============================================================================================== */

    public function setsTitre($sTitre)
    {
        TypeException::estChaineDeCaracteres($sTitre);

        $this->sTitre = $sTitre;
    }

    public function setsLien($sLien)
    {
        TypeException::estChaineDeCaracteres($sLien);

        $this->sLien = $sLien;
    }

    public function setsSource($sSource)
    {
        TypeException::estChaineDeCaracteres($sSource);

        $this->sSource = $sSource;
    }

    /* =============================================================================================== */

    public function getsTitre()
    {
        return $this->sTitre;
    }

    public function getsLien()
    {
        return $this->sLien;
    }

    public function getsSource()
    {
        return $this->sSource;
    }

    /* =============================================================================================== */

    public function __construct($sTitre = "", $sLien = "", $sSource = "")
    {
        $this->setsTitre($sTitre);
        $this->setsLien($sLien);
        $this->setsSource($sSource);
    }

    /* =============================================================================================== */

    /**
     * Rechercher des articles de l'actualité par requête (retour en JSON)
     * @param void
     * @return $aoNouvelles
     */
    public function rechercherActualite()
    {
        $xml = ("https://news.google.com/rss?topic=h&hl=fr-CA&gl=CA&ceid=CA:fr");

        $xmlDoc = new DOMDocument();
        $xmlDoc->load($xml);

        $x = $xmlDoc->getElementsByTagName('item');

        $aoNouvelles = array();

        for ($i = 0; $i < 5; $i++) {

            $sTitre = $x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
            $sLien = $x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
            $sSource = $x->item($i)->getElementsByTagName('source')->item(0)->childNodes->item(0)->nodeValue;

            $aoNouvelles[$i] = new Nouvelle($sTitre, $sLien, $sSource);
        }

        return $aoNouvelles;
    }
} // fin classe
