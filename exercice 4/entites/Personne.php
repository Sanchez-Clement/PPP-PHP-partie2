<?php
/**
 *
 */
abstract class Personne
{
protected $Nom;
protected $Prenom;
  function __construct($nom,$prenom)
  {
  $this->setNom($nom);
  $this->setPrenom($prenom);
  }

function getNom() {
    return $this->Nom;
  }
function getPrenom() {
    return $this->Prenom;
  }
  function  setNom($nom) {
    $this->Nom=$nom;
  }
  function setPrenom($prenom) {
    $this->Prenom=$prenom;
  }
}

 ?>
