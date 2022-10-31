<?php
    include "model/database.php";
    $del = filter_input(INPUT_GET, 'del');
    if ($del){
        //$qry = "delete from products where prodId = $del";
        $qry = "update products set active = 0 where prodId = $del";
        $sql = $db->query($qry);

        //echo($qry);
    }
    $prodID = filter_input(INPUT_POST, 'pID');
    if ($prodID)
    {
        // save changes
        $pName = filter_input(INPUT_POST, 'pName');
        $pInventory = filter_input(INPUT_POST, 'pInventory');
        $sql = "update products set productName = '$pName', inventory = $pInventory where prodID = $prodID ";
        //echo($sql);
        $qry = $db->query($sql);
    }


    
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
    <?php
        // get all the products from the database
        $products = getProducts();
        //loop through the products array and display the name of the product    
        foreach($products as $product)
        {
            $prodID = $product['prodId'];        
            echo ("<a href='./?del=$prodID'>del</a> | <a href='edit.php?id=$prodID'>edit</a> $product[productName] >> $product[inventory]</br>");
        }
        echo("<a href='add.php'>add a product</a>");
    ?>
    
</body>
</html>