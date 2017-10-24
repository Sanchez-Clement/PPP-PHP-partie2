<?php
/**
 *
 */
abstract class Vehicule
{
    protected $Immatriculation;
    protected $Color;
    public function __construct($Immatriculation, $Color)
    {
        $this->setImmat($Immatriculation);
        $this->setColor($Color);
    }

    public function getImmat()
    {
        return $this->Immatriculation;
    }
    public function getColor()
    {
        return $this->Color;
    }
    public function setImmat($Immatriculation)
    {
        $this->Immatriculation=$Immatriculation;
    }
    public function setColor($Color)
    {
        $this->Color=$Color;
    }
}
