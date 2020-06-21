<?php
/**
 * CLass Fruit 
 * Parent class
 */
class Fruit {

    /**
     * @var string
     * 
     */
  public $name;

  /**
     * @var string
     * 
     */
  public $color;

     /**
  *  Contruct Fruit Object.
  *
  
  *
  * @param string $name  
  * @param string  $color 
  
  *
  * @return void
  */

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

     /**
  *  Print the properties.
  * It prints both properties name and color .

  * @return string
  */
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }

  /**
   * Print hello
   */
  protected function hello(){
      echo 'hello'; 
  }
  
}


/**
 * Class Strawbery 
 * this class is a child of Fruit class.
 * Strawberry is inherited from Fruit
 */
class Strawberry extends Fruit {

  /**
   * Print a statement
   * then call parent function.
   * @return void 
   */

  public function message() {
    echo "Am I a fruit or a berry? <br /> ";
    $this->hello() ;
     echo ' </br>';
  }
}
echo 'Inheritance </br>';
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
// $strawberry->hello(); // Give Error Because of Proteted Funtion 



?>