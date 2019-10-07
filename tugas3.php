<?php 
interface payable
{
	public function getPaymentAmount();
}
abstract class employee implements payable
{
	private $firstName;
	private $lastName;
	private $socialSecurityNumber;
	public function __construct($firstName, $lastName, $socialSecurityNumber)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->socialSecurityNumber = $socialSecurityNumber;
	}
}
class commissionEmployee extends employee
{
	private $grossSales;
	private $commissionRate;
	public function __construct($grossSales, $commissionRate)
	{
		$this->grossSales = $grossSales;
		$this->commissionRate = $commissionRate;
	}
}
class hourlyEmployee extends employee
{
	private $wage;
	private $hours;
	public function __construct($wage, $hours)
	{
		$this->wage = $wage;
		$this->hours = $hours;
	}
}
class salariedEmployee extends employee
{
	private $weeklySalary;
	public function __construct($weeklySalary)
	{
		$this->weeklySalary = $weeklySalary;
	}
}
class basePlusCommEmployee extends commissionEmployee
{
	private $baseSalary;
	public function __construct($baseSalary)
	{
		$this->baseSalary = $baseSalary;
	}
}
class invoice implements payable
{
	private $partNumber;
	private $partDescription;
	private $quantity;
	private $pricePerItem;
	public function __construct($partNumber, $partDescription, $quantity, $pricePerItem)
	{
		$this->partNumber = $partNumber;
		$this->partDescription = $partDescription;
		$this->quantity = $quantity;
		$this->pricePerItem = $pricePerItem;
	}
}
 ?>
