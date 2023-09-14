<?php 
class Car{
    public function hello(){
        return  "beep";
    }
}

class SportsCar extends Car{
    public function hello()
    {
        return "Hallo";
    }
}

$sportCar1 = new SportsCar();

echo $sportCar1 -> hello();