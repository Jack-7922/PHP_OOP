<?php
// class Pet{ 
//    public $name = 10;
//    public $type = "unknown";

//     /* Уничтожаем объект и выводим сообщение */

//    function __destruct() {
//        echo "Object deleted\n";
//    }
   
//     function __construct($name, $type) {
//         $this->name = $name;
//         $this->type = $type;
    
//     }
//     function say($word) {
//         echo $this->name, "say $word\n";
//         $this->drawLine();
//     }
    
//     function drawLine() {
//         echo "<hr>";
//     }
    
//     function methodName() {
//         echo "Вызван " .  __Method__;
//     }
// }

// $cat = new Pet("Murzik ", "Cat\n");
// $dog = new Pet("Bobik ", "Dog\n");
// echo $cat->say("Meow");
// echo $dog->say("Gav");