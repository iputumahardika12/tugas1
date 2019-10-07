<?php 
interface plumber
{
	public function unplugDrain();
}
interface electrician
{
	public function changeBulb();
}
abstract class human
{
	public function human()
	{
		echo "nama : junaedi"."<br>";
	}
	public function toString()
	{
		echo "saya nggak tau toString() itu apa"."<br>";
	}
}
class handyPerson extends human implements electrician, plumber
{
	public function handyPerson()
	{
		echo "nama handy person : maemunah"."<br>";
	}
	public function changeBulb()
	{
		echo "penggantian bohlam : kemarin"."<br>";
	}
	public function unplugDrain()
	{
		echo "drain dicabut : tadi"."<br>";
	}
	public function toString()
	{
		echo "saya nggak tau toString() itu apa"."<br>";
	}
}
class industrialPlumber extends human implements plumber, electrician
{
	public function industrialPlumber()
	{
		echo "saya nggak industrialPlumber() itu apa"."<br>";
	}
	public function unplugDrain()
	{
		echo "drain dicabut : 3 hari yang lalu"."<br>";
	}
}
class nobodySpecial extends human implements plumber, electrician
{
	public function nobodySpecial()
	{
		echo "siapakah nobodySpecial itu?"."<br>";
	}
	public function changeBulb()
	{
		echo "pemasangan bohlam : sudah lama"."<br>";
	}
	public function unplugDrain()
	{
		echo "pemasangan bohlam : sudah lama"."<br>";
	}
	public function toString()
	{
		echo "saya nggak tau toString() itu apa"."<br>";
	}
}
 ?>