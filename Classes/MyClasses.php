<?php
class Car
{
    public string $producer;
    public string $model;
    public float $volume;
    public string $carcase;
    private string $dateProduced;

    public function getName(): string
    {
        return $this->producer;
    }

    public function getVolume(): float
    {
        return $this->volume;
    }

    public function getDateProduced(): string
    {
        return $this->dateProduced;
    }
    public function __construct( string $producer, string $model,string $dateProduced,float $volume =2.5)
    {
        $this->producer = $producer;
        $this->model = $model;
        $this->volume = $volume;
        $this->dateProduced = $dateProduced;
    }

    public function setCarcase(string $carcase)
    {
        return $this->carcase = $carcase;
    }
}


class MotorCycle
{

}

$car1=new Car('Toyota','Camry',"2020-01-01");

//$car1->producer="Mercedes";
//$car1->model="CLS";
//$car1->volume=5.5;
//$car1->carcase="w164";
//$car1->dateProduced="2022-03-10";
//
//
//$car2=new Car();
//$car2->producer="BMW";
//$car2->model="m5";
//$car2->volume=5.0;
////$car2->carcase="i5";
////$car2->dateProduced="2021-03-10";

$car1->setCarcase('70');
print_r($car1);
//echo $car1->carcase. "\n";
echo $car1->getDateProduced();
//echo $car1->getName()."\n";
//echo $car2->getVolume();