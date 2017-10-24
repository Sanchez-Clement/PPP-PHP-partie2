<?php


 ?>
<h1>Bus</h1>
 <ul>
   <li><?php echo $bus1->getImmat() ?></li>
   <li><?php echo $bus1->getColor() ?></li>
   <li>Nombre d'étages <?php echo $bus1->getEtages() ?></li>
 </ul>

 <h1>Voiture</h1>
 <ul>
   <li><?php echo $voiture1->getImmat() ?></li>
   <li><?php echo $voiture1->getColor() ?></li>
   <li>Nombre de portes <?php echo $voiture1->getPortes() ?></li>
 </ul>
<?php
$bus1->setEtages(1);
$voiture1->setPortes(2);

?>
<p>Le bus a maintenant <?php echo $bus1->getEtages() ?> étages</p>
<p>La voiture a maintenant <?php echo $voiture1->getPortes() ?> Portes</p>
