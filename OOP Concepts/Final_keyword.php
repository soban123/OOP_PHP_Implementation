<?php
// final
 class Fruit {
  // some code
  //fianl
  public function intro() {
    // some code
  }
}

// will result in error
class Strawberry extends Fruit {
  // some code
  public function intro() {
    // some code
    echo 'intro';
  }
}

echo $Strawberry->intro();
?>