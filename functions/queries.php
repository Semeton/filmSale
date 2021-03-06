<?php
include('config.php');

/*************************************************************
 * List the total numbers of films purchased by the customers
**************************************************************/
function getCustomerPurchase($id){
    global $db;
    $sql = "SELECT SUM(quantity) FROM orders WHERE user_id=$id";
    $total_query = mysqli_query($db, $sql) or die("Error");
    $total = mysqli_fetch_all($total_query, MYSQLI_ASSOC);
    return $total;
}


/*******************************************************
 * List all the products that end with the character 's'
 *******************************************************/
function getProductWithS()
{
	global $db;
    $sql = "SELECT * FROM products WHERE product_name LIKE '%s'";
    $s_query = mysqli_query($db, $sql) or die("Error");
    
    if(mysqli_num_rows($s_query) > 0)
    {
        $s_products = mysqli_fetch_all($s_query, MYSQLI_ASSOC);
        return $s_products;
    } else{
        echo "There are no products with ending with 's'";
    }
}


/******************************
 * List the total monthly sales
 ******************************/
function getMonthlySales()
{
    global $db;
    $sql = "SELECT year(order_date), month(order_date), count(sale) FROM sales 
            group by year(order_date), month(order_date) 
            order by year(order_date), month(order_date)";
    $sales_query = mysqli_query($db, $sql) or die("Error");
    return $sales_query;
}

/*********************************************
 * List all the films that have Genre 'Action'
 *********************************************/
function getGenreAction()
{
    global $db;
    $sql = "SELECT * FROM products WHERE genre_id = 
            (SELECT id FROM genre WHERE genre='Action')";
    $genre_query = mysqli_query($db, $sql) or die("Error");
    
    if(mysqli_num_rows($genre_query) > 0)
    {
        $genre_action = mysqli_fetch_all($genre_query, MYSQLI_ASSOC);
        return $genre_action;
    }else{
        echo "No movie of genre 'action'";
    }
}
 

/**********************************************
 * List list the customers whose age is above 50
 **********************************************/
function getCustomerAge()
{
    global $db;
    // $age = "SELECT FLOOR(date_diff(DAY, @date_of_birth, @Now)/365.25) FROM users";
    $sql = "SELECT * FROM users WHERE age > 50";
    $age_query = mysqli_query($db, $sql) or die("Error");
    
    if(mysqli_num_rows($age_query) > 0)
    {
        $fetch_age_data = mysqli_fetch_all($age_query, MYSQLI_ASSOC);
        return $fetch_age_data;
    }else{
        echo 'No user found';
    }
}

?>