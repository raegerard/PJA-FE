<?php
//for mysql connection
if(!@mysql_connect("localhost","root",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!@mysql_select_db("pja_db"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

//set connection variables
//for mysqli connection
$host = "localhost";
$db_name = "pja_db";
$username = "root";
$password = "";
 
//connect to mysql server
$mysqli = new mysqli($host, $username, $password, $db_name);
 
//check if any connection error was encountered
if(mysqli_connect_errno()) {
    echo "Error: Could not connect to database.";
    exit;
}

?>