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
                    <th >producID</th>
                    <th >title</th>
                    <th >price</th>
                    <th >image1</th>
                    <th >image2</th>
                    <th >image3</th>
                    <th >subcatagory</th>
                    <th >catagory</th>
                    <th >mainCatagory</th>
                    <th >description</th>
                    <th >meterialDetails</th>
                    <th >Oparations</th>
                  
                </tr>

                
                   <?php 
                        require_once '../includes/dbh.inc.php';
                        $sql="select * from products";
                        $result=mysqli_query($conn, $sql);
                        if($result){
                          while($row=mysqli_fetch_assoc($result)){
                              $producID=$row['producID'];
                              $title=$row['title'];
                              $price=$row['price'];
                              $image1=$row['image1'];
                              $image2=$row['image2'];
                              $image3=$row['image3'];
                              $subcatagory=$row['subCatagory'];
                              $catagory=$row['catagory'];
                              $description=$row['description'];
                              $meterialDetails=$row['meterialDetails'];
                              $mainCategory=$row['mainCatagory'];
                              

                              echo'
                              <tr>
                                    <th >'.$producID.'</th>
                                    <th >'.$title.'</th>
                                    <th >'.$price.'</th>
                                    <th >'.$image1.'</th>
                                    <th >'.$image2.'</th>
                                    <th >'.$image3.'</th>
                                    <th >'.$subcatagory.'</th>
                                    <th >'.$catagory.'</th>
                                    <th >'.$mainCategory.'</th>
                                    <th >'.$description.'</th>
                                    <th >'.$meterialDetails.'</th>
                                    
                                    <th ><Button name="update" class="btn"><a href="itemUpdate.php?updateid='.$producID.'">Update</a></Button>  <Button class="btn"><a href="../includes/delete.php?deleteid='.$producID.'">Delete</a></Button> </th>
                    
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