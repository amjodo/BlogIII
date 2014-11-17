<?php
//creating personal object, going to be able to call object
//ectablishing connection, easier to read code
class Database{
	//creating variables and functions
	//setting visibily, cant acess outside of file
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
//global variables, able to be acessed throughout program
	//cut down lines of code
	//public so it can be acessed anywhere
	//anytime we call on it it will create object
	//info ends up in construct
	//this gives acess to all global variables
	//local variables disappear once function is done running
	//construct allows to build objects of type database
	//it uses info in these clases then able to use these objects
	public function __construct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
//no longer call code over and over again, it is present here
	//call on the functionn and it will preform code
	//opening connection & closing connection
	//every time pass a query call a string
	public function openConnection(){

	}

	public function closeConnection(){

	}

	public function query($string){

	}
}