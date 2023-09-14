<?php
class Car{
    protected $model;

    public function setModel($model)
    {
        $this -> model = $model;
    }
}

class SportsCar extends Car {
    public function hello()
    {
        return "beep! I am a <i>" . $this->model. "</i><br />";
    }
}
$sportCar1 = new SportsCar();
$sportCar1->setModel('Mercedes Benz');
echo $sportCar1->hello();
?>
