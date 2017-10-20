<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <?php
/**
 *
 */
// class Clio
// {
//     protected $door ;
//     protected $color;
//
//     protected static $price = 12800;
//     const BLEU_NUIT = 213800058;
//     const JAUNE = 213800060;
//     const TROIS_PORTES = 3;
//     const CINQ_PORTES = 5;
//
//
//
//     public function __construct($color, $door)
//     {
//         $this->setColor($color);
//         $this->setDoor($door);
//     }
//
//     public function getDoor()
//     {
//         return $this->door;
//     }
//
//     public function getColor()
//     {
//         return $this->color;
//     }
//
//     public function getPrice()
//     {
//         return self::$price;
//     }
//
//     public function setPrice($price)
//     {
//       self::$price = $price;
//     }
//
//
//     public function setDoor($door)
//     {
//         if (in_array($door, [self::TROIS_PORTES,self::CINQ_PORTES])) {
//             $this->door = $door;
//         }
//     }
//     public function setColor($color)
//     {
//         if (in_array($color, [self::BLEU_NUIT, self::JAUNE])) {
//             $this->color = $color;
//         }
//     }
// }
//
// $Twingo = new Clio(Clio::JAUNE, 3);
//  echo $Twingo->getPrice();
// $Megane = new Clio(Clio::BLEU_NUIT,5);
// $Megane->setPrice(20000);
// echo $Twingo->getPrice();

function chargerClasse($classname)
{
  require "entites/" . $classname.'.php';

};
spl_autoload_register('chargerClasse');
require "modele/connexion_sql.php";
require "modele/ChatManager.php";


     ?>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
