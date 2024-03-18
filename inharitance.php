<?php
class A{
    function _destruct()
    {
        echo "NO more Today!";

    }
    function _construct()
    {
        echo "this task is start"."<br/>";
    }
    function Show(){
        echo "This is my Super class"."<br/>";

    }
    function _construct()
    {
        echo "this task is start"."<br/>";
    }
}
class B extends A{
    public $address;
    public $phone;
    function info(){
        echo "this is child class"."<br>"; 
    }
}
$b = new A();
$b->info();
$b->Show();
?>