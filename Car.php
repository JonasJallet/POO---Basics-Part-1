<?php

class Car
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;


// constructeur
    public function __construct(string $color, string $energy, int $nbSeats)
    {
        $this->color = $color;
        $this->energy = $energy;
        $this->nbSeats = $nbSeats;
    }

// forward brake start
    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
        public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
    }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function start(): string
    {
    $this->currentSpeed = 0;

    return "Start !";
    }


// get & set

    public function getColor(): string
        {
            return $this->color;
        }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
        {
            return $this->nbSeats;
        }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getNbWheels(): int
        {
            return $this->nbWheels;
        }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getEnergy(): string
        {
            return $this->energy;
        }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}