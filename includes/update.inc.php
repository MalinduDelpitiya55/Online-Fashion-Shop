<?php

if (isset($_POST['update_item'])) {
    $title = $_POST["title"];
    $price = $_POST["price"];
    $image1 = $_POST["image1"];
    $image2 = $_POST["image2"];
    $image3 = $_POST["image3"];
    $subcatagory = $_POST["subcategory"];
    $description = $_POST["description"];
    $catagory = $_POST["category"];
    $mainCategory = $_POST["mainCategory"];
    $meterialDetails = $_POST["meterialDetails"];

    $sql = "UPDATE `products` SET title='$title', price=$price, image1='$image1', image2='$image2', image3='$image3', subcatagory='$subcatagory', catagory='$catagory', description='$description', meterialDetails='$meterialDetails', mainCatagory='$mainCategory' WHERE producID=$id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Update successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>