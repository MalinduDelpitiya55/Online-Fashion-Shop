<?php

use LDAP\Result;

    include_once "../includes/dbh.inc.php";
    $id=$_GET["updateid"];
    $sql="SELECT * FROM `products` WHERE producID = $id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $producID = $row['producID'];
    $title = $row['title'];
    $price = $row['price'];
    $image1 = $row['image1']; // Assuming you have a single image field, change this accordingly
    $image2 = $row['image2']; // Assuming you have a single image field, change this accordingly
    $image3 = $row['image3']; // Assuming you have a single image field, change this accordingly
    $subcatagory = $row['subCatagory'];
    $catagory = $row['catagory'];
    $description = $row['description'];
    $meterialDetails = $row['meterialDetails'];
    $mainCategory = $row["mainCatagory"];

    if (isset($_POST['update'])) {
        $title = $_POST["title"];
        $price = $_POST["price"];
        $image1 = $_POST["image1"];
        $image2 = $_POST["image2"];
        $image3 = $_POST["image3"];
        $subcatagory = $_POST["subcategory"];
        $description = $_POST["description"];
        $catagory = $_POST["category"];
        $mainCategory = $_POST["mainCategory"];
        $meterialDetails =$_POST["meterialDetails"];
    
            $sql="update `products` set producID=$id, title=$title,price=$price, image=$image1,image2=$image2,image3=$image3,subCatagory=$subcatagory, catagory=$catagory,description=$description, meterialDetails=$meterialDetails,mainCategory=$mainCategory";
            $result=mysqli_query($conn,$sql);
            if ($result) {
                echo "Update successfull";
            } else {   
                echo "Error: ". $sql. "<br>". mysqli_error($conn);
            }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="../css/Adminoneitemstyle1.css" />
  </head>

  <body>
<form id="itemAdd" action="../includes/itemUpdate.inc.php" method="post">
  <div class="container flax">
          <div class="left">
            <div class="option flex">
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto1" name="image1" class="myfile" placeholder="Enter Price..."/><br />
              </div>
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto2" name="image2" class="myfile" /><br />
              </div>
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto3" name="image3" class="myfile" /><br />
              </div><center><button id="add_item" name="add_item"><a href="..\includes/itemUpdate.inc.php">update Iem</a></button></center>
            </div>
          </div>
          
          </form>