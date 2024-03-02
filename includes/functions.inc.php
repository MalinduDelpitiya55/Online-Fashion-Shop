<?php
    function emptyInputSignup($username, $email, $pwd, $rpwd){
         $result = false;
        if(empty($username) || empty($email) || empty($pwd) || empty($rpwd)){
            $result = true;
        }
        return $result;
    }

    function invalidUid($username){
        $result = false;
        if(!preg_match('/^[a-zA-Z][a-zA-Z0-9]*[a-zA-Z0-9!@#$%^&*()_+-=<>?.,:;{}[\]\/\\]*[a-zA-Z0-9]$/',$username)){
            $result = true;
        }
        
        return $result;
    }

    function invalidEmail($email){
        $result = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        
        return $result;
    }


    function pwdMatch($pws , $rpwd){
        $result = false;
        if($pws !== $rpwd){
            $result = true;
        }
       
        return $result;
    }

    function uidExists($conn, $username, $email){
        $sql = "SELECT * FROM userlogin WHERE 	userName = ? OR userEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../html/Loginpage.php?error=Please Contact your administrator");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            return false;
        }

       

    }

    function createUser($conn, $username,$email,$pwd){
        $sql  = "INSERT INTO userlogin( userName, userEmail,	userPassword) VALUES (?,?,?) ;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../html/LoginpPage.php?error=Please Contact your administrator");
            exit();
        }

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../html/LoginPage.php?error=Account Created!!");
        exit();
    }


/////////////////////////// login

    function emptyInputLogin($username, $pwd){
        $result = false;
        if(empty($username) || empty($pwd)){
            $result = true;
        }
        
        return $result;
    }

    function loginUser($conn, $username, $pwd){
        $uidExists = uidExists($conn, $username, $username);
        if($uidExists === false){
            header("Location: ../html/LoginPage.php?error=wronglogin");
            exit();
        }
    
        $pwdHashed = $uidExists["userPassword"];
        $checkpwd = password_verify($pwd, $pwdHashed);
    
        if($checkpwd === false){
            header('Location: ../html/LoginPage.php?error=wronglogin');
            exit();
        }
        
        else if($checkpwd === true){
            session_start();
            $_SESSION["userid"] = $uidExists["id"];
            $_SESSION["username"] = $uidExists["userName"];
            $_SESSION["role"] = $uidExists["role"];
            $_SESSION["useremail"] = $uidExists["userEmail"];
            

            if(	$uidExists['role']=="admin"){
                header('Location:../html/adminpanel.php');  
            }
            else{
                header("Location: ../html/home.php");
            }
            exit();
        }
    }

    ////////////////////////item add
    
    function addItem($conn, $title,$price,$image1,$image2,$image3,$mainCatagory,$catagory,$subCatagory,$description,$meterialDetails){
        $sql = "INSERT INTO products(title, price, image1, image2, image3, mainCatagory,catagory,subCatagory,description, meterialDetails) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../html/LoginpPage.php?error=Please Contact your administrator");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sdssssssss", $title,$price,$image1,$image2,$image3,$mainCatagory,$catagory,$subCatagory,$description,$meterialDetails);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../html/allItems.php?error=Item Added Successfully");
        exit();
        
    }
 

/////////--------------profile update--------------------------------
   
function emptyInputProfile($name,$birthday,$gender,$phoneNumber,$address,$email){
         $result = false;
        if(empty($name) || empty($birthday) || empty($gender) || empty($phoneNumber) || empty($address) || empty($email)){
            $result = true;
        }
        return $result;
    }


function updateUser($conn, $id, $name, $birthday, $gender, $phoneNumber, $address, $email) {
    $sql = "INSERT INTO userlogin (id, fullName, birthday, gender, phoneNumber, address, userEmail)
            VALUES (?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE
            fullName = VALUES(fullName), birthday = VALUES(birthday), gender = VALUES(gender),
            phoneNumber = VALUES(phoneNumber), address = VALUES(address), userEmail = VALUES(userEmail)";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // Log the error instead of directly showing it to the user
        error_log("SQL Error: " . mysqli_error($conn));
        header("Location: ../html/LoginpPage.php?error=Please contact your administrator");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $id, $name, $birthday, $gender, $phoneNumber, $address, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../html/home.php?error=Successfully Updated");
    exit();
}



function emptyInputcheckout($fname, $lname,$email,$tele,$address,$city,$district,$post,$ctype,$cardname,$cardnumber,$expmonth,$cvv){
         $result = false;
        if(empty($fname) || empty($lname) || empty($email) || empty($tele) || empty($address) || empty($city) || empty($district) || empty($post) || empty($ctype) || empty($cardname) || empty($cardnumber) || empty($expmonth) || empty($cvv) ){
            $result = true;
        }
        return $result;
    }

   function addDetails($conn, $fname, $lname, $email, $tele, $address, $city, $district, $post, $ctype, $cardname, $cardnumber, $expmonth, $cvv)
{
    session_start();
    $id = $_SESSION["userid"];

    // Insert order details
    $sqlOrderDetails = "INSERT INTO orderdetails(id, fname, lname, email, tele, address, city, district, post, ctype, cardname, cardnumber, expmonth, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmtOrderDetails = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmtOrderDetails, $sqlOrderDetails)) {
        header("Location:../html/checkout.php?error=Please Contact your administrator");
        exit();
    } else {
        mysqli_stmt_bind_param($stmtOrderDetails, "ssssssssssssss", $id, $fname, $lname, $email, $tele, $address, $city, $district, $post, $ctype, $cardname, $cardnumber, $expmonth, $cvv);
        mysqli_stmt_execute($stmtOrderDetails);
        $lastInsertedId = mysqli_insert_id($conn);

        mysqli_stmt_close($stmtOrderDetails);
    }

    //get orderid



    // Insert purchase details
    $sqlCartDetails = "SELECT * FROM cartdetails WHERE id=?";
    $stmtCartDetails = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmtCartDetails, $sqlCartDetails)) {
        header("Location:../html/checkout.php?error=Please Contact your administrator");
        exit();
    } else {
        mysqli_stmt_bind_param($stmtCartDetails, "s", $id);
        mysqli_stmt_execute($stmtCartDetails);
        $result = mysqli_stmt_get_result($stmtCartDetails);

        while ($row = mysqli_fetch_assoc($result)) {
            $producID = $row["producID"];
            $size = $row["size"];
            $id = $row["id"];

            // Insert into purchasedetails
            $sqlPurchaseDetails = "INSERT INTO purchasedetails(oderID, producID,size, id) VALUES (?, ?, ?, ?)";
            $stmtPurchaseDetails = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmtPurchaseDetails, $sqlPurchaseDetails)) {
                header("Location:../html/checkout.php?error=Please Contact your administrator");
                exit();
            } else {
                mysqli_stmt_bind_param($stmtPurchaseDetails, "ssss", $lastInsertedId, $producID,$size, $id);
                mysqli_stmt_execute($stmtPurchaseDetails);
                mysqli_stmt_close($stmtPurchaseDetails);

                // Delete from cartdetails
                $sqlDeleteCart = "DELETE FROM cartdetails WHERE id=?";
                $stmtDeleteCart = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmtDeleteCart, $sqlDeleteCart)) {
                    header("Location:../html/checkout.php?error=Please Contact your administrator");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmtDeleteCart, "s", $id);
                    mysqli_stmt_execute($stmtDeleteCart);
                    mysqli_stmt_close($stmtDeleteCart);
                    header("Location:../html/home.php?error=Item Added Successfully");
                }
            }
        }
    }
    exit();
}

?>