<?php
  // Author: 			Chadd Williams
  // File: 				connDB.php
  // Date:				March 18, 2013
  // Class:				CS 445	
  // Project: 		In Class PDO Examples
  // Description: create a connection

   # pdo_testdb_connect.php - function for connecting to the "test" database

function db_connect()
{
	$db = '';
	$host='';
	$port = '';
	$user = '';
	$password = '';

	$config = parse_ini_file("../db.ini", true);

	$db = $config['mariadb']['dbname'];
	$host = $config['mariadb']['host'];
	$port = $config['mariadb']['port'];
	$user = $config['mariadb']['user'];
	$password = $config['mariadb']['password'];

	$connectStr = 'mysql:host='. $host . ":" .$port . ";dbname=" . $db;
	$dbh = new PDO($connectStr, $user, $password);
	return $dbh;
}

 
function db_close (&$dbh)
{
	$dbh = NULL;
}
?>