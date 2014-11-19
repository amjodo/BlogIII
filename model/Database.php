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
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
		//established connection

		//referencing correct varaiable
		//checks if there is an error with the connection
	    if ($this->connection->connect_error) {
			die("<p>Error:" . $this->connection->connect_error). "</p>";
		}
	}
//close connection that was opened
	public function closeConnection(){
		//checck wether or not we've opened connection, if so it can be closed
		//checks if variable has been set
		if(isset($this->connection)){
			$this->connection->close();
		}
	}

	public function query($string){

	}
}