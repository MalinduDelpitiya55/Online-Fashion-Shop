 <?php
 session_start();
 if(isset($_SESSION["userid"])){
  $id=$_SESSION["userid"];
        require_once '../includes/dbh.inc.php';
        $sql="select * from userlogin where id=$id";
        $result=mysqli_query($conn, $sql);
        if($result){
          $row=mysqli_fetch_assoc($result);
                $name = $row["fullName"];
                $birthday = $row["birthday"];
                $gender = $row["gender"];
                $phoneNumber = $row["phoneNumber"];
                $address = $row["address"];
                $email = $row["userEmail"];
               
            echo  $name ;
            }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/profilestyle.css" />
  </head>
  <body>
    <div class="icon">
      <div id="logom">
        <img src="../images/logob 4.png" alt="black logo">     
       </div>

      <div class="lefticon">
        <nav>
          <a href="#" class="active">
            <i class="fa fa-user"></i>
          </a>
          <a href="#">
            <i class="fa fa-credit-card"></i>
          </a>
          <a href="#">
            <i class="fa fa-cog"></i>
          </a>
        </nav>
      </div>
      <form class="profile-detail">
        <div class="rightbox">
          <div class="profile">
           <h1>Personal Info <button class="editbtn"><a href="profileEdit.php?id=<?php echo $id?>">Edit</button></h1></a>
            <h2>Full Name</h2>
            <p><label><?php echo  $name ?></label></p>

            <h2>Birthday</h2>
            <p><label><?php echo  $birthday ?></label></p>
            
            <h2>Gender</h2>
            <p><label><?php echo  $gender ?></label></p>

            <h2>Phone Number</h2>
            <p><label><?php echo  $phoneNumber ?></label></p>

            <h2>Address</h2>
            <p><label><?php echo  $address ?></label></p>
            
            <h2>Email</h2>
            <p><label><?php echo  $email ?></label></p>
            
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
<?php
}
else{
  header("Location: LoginPage.php?error='Please Login'");
}
?>
