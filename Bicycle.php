<?php

class Bicycle
{
    private string $color;

    public int $currentSpeed;

    public int $nbSeats;

    public int $nbWheels;


// forward & brake 

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


    // get & set 

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
    return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }

    }

    public function __construct(string $color)
{
    $this->color = $color;
}

}