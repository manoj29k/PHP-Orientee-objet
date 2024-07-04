<?php

class Renault extends Vehicule
{
    /**
     * @var string
     */
    private string $carburant;

    public function carburant(): string
    {
        return "diesel";
    }

    public function nbTest(): int
    {
        return $this->nbTest + 30;
    }
}