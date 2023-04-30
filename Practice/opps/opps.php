<?php
class student{
	public $course = "PHP";
	private $first_name;
	private $last_name;
	private $conn;
	public function setName($fname,$lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}
	public function __construct(){
		$this->conn = mysqli_connect();
	}
	public function __sleep(){
		mysql_close();
		return array('first_name','last_name');
	}
	public function __wakeup(){
		$this->conn = mysqli_connect();
		echo "This is WakeUp Method.";
	}
}
$obj = new student();
$obj->setName("Sushant","chaudhary");
$srl = serialize($obj);
$us = unserialize($srl);
echo "<pre>";
	print_r($us);
	?>