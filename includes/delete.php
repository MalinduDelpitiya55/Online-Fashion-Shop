<?php

    include_once 'dbh.inc.php';
    if(isset($_GET['deleteid'])){
            $id=$_GET['deleteid'];
        echo $id;
            $sql="delete from `products` where producID=$id";
            $result=mysqli_query($conn, $sql);
            if($result){
                header('location:../html/allItems.php?error=Delete Successful ');
            }
            else{
                die("Connection failed : " .mysqli_connect_error());
            }

    }

?>