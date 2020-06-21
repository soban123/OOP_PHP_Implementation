<?php
class pi {
  public static $value=3.14159;
//   public function xStatic() {
//     return self::$value;
//   }
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo pi::$value;

$x = new x();
echo '<br />';
echo $x->xStatic();
?>