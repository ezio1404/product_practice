<?php
include 'model/productModel.php';
$product = new Product();
$prod_row=$product->getAllProd();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div>
    <form action="controller/productController/addProd.php" method="post">
        <input type="text" name="prod_name" placeholder="prod_name">
        <input type="number" name="prod_price" placeholder="prod_price">
        <input type="submit" name="submit" value="submit">
    </form>
    </div>
    <div>
    <table>
        <thead>
            <th>ID</th>
            <th>name</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php
                foreach ($prod_row as $row) {
            ?>
            <tr>
                    <td><?php echo $row['prod_id'];?></td>
                    <td><?php echo $row['prod_name'];?></td>
                    <td><?php echo $row['prod_price'];?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>



    </div>
</body>
</html>