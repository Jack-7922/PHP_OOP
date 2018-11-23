<?php
//Создание супер класса
class SimpleHouse {
    public $model   = '';
    public $square  = 0;
    public $floors  = 0;
    public $colors  = "none";

//Создание контруктора класса
    function __construct($model, $square = 0, $floors = 1) {
        $this->model = $model;
        $this->square = $square;
        $this->floors = $floors;
    }

    function startModel() {
        echo "Start Model: {$this->model}\n";
    }

    function stopModel() {
        echo "Stop Model: {$this->model}\n";
        echo "_______________________\n";
    }

    function build() {
        echo "Build house: {$this->square}x{$this->floors}\n";
    }

    function paint() {
        echo "Paint color: {$this->color}\n";
    }
}

class SuperHouse extends SimpleHouse {
    public $fireplace = true;
    public $patio = true;

    function fire() {
        if ($this->fireplace) {
            echo "fueled fireplace\n";
        }
    }
}

class FabricHouse extends SimpleHouse {
// Перегрузка метода
    function build() {
        echo "Build. Fabric: {$this->square}x{$this->floors}\n";
    }
}

class SuperFabricHouse extends FabricHouse {
    function build() {
        echo "================================\n";
        // Вызов родительского метода
        echo parent::build();
        echo "================================\n";
    }
}

$simple = new Superhouse("300-200-20", 123, 345);
$simple->color = "green";
$simple->startModel();
$simple->paint();
$simple->build();
$simple->fire();
$simple->stopModel();

$home1 = new SimpleHouse("100-20-50", 120, 20);
$home1->color = "red";
$home1->startModel();
$home1->paint();
$home1->build();
$home1->stopModel();

$fabric = new FabricHouse("300-200-20", 123, 345);
$fabric->color = "green";
$fabric->startModel();
$fabric->paint();
$fabric->build();
$fabric->stopModel();

$superfabric = new SuperFabricHouse("300-200-20", 123, 345);
$superfabric->color = "green";
$superfabric->startModel();
$superfabric->paint();
$superfabric->build();
$superfabric->stopModel();


