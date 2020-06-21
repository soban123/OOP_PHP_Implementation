<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo 'OBJECTS AND CLASS <br /> ';
var_dump( '1.Apple is a class of Fruit ?? ==>'.   $apple instanceof Fruit);
echo "<br>";
echo '2.1st obj name ==> ' .  $apple->get_name();
echo "<br>";
echo '3.1st obj name ==> '.  $banana->get_name();


class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
      }
  }
  
  echo  '<br />  Const ==>  ' . Goodbye::LEAVING_MESSAGE;
  $goodbye = new Goodbye();
  echo '<br /> self Leaving message==>' ;
  echo  $goodbye->byebye() ;  
?>