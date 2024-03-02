<?php

include_once 'dbh.inc.php';

$id = $_GET["updateid"];

if (isset($_POST['submit'])) {

    $title = $_POST["title"];
    $price = $_POST["price"];
    $subcatagory = $_POST["subcategory"];
    $description = $_POST["description"];
    $catagory = $_POST["category"];
    $mainCategory = $_POST["mainCategory"];
    $meterialDetails = $_POST["meterialDetails"];

    
    $sql = "INSERT INTO `products` ( title, price, subCatagory, catagory, description, meterialDetails, mainCatagory)
            VALUES (?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE
            title = VALUES(title), price = VALUES(price), subcatagory = VALUES(subcatagory),
            catagory = VALUES(catagory), description = VALUES(description), meterialDetails = VALUES(meterialDetails),
            mainCatagory = VALUES(mainCatagory) ";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die("SQL statement failed");
    } else {
        mysqli_stmt_bind_param($stmt, "sssssss", $title, $price, $subcatagory, $catagory, $description, $meterialDetails, $mainCategory);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location:../html/allItems.php?Item Updated!!");
        exit();
    }
}
?>
