<?php
    if(isset($_POST["submit"])){
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["email"];
        $tele = $_POST["tele"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $district = $_POST["district"];
        $post = $_POST["post"];
        $ctype = $_POST["ctype"];
        $cardname =$_POST["cardname"];
        $cardnumber =$_POST["cardnumber"];
        $expmonth =$_POST["expmonth"];
        $cvv =$_POST["cvv"];


        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        // if(emptyInputcheckout($fname, $lname,$email,$tele,$address,$city,$district,$post,$ctype,$cardname,$cardnumber,$expmonth,$cvv)!==false){
        //     header("Location: ../html/checkout.php?error=Please Fill all the fields");
        //     exit();
        // }
        adddetails($conn, $fname, $lname,$email,$tele,$address,$city,$district,$post,$ctype,$cardname,$cardnumber,$expmonth,$cvv);


    }
?>