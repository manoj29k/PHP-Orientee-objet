<?php

abstract class Vehicule{
    /**
     * @var int
     */
    protected int $nbTest = 100;

    final function demarrer():string
    {
        return "Je suis démarré";
    }

    abstract public function carburant():string;


    public function nbTest():int
    {
        return $this->nbTest;
    }


}