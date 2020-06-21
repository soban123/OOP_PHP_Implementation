<?php 

function calcNumMilesOnFullTank(array $models)
{
  foreach($models as $item)
  {
    echo $carModel = $item[0];
    echo " : ";
    echo $numberOfMiles = $item[1] * $item[2];
    echo "<br />";
   }
}

// calcNumMilesOnFullTank("Toyota");
$models = array(
    array('Toyota', 12, 44),
    array('BMW', 13, 41)
  );
   
  calcNumMilesOnFullTank($models);

  //Object type hinting

  class Car {
    protected $driver;
       
    // The constructor can only get Driver objects as arguments.
    public function __construct(Driver $driver)
    {
      $this -> driver = $driver;
    }

    public function get_data(){
        return $this->driver ;
    }
  }
   
   
  class Driver {}
   
   
  $driver1 = new Driver();
  $car1    = new Car($driver1);
  echo serialize($car1->get_data());


  //basic Data type hinting


  class bike {
    protected $model;
    protected $hasSunRoof;
    protected $numberOfDoors;
    protected $price;
  
    // string type hinting
    public function setModel(string $model)
    {
      $this->model = $model;
    }
  
    // boolean type hinting
    public function setHasSunRoof(bool $value)
    {
      $this->hasSunRoof = $value;
    }
  
    // integer type hinting
    public function setNumberOfDoors(int $value)
    {
      $this->numberOfDoors = $value;
    }
  
    // float type hinting
    public function setPrice(float $value)
    {
      $this->price = $value;
    }        
  }

?>