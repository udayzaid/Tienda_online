<?php


//{Global variables accessible even by functions}
	$GLOBALS["dbhost"] = "localhost"; // DATABASE HOST DNS/IP
	$GLOBALS["dbname"] = "ghoset"; // DATABASE NAME
	$GLOBALS["dbuser"] = "gohset";      // DATABASE USERNAME
	$GLOBALS["dbpass"] = "setamercenary77";          // DATABASE PASSWORD
	
	
	try {
    $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
	die();
  }
	
	/**
		Start a new connection to database
	*/
	function conectar(){
		$conectar =  mysqli_connect($GLOBALS["dbhost"],$GLOBALS["dbuser"],$GLOBALS["dbpass"]); 
		if ( ! $conectar ) die ("Connection error1"); 
		mysqli_select_db($conectar,$GLOBALS["dbname"]) or die ("Connection error2");
		return $conectar; // Return our socket handle 
	}



?>