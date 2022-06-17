<?php
/**
 * Connecting to the database
 */
$db = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

/*************************************************************
 * List the total numbers of films purchased by the customers
**************************************************************/


/*******************************************************
 * List all the products that end with the character 's'
 *******************************************************/
$data = "SELECT * FROM products WHERE product_name LIKE '%s'";
$query = mysqli_query($db, $data) or die("Error");


/******************************
 * List the total monthly sales
 ******************************/
$data = "SELECT year(order_date), month(order_date), count(sale) from sales group by year(order_date), month(order_date) order by year(order_date), month(order_date)";
$query = mysqli_query($db, $data) or die("Error");


/*********************************************
 * List all the films that have Genre 'Action'
 *********************************************/
$data = "SELECT * FROM products WHERE genre = 'action'";
$query = mysqli_query($db, $data) or die("Error");

if(mysqli_num_rows($query) > 0)
{
    $fetch_data = mysqli_fetch_assoc($query);
}
 

/**********************************************
 * List list the customers whose age is above 50
 **********************************************/
$age = "SELECT FLOOR(date_diff(DAY, @date_of_birth, @Now)/365.25)";
$data = "SELECT * FROM users WHERE $age > 50";
$query = mysqli_query($db, $data) or die("Error");

if(mysqli_num_rows($query) > 0)
{
    $fetch_data = mysqli_fetch_assoc($query);
}

?>