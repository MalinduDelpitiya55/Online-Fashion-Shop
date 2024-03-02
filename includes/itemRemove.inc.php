<?php

    include_once 'dbh.inc.php';
    if(isset($_GET['id'])){
        echo "Remove";
            $id=$_GET['id'];
        echo $id;
            $sql="delete from `cartdetails` where cartID=$id";
            $result=mysqli_query($conn, $sql);
            if($result){
                header('location:../html/cart.php?error=Remove Successful ');
            }
            else{
                die("Connection failed : " .mysqli_connect_error());
            }

    }

?>