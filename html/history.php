
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?php
include_once 'header.php';
include_once 'catagoryList.php';
require_once '../includes/dbh.inc.php';

// Fetch only the necessary data


?>
    <style>
         .img1{
        
        border-radius: 10%;
        width: 125px;

        }
        table {
            border-collapse: collapse;
             text-align: center;
            border-style: solid;
        }
        #total{
            font-weight: bold;
            font-size: xx-large;
        }
        body{
            background-color: lightgray;
        }
        .no-log{
            font-weight: bold;
            font-size: 200%;
            color: purple;
        }
        
    </style>
</head>
<body>
    <div class="cartTab">
                            <center><h1 id="header">Order History</h1></center>
    <?php 
  if(!isset($_SESSION['userid'])) {
        echo '<label for="no-log" class="no-log">Please Log in.....</label>';
}
else {

echo '<table border="1">
    <tr>
        <th style="width:5%">Oder ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Size</th>
        <th >Date</th>
        <th >Price</th>
      
    </tr>'
    ?>
    <?php
            $id=$_SESSION["userid"];
            $sql = "SELECT products.title, products.image1, products.price, purchasedetails.size, purchasedetails.date, userlogin.userName
        FROM products
        JOIN purchasedetails ON products.producID = purchasedetails.producID
        JOIN userlogin ON userlogin.id = purchasedetails.id
        WHERE purchasedetails.id = $id";

            $result=mysqli_query($conn, $sql);
            if($result){
                $i=0;
                $totalAmount=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    
                
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><img class="img1" src="../images/item/<?php echo $row["image1"] ?>" alt="image not found"></td>
        <td><?php echo $row["title"] ?></td>
        <td><?php echo $row["size"] ?></td>
        <td><?php echo $row["date"] ?></td>
        <td>
            <div class="quantity">
                
           
                                <span class="itemCount"><?php echo $row["price"] ?></span>
                                
                
            </div>
        </td>
        
    </tr>
    <?php
}

    ?>
</table><?php


            }
        
            

    ?>
                        <div class="btn">
                            <center><br><a href="home.php"><button class="close">CLOSE</button></a>
                            
                        </div>
                
                      </div>
                      <?php 
                    
                    } ?>

    
</body>
</html>