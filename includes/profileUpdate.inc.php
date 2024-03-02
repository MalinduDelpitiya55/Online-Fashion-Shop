<?php
 session_start();
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $birthday = $_POST["birthday"];
        $gender = $_POST["gender"];
        $phoneNumber = $_POST["phoneNumber"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        



        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        

        if(emptyInputProfile($name,$birthday,$gender,$phoneNumber,$address,$email)!==false){
            header("Location: ../html/profileEdit.php?error=emptyinput");
            exit();
        }
        updateUser($conn,$_SESSION["userid"],$name,$birthday,$gender,$phoneNumber,$address,$email);


    }
?>