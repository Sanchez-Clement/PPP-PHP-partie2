<?php
/**
 *
 */
abstract class Personne
{
    protected $Nom;
    protected $Prenom;
    public function __construct($nom, $prenom)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    public function getNom()
    {
        return $this->Nom;
    }
    public function getPrenom()
    {
        return $this->Prenom;
    }
    public function setNom($nom)
    {
        $this->Nom=$nom;
    }
    public function setPrenom($prenom)
    {
        $this->Prenom=$prenom;
    }
}
