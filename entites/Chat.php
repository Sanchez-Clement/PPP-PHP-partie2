<?php
class Chat {
  protected $Nom;
  protected $Age;
  protected $Sexe;
  protected $Color;
  const MALE = "M";
  const FEMELLE = "F";
  const NOIRE = "noire";
  const BLANC = "blanc";

  public function __construct($nom,$age,$sexe,$color)
  {
$this->setNom($nom);
$this->setAge($age);
$this->setSexe($sexe);
$this->setColor($color);
  }
public function getNom()
{
  return $this->Nom;
}

public function getSexe()
{
  return $this->Sexe;
}

public function getAge()
{
  return $this->Age;
}

public function getColor()
{
  return $this->Color;
}
public function setNom($nom)
{
if (is_string($nom) && strlen($nom)<15) {
  $this->Nom = $nom;
}
}

public function setAge($age)
{
$age = int ($age);
if ($age > 0 && $age < 30) {
  $this->Age = $age;
}
}

public function setSexe($sexe)
{
if (in_array($sexe, [self::MALE,self::FEMELLE])) {
  $this->Sexe = $sexe;
}
}
public function setColor($color)
{
if (in_array($color, [self::NOIRE,self::BLANC])) {
  $this->Color = $color;
}
}

}

?>
