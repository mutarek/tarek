<?php

class User{


public function __construct()
{
	$host ="localhost";
	$user ="root";
	$password="";
	$database ="users";
	$this->link = mysqli_connect($host,$user,$password,$database);
}


public function save_user($userdata)
{
	$name = $userdata['name'];
	$email = $userdata['email'];
	$password = $userdata['password'];
	$query = "INSERT INTO `allusers`(`name`, `email`, `password`,`number`) VALUES ('$name','$email','$password')";
	mysqli_query($this->link,$query);

	
}


public function getallUser()
{
	$query = "SELECT * FROM allusers";
	return mysqli_query($this->link,$query);
}

}

