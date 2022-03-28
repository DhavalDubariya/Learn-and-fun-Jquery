<?php

namespace Html;

class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class & Object</title>
</head>

<body>
    <h1 style="text-align: center;">
        OOP (Object Oriented Programming)
    </h1>

    <?php

    echo "<h4>Class :- A class is a template for objects.</h4>";

    echo "<h4>Object :- object is an instance of class.</h4>";

    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function set_color($color)
        {
            $this->color = $color;
        }
        function set_weight($weight)
        {
            $this->weight = $weight;
        }
        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }
        function get_weight()
        {
            return $this->weight;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $dhaval = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    echo "<br>";
    $banana->set_color('red');
    $apple->set_weight('10kg');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";

    echo $apple->get_color();
    echo "<br>";
    echo $apple->get_weight();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $banana->get_color();

    // echo "<h4>\$this:-The $this keyword refers to the current object, and is only available inside methods.</h4>";

    echo "<h4>instanceof:- It is used to check if an object belonges to specific class.</h4>";
    class Fruits
    {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new Fruits();
    var_dump($apple instanceof Fruits);
    echo "<br>";
    var_dump($banana instanceof Fruits);

    echo "<h4>__construct:-If you create a __construct() function, PHP will automatically call this function when you create an object from a class.</h4>";

    class cars
    {
        public $name;
        public $color;

        function __construct($name, $color, $width, $height)
        {
            $this->name = $name;
            $this->color = $color;
            $this->width = $width;
            $this->height = $height;
        }
        function get_name()
        {
            return $this->name;
        }
        function get_color()
        {
            return $this->color;
        }
        function get_width()
        {
            return $this->width;
        }
        function get_height()
        {
            return $this->height;
        }
    }

    $cars = new cars("Verna", "white", "1,729 mm", "1475 mm");
    echo $cars->get_name();
    echo "<br>";
    echo $cars->get_color();
    echo "<br>";
    echo $cars->get_width();
    echo "<br>";
    echo $cars->get_height();

    echo "<h4>__destruct():-A destructor is called when the object is destructed or the script is stopped or exited.</h4>";

    // class Fruites
    // {
    //     // Properties
    //     var $name;
    //     var $color;

    //     // Methods
    //     function __construct($name, $color)
    //     {
    //         $this->name = $name;
    //         $this->color = $color;
    //     }
    //     function __destruct()
    //     {
    //         echo "The fruit is {$this->name} and the color is {$this->color}.";
    //     }
    // }

    // $apple = new Fruites("Apple", "red");
    // 
    ?>


    <h4>Access Modifiers():-Properties and methods can have access modifiers which control where they can be accessed.</h4>
    <?php
    class bike
    {
        public $name;
        public $color;
        public $weight;

        function set_name($n)
        {  // a public function (default)
            $this->name = $n;
        }
        protected function set_color($n)
        { // a protected function
            $this->color = $n;
        }
        private function set_weight($n)
        { // a private function
            $this->weight = $n;
        }

        function get_name()
        {
            return $this->name;
        }
    }

    $mangos = new bike();
    $mangos->set_name('Mango'); // OK
    // $mangos->set_color('Yellow'); // ERROR
    // $mangos->set_weight('300'); // ERRORe
    echo $mangos->get_name(), "<br>";

    echo "<h4>Inheritance:-When a class derives from another class.</h4>";

    class bikes
    {
        public $name;
        public $color;
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro()
        {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    // Strawberry is inherited from Fruit
    class Strawberry extends bikes
    {
        public function message()
        {
            echo "{$this->name} :-Am I a fruit or a berry?<br>";
        }
    }
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();

    echo "<h4>Inheritance and the Protected Access Modifier.</h4>";

    class custom
    {

        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function get_mangoes()
        {
            return $this->name;
        }
    }

    class mangoes extends custom
    {
        public function hello()
        {
            echo "Hello From Inheritance {$this->name},<br>";
        }
    }

    $bat = new mangoes("mango", "yellow");
    echo $bat->hello(), "<br>";
    echo $bat->get_mangoes(), "<br>";

    class new_dhaval
    {
        public  $name;
        public  $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->last_name = $color;
        }

        public function return_function()
        {
            return $this->name;
        }
    }

    class inherited extends new_dhaval
    {
        public function inherited_one()
        {
            echo "Hello From Inherited {$this->last_name},<br>";
        }
    }

    $new_name = new inherited("Dhaval", "Dubariya");
    echo $new_name->inherited_one();

    echo "<h4>protected method:- </h4>";

    class protected_method
    {
        public $first_name;
        public $last_name;

        public function __construct($first_name, $last_name)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }

        protected function test_protected()
        {
            echo "{$this->first_name} is protected !!!!!!";
        }
    }

    class pro_method extends protected_method
    {
        public function __construct($first_name, $last_name, $Age)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->age = $Age;
        }
        public function test_pro_method()
        {
            echo "{$this->age} <br>";
            $this->test_protected();
        }
    }

    $test = new pro_method("Dhaval", "Dubariya", "21");
    echo $test->test_pro_method();

    // echo "Final Keyword";

    echo "<h4>Constants:-Constants cannot be changed once it is declared.</h4>";
    echo "<h4>Outside class:-</h4>";
    class Goodbye
    {
        const LEAVING_MESSAGE = "Hello From Inside";
        public function inside()
        {
            echo self::LEAVING_MESSAGE;
        }
    }

    echo Goodbye::LEAVING_MESSAGE;



    echo "<h4>Inside class:-</h4>";

    $goodbye = new Goodbye();
    echo $goodbye->inside();

    echo "<h4>Abstract Classes:-Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
    </h4>";

    // abstract class car
    // {
    //     public $name;
    //     public function __construct($name)
    //     {
    //         $this->name = $name;
    //     }
    //     abstract public function intro(): string;
    // }

    // class audi extends car
    // {
    //     public function intro(): string
    //     {
    //         return "Choose German quality! I'm an $this->name!";
    //     }
    // }

    // class volvo extends car
    // {
    //     public function intro(): string
    //     {
    //         return "Proud to be Swedish! I'm a $this->name!";
    //     }
    // }

    // class citroen extends car
    // {
    //     public function intro(): string
    //     {
    //         return "French extravagance! I'm a $this->name!";
    //     }
    // }

    // // Create objects from the child classes
    // $audi = new audi("Audi");
    // echo $audi->intro();
    // echo "<br>";

    // $volvo = new volvo("Volvo");
    // echo $volvo->intro();
    // echo "<br>";

    // $citroen = new citroen("Citroen");
    // echo $citroen->intro();

    abstract class car
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro();
    }

    class Audi extends car
    {
        public function intro()
        {
            return "{$this->name}";
        }
    }


    class volvo extends car
    {
        public function intro()
        {
            return "{$this->name}";
        }
    }

    $audi = new audi("Audi");
    echo $audi->intro(), "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();

    echo "<h4>Interfaces:-Interfaces allow you to specify what methods a class should implement.</h4>";

    interface parents_class
    {
        public function parents_class_function();
    }

    class child_class implements parents_class
    {
        public function parents_class_function()
        {
            echo "Hello Interfaces";
        }
    }

    $animal = new child_class();
    $animal->parents_class_function();

    echo "<h4>Interfaces Ex:-</h4>";

    interface parents_class_1
    {
        public function hello();
    }

    class child_1 implements parents_class_1
    {
        public function hello()
        {
            echo "Hello From Child 1 <br>";
        }
    }


    class child_2 implements parents_class_1
    {
        public function hello()
        {
            echo "Hello From Child 2  <br>";
        }
    }


    class child_3 implements parents_class_1
    {
        public function hello()
        {
            echo "Hello From Child 3  <br>";
        }
    }

    $child_1 = new child_1();
    $child_2 = new child_2();
    $child_3 = new child_3();

    $new_array = array($child_1, $child_2, $child_3);

    foreach ($new_array as $x) {
        $x->hello();
    }

    echo "<h4>Traits:-Traits are used to declare methods that can be used in multiple classes.</h4>";

    trait message_first
    {
        public function msg1()
        {
            echo "Message 1";
        }
    }

    trait message_sec
    {
        public function msg2()
        {
            echo "Message 2";
        }
    }

    class welcome
    {
        use message_first, message_sec;
    }

    $obj = new welcome();
    $obj->msg1();

    $obj1 = new welcome();
    $obj1->msg2();

    echo "<h4>Static Methods:-Static methods can be called directly - without creating an instance of the class first.</h4>";
    echo "Outside Function:-";

    class greeting
    {
        public static function welcome()
        {
            echo "Hello World!<br>";
        }
    }

    // Call static method
    greeting::welcome();

    echo "Inside Function:-";

    class greetings
    {
        public static function welcome()
        {
            echo "Hello World! Using self Function";
        }

        public function __construct()
        {
            self::welcome();
        }
    }

    new greetings();

    echo "<h4>Static Properties:-Static properties can be called directly - without creating an instance of a class.

    </h4>";

    class pi
    {
        public static $value = 3.14;
    }

    echo pi::$value;

    echo "<h4>namespace:-</h4>";
    $table->message();

    echo "<h4>iterable:-An iterable is any value which can be looped through with a foreach() loop.
    </h4>";
    function printIterable(iterable $myIterable)
    {
        foreach ($myIterable as $item) {
            echo $item;
        }
    }

    $arr = ["a", "b", "c"];
    printIterable($arr);



    ?>






</body>

</html>