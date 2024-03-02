<?php
session_start();
if(isset($_SESSION['userid'])) {
    $id=$_GET["producID"];
    if (!isset($_POST['size'])) {
        header("Location:../html/oneItem.php?error=Please%20select%20Size&id=$id");
    }
    require_once '../includes/dbh.inc.php';
    if(isset($_POST["addcart"])){
        $size=$_POST["size"];
        $qty=$_POST["qty"];
        $name=$_SESSION["userid"];
       $sql= "INSERT INTO `cartdetails`( `id`, `producID`,size,qty) VALUES (?,?,?,?);";
       $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../html/LoginpPage.php?error=Please Contact your administrator");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sssi",$name,$id ,$size,$qty);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        $conn->close();
        header("Location:../html/home.php?error=Item Added to cart Successfully");
        exit();
        
    }
}else {
    // User is not logged in, you may redirect them to the login page
    header("Location: LoginPage.php?error=Please Login & add your items to cart ");
    exit();
}



?>