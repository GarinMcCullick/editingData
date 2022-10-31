<?php
$dsn = "mysql:host=localhost;dbname=noveltyStore";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    //echo("connected");
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo ("<p>Error message: $error_message");
}


//selects all products from the database
// returns an array of product arrays
function getProducts()
{
    global $db;
    $sql = "select * from products where active = 1";
   
    $qry = $db->query($sql);
    $products = $qry->fetchAll();

    return $products;

}

// Parameter: productId
// queries database for that one product
// returns an array of that product
function getProduct($id) 
{
    global $db;
    $sql = "select * from products where prodId = $id";
    //echo($sql);
    $qry = $db->query($sql);
    $rs = $qry->fetch();
    return $rs;
}

function addProduct(){
    global $db;
    $sql = prepare("INSERT INTO products
    (productName, inventory) VALUES (:productName, :inventory)");
    $qry=$db->query($sql);
    $rs = $qry->fetch();
    return $rs;
}
?>