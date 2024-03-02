<?php
    if(isset($_POST["add_item"])){
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
       
        $subcatagory =strtolower($subcatagory);
        $catagory =strtolower($catagory);
        $mainCategory =strtolower($mainCategory);



        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputLogin($title, $price,$image1,$image2,$image3,$mainCategory,$catagory,$subcatagory,$description,$meterialDetails)!==false){
            header("Location: ../html/adminItem.php?error=Please Fill all the fields");
            exit();
        }
        addItem($conn, $title,$price,$image1,$image2,$image3,$mainCategory,$catagory,$subcatagory,$description,$meterialDetails);


    }
?>