<?php
/*****************************
 * Connecting to the database
 ****************************/
$db = new mysqli("localhost", "root", "");
	
if ($conn->connect_error) 
{
	die("Error connecting to database: " . mysqli_connect_error());
}	
//select filmSale database	
$db->select_db("filmSale");