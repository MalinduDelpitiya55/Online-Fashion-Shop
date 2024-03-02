<?php
session_start();
if($_SESSION['role']=='admin'){


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <!-- <link rel="stylesheet" href="../css/Adminoneitemstyle.css" />  -->
    <link rel="stylesheet" href="../css/Adminoneitemstyle1.css" />
  </head>

  <body>
    <h2 class="head1">View All Customer Details </h2>
    <!-- item -->
    <section>
      <div class="All-container">
        <Button class="btn-additem"><a href="adminpanel.html">Back </a></Button>
        <Button class="btn-additem"><a href="adminItem.php">Add Item</a></Button>

        <table border=1 class="table" width=100%>
            
                <tr>
                    <th >Register ID</th>
                    <th >User Name</th>
                    <th >User Email</th>
                    <th >Full Name</th>
                    <th >Birth Day</th>
                    <th >Gender</th>
                    <th >Phone Number</th>
                    <th >Address</th>
                    
                   
                  
              </tr>

                
                   <?php 
                        require_once '../includes/dbh.inc.php';
                        $sql="SELECT * FROM userlogin ORDER BY id DESC LIMIT 20;";
                        $result=mysqli_query($conn, $sql);
                        if($result){
                          while($row=mysqli_fetch_assoc($result)){
                              $regID=$row['id'];
                              $userName=$row['userName'];
                              $userEmail=$row['userEmail'];
                              $fullName=$row['fullName'];
                              $birthday=$row['birthday'];
                              $gender=$row['gender'];
                              $phoneNumber=$row['phoneNumber'];
                              $address=$row['address'];
                             
                              

                              echo'
                              <tr>
                                    <th >'.$regID.'</th>
                                    <th >'.$userName.'</th>
                                    <th >'.$userEmail.'</th>
                                    <th >'.$fullName.'</th>
                                    <th >'.$birthday.'</th>
                                    <th >'.$gender.'</th>
                                    <th >'.$phoneNumber.'</th>
                                    <th >'.$address.'</th>
                                   
                              </tr> ';
                              
                          }  
                              
                              
                          
                        }

                    ?>
                    
                    
           
            
        </table>


      </div>
    </section>

    <p></p>

    <!-- item -->
  </body>
</html>
<?php
}
else{
  header("Location: LoginPage.php?error=Authomtication Error. Your Accessing credentials");
    exit();
}
?>