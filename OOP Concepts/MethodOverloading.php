<?php

class Shape {

    const PI =3.14 ;

    public function __call( $name , $arguments ){
        echo $name . "  name </br>";
        echo serialize($arguments)  ;

    }

    public static function __callStatic($name , $arguments  ){
        echo $name . "  name </br>";
        echo serialize($arguments)  ;
    }

}

//Object Context
$circle = new Shape();
$circle->area(4,5);


//static Context
echo "</br>  Static Context";
Shape::aea(3,3);


?>