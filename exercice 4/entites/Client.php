<?php
/**
 *
 */
class Client extends Personne
{
    protected $adresse;
    public function __construct($nom, $prenom, $adresse)
    {
        parent::__construct($nom, $prenom);
        $this->setAdresse($adresse);
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getCoordonnees()
    {
        return ['nom'=>parent::getNom() ,
  'prenom'=>parent::getPrenom(),
  'adresse'=>  $this->getAdresse()];
    }
}
