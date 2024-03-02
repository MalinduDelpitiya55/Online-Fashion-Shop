 <?php 
        $id=$_GET["id"];
        require_once '../includes/dbh.inc.php';
        $sql="select * from userlogin where id=$id";
        $result=mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $name = $row["userName"];
                $name = $row["fullName"];
                $birthday = $row["birthday"];
                $gender = $row["gender"];
                $phoneNumber = $row["phoneNumber"];
                $address = $row["address"];
                $email = $row["userEmail"];
               
            }   
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
      <form class="profile-detail" action="../includes/profileUpdate.inc.php" method="post">
        <div class="rightbox">
          <div class="profile">
            <h1>Personal Info</h1>
            <h2>Full Name</h2>
            <label><input type="text" class="ebox" name="name" value="<?php echo  $name ?>"></label>

            <h2>Birthday</h2>
            <label><input type="date" class="ebox" name="birthday" value="<?php echo $birthday ?>"></label>
            
            <h2>Gender</h2>
            <label>
              <input type="radio" name="gender" value="Male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>> Male
              <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>> Female
            
            </label>

            <h2>Phone Number</h2>
            <label><input type="text" class="ebox" name="phoneNumber" value="<?php echo $phoneNumber ?>"></label>

            <h2>Address</h2>
            <label><input type="text" class="ebox" name="address" value="<?php echo $address ?>"></label>
            
            <h2>Email</h2>
            <label><input type="email" class="ebox" name="email" value="<?php echo $email ?>"></label>

            <button class="savebtn" name="submit">Save</button>
            
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
