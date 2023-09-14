<?php

class Car {
    private $model;

    public function setModel($model) {
        $this->model = $model;
    }
    public function getModel(){
        return $this->model;
    }
}

class SportsCar extends Car {
    public function hello() {
        return "beep! I am a <i>" . $this->getModel(). "</i><br />";
    }
}

$sportsCar1 = new SportsCar();
$sportsCar1->setModel('Mercedes Benz');
echo $sportsCar1->hello();
?>
