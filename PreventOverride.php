<?php
class Car{
    final public function hello(){
        return "beep";
    }
}

class SportCar extends Car{
    public function hello()
    {
        return "Hallo";
    }
}


$sportCar1 = new SportsCar();

echo $sportCar1 -> hello();