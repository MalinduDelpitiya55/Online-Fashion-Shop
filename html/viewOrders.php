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
    <h2 class="head1">All Items </h2>
    <!-- item -->
    <section>
      <div class="All-container">
        <Button class="btn-additem"><a href="adminpanel.php">Back </a></Button>
        <Button class="btn-additem"><a href="adminItem.php">Add Item</a></Button>

        <table border=1 class="table" width=100%>
            
                <tr>
                    <th >Order ID</th>
                    <th >User ID</th>
                    <th >Full Name</th>
                    <th >User Email</th>
                    <th >Address</th>
                    <th >City</th>
                    <th >District</th>
                    <th >Postal Code</th>
                    <th>Order Status</th>
                    
               
                  
              </tr>

                
                   <?php 
                        require_once '../includes/dbh.inc.php';
                        $sql="SELECT * FROM orderdetails ;";
                        $result=mysqli_query($conn, $sql);
                        if($result){
                          while($row=mysqli_fetch_assoc($result)){
                              $oderID=$row['oderID'];
                              $regID=$row['id'];
                              $email=$row['email'];
                              $fname=$row['fname'];
                              $lname=$row['lname'];
                              $address=$row['address'];
                              $city=$row['city'];
                              $district=$row['district'];
                              $phoneNumber=$row['tele'];
                              $postalcode=$row['post'];
                             
                              

                              echo'
                              <tr>
                                    <th >'.$oderID.'</th>
                                    <th >'.$regID.'</th>
                                    <th >'.$fname." ".$lname.'</th>
                                    <th >'.$email.'</th>
                                    <th >'.$address.'</th>
                                    <th >'.$city.'</th>
                                    <th >'.$district.'</th>
                                    <th >'.$postalcode.'</th>
                                    <th >"processing"</th>
                                  
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