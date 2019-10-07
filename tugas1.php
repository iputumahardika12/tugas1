<?php 
interface tossable
{
    public function toss();
}
//abstract class
abstract class ball
{
    private $brandName;
    public function __construct($brandName)
    {
        $this->brandName = $brandName;
    }      
    public function getBrandName()
    {
        return $this->brandName;
    }
    public function toss()
    {
        echo "nama tosser : ";
    }
    public function bounce()
    {
        echo "nama bouncer : ";
    }
}
class baseball extends ball
{
    public function __construct ($brandName)
    {
        $this->brandName = $brandName;
    }
    public function baseball()
    {
        echo "nama olahraga : baseball"."<br>";
        echo "nama brand : ".$this->brandName."<br>";
    }
    public function toss()
    {
        echo "nama tosser : pauline"."<br>";
    }
    public function bounce()
    {
        echo "nama bouncer : johnny"."<br>";
    }
}
class football extends ball
{
    public function __construct ($brandName)
    {
        $this->brandName = $brandName;
    }
    public function football()
    {
        echo "<br>nama olahraga : football"."<br>";
        echo "nama brand : ".$this->brandName."<br>";
    }
    public function toss()
    {
        echo "nama tosser : johnny"."<br>";
    }
    public function bounce()
    {
        echo "nama bouncer : pauline"."<br>";
    }
}
class rock implements tossable
{
    public function toss()
    {
        echo "nama semua tosser : johhny, pauline"."<br>" ;
    }
}
$obj = new baseball("Bintang 7");
$obj->baseball();
$obj->toss();
$obj->bounce();
$obj = new football("cap emprit");
$obj->football();
$obj->toss();
$obj->bounce();