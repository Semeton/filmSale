<?php
include('./functions/queries.php');

$product_s = getProductWithS();
$action_genre = getGenreAction();
// var_dump($action_genre); die();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body>
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
</body>

</html>