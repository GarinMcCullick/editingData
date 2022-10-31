<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "model/database.php";
        $id = filter_input(INPUT_GET, 'id');
        $prod = getProduct($id);
        print_r($prod);
    ?>
    <h1>Edit a Product</h1>
    <form action="index.php" method="post">
        <input type="text" name='pName' value=<?= $prod['productName']?>>
        <input type="text" name='pInventory' value=<?= $prod['inventory']?>>

        <input type="hidden" name='pID' value=<?= $prod['prodId']?>>
        <input type="submit" value="Save Changes">

    </form>
</body>
</html>