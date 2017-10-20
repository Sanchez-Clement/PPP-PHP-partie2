<?php

/**
 *
 */
class ChatManager
{
private $bdd;
  function __construct($bdd)
  {
  $this->setBdd($bdd);
  }

  public function setBdd($bdd)
  {
  $this->bdd=$bdd;
  }
  public function addChat(Chat $chat)
  {
    $reponse = $this->bdd->prepare('INSERT INTO Chat(nom,sexe,age,color) VALUES(:nom,:sexe,:age,:color)');
    $reponse->execute([
'nom' => $chat->getNom(),
'sexe' => $chat->getSexe(),
'age' => $chat->getAge(),
'color' => $chat->getColor()

    ]);



  }
  public function getListChat () {
    
    $reponse = $this->bdd->query('SELECT * from Chat');
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
      return $donnees;

  }
}
 ?>
