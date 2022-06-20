<?php
include('./functions/queries.php');

// Static user id for testing purposes
$id = 1;

$product_s = getProductWithS();
$action_genre = getGenreAction();
$ages = getCustomerAge();
$purchases = getCustomerPurchase($id);
// var_dump($action_genre); die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- List all purchases by a single user -->
    <p><span><small>Total film purchase: </small></span> <strong></strong><?php $purchases[0]["SUM(quantity)"] ; ?> </p>

    <!-- List all products ending with 's' -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($product_s as $product): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $product['product_name']; ?></td>
            </tr>
            <?php $i++; endforeach ?>
        </tbody>
    </table>

    <!-- List all products ending of genre 'action' -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($action_genre as $action): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $action['product_name']; ?></td>
            </tr>
            <?php $i++; endforeach ?>
        </tbody>
    </table>

    <!-- List all persons older than 50 years -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ages as $age): ?>
            <?php $i = 1; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $age['name']; ?></td>
            </tr>
            <?php $i++; endforeach ?>
        </tbody>
    </table>
</body>

</html>