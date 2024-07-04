<?php

class Peugeot extends Vehicule
{
    /**
     * @var string
     */
    private string $carburant;
    
    public function carburant(): string
    {
        return 'essence';
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 70;
    }
}