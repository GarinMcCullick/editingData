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
    //addProduct() is a call back function to check if new values have been submitted from added page and if so adds to db.
    addProduct();
    //by putting a header for redirect after submit I can use the call back function in add.php instead of index.php because the form action info is submitted to add.php and then sent to db
    if (isset($_POST['submitForm'])) {
        header('Location: index.php');
    }
    ?>
    <h1>Add a Product</h1>
    <form action="" <?php  ?> method="post">
        <input type="text" name='p1Name'>
        <input type="text" name='p1Inventory'>

        <input type="hidden" name='pID'>
        <input type="submit" name='submitForm' value="Save Changes">

    </form>
</body>

</html>