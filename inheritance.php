<?php
class Car{
    private $model;

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function hello()
    {
        return "beep! I am a <i>" . htmlspecialchars($this->model) . "</i><br />";
    }
}


class SportsCar extends Car{

}

$sportCar1 = new SportsCar();

$sportCar1->setModel('Mercedes Benz');

echo $sportCar1->hello();
?>