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
        
        $prod = addProduct();
        
        $my_Insert_Statement->bindParam(':productName', $prod['productName']);
$my_Insert_Statement->bindParam(':inventory', $prod['inventory']);
    ?>
    <h1>Add a Product</h1>
    <form action="index.php" method="post">
        <input type="text" name='pName' value=<?=isset($prod['productName']) ? $prod['productName'] : ''?>>
        <input type="text" name='pInventory' value=<?= isset($prod['inventory']) ? $prod['inventroy'] : ''?>>

        <input type="hidden" name='pID' value=<?=isset($prod['prodId'])?>>
        <input type="submit" value="Save Changes">

    </form>
</body>
</html>