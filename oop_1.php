<?php 
class Person{
    private $name;
    private static $count=0;

    function __construct($_name){
        $this->name=$_name;
    }
    public function enter(){
        self::$count++;
        echo "Enter {$this->name} ".self::$count."<br>";
    }
    public static function getCount(){
        echo "There are ".self::$count." people in the house.";
    }
}
$young=new Person('Young');
$young->enter();

$lee=new Person('Lee');
$lee->enter();

$kim=new Person('Kim');
$kim->enter();

$park=new Person('Park');
$park->enter();

Person::getCount();
?>