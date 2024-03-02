
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?php
include_once 'header.php';
include_once 'catagoryList.php';
require_once '../includes/dbh.inc.php';

// Fetch only the necessary data
$sql = "SELECT * FROM products  WHERE mainCatagory ";
$result = mysqli_query($conn, $sql);

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
                            <center><h1 id="header">Shopping Cart</h1></center>
    <?php 
  if(!isset($_SESSION['userid'])) {
        echo '<label for="no-log" class="no-log">Please Log in.....</label>';
}
else {

echo '<table border="1">
    <tr>
        <th style="width:5%">ID</th>
        <th>Item</th>
        <th>Title</th>
        <th style="width:10%">Size</th>
        <th style="width:10%">Price</th>
        <th style="width:20%">Quantity</th>
        <th style="width:10%">Total</th>
        <th>Remove</th>
    </tr>'
    ?>
    <?php
            $id=$_SESSION["userid"];
            $sql="SELECT products.title, products.image1, products.price, cartdetails.size, cartdetails.qty, cartdetails.cartID
                    FROM products
                    JOIN cartdetails ON products.producID = cartdetails.producID
                    WHERE cartdetails.id = $id;";
            $result=mysqli_query($conn, $sql);
            if($result){
                $i=0;
                $totalAmount=0;
                while($row=mysqli_fetch_assoc($result)){
                    $i++;
                    $total=$row["price"]*$row["qty"];
                     $totalAmount+= $total;
                
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><img class="img1" src="../images/item/<?php echo $row["image1"] ?>" alt="image not found"></td>
        <td><?php echo $row["title"] ?></td>
        <td><?php echo $row["size"] ?></td>
        <td><?php echo $row["price"] ?></td>
        <td>
            <div class="quantity">
                
                <!-- <button class="action-button" onclick="removeItem(this)"><i class="fas fa-minus"></i></button> -->
                                <span class="itemCount"><?php echo $row["qty"] ?></span>
                                <!-- <button class="action-button" onclick="addItem(this)"><i class="fas fa-plus"></i></button> -->
                
            </div>
        </td>
        <td><?php echo $total ?></td>
        <td><a href="../includes/itemRemove.inc.php?id=<?php echo $row["cartID"] ?>"><button class="remove" name="remove" >Remove</button></td></a>
        
    </tr>
    <?php
}

    ?>
</table><?php

echo '<br><label for="total" class="total">total amount : LKR ' .$totalAmount. '.00</label>';
            }
        
            

    ?>
                        <div class="btn">
                            <center><br><a href="home.php"><button class="close">CLOSE</button></a>
                            <a href="checkout.php"><button class="checkOut" name="submit">CHECK OUT</button></a></center><br><br><br><br>
                        </div>
                
                      </div>
                      <?php 
                    
                    } ?>

                      <script>
    // Counter to keep track of the number of items
    let itemCount = 0;

    // Function to add an item
    function addItem() {
        itemCount++;
        updateItemCount();
    }

    // Function to remove an item
    function removeItem() {
        if (itemCount > 0) {
            itemCount--;
            updateItemCount();
        }
    }

    // Function to update the item count display
    function updateItemCount() {
        document.getElementById('itemCount').innerText = itemCount;
    }
</script>
 <script>
        function removeItem(button) {
            var itemCountElement = button.parentElement.querySelector('.itemCount');
            var currentCount = parseInt(itemCountElement.innerText);

            // Ensure the quantity is not negative
            if (currentCount > 0) {
                itemCountElement.innerText = currentCount - 1;
                // You may want to update the server/database here if needed
            }
        }

        function addItem(button) {
            var itemCountElement = button.parentElement.querySelector('.itemCount');
            var currentCount = parseInt(itemCountElement.innerText);

            itemCountElement.innerText = currentCount + 1;
            // You may want to update the server/database here if needed
        }
    </script>
    
</body>
</html>