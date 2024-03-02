    <!-- header -->
            <?php
                include_once 'header.php';
            ?>

    <!-- header -->
      <!-- header -->
            <?php
                include_once 'catagoryList.php';
            ?>

    <!-- header -->
    <?php
                  require_once '../includes/dbh.inc.php';
                  $id=$_GET["id"];
                  $sql = "select * from products WHERE producID=$id";
                  $result = mysqli_query($conn, $sql);
                  if ($result){
                    $row = mysqli_fetch_assoc($result) ;
                          $producID = $row['producID'];
                          $title = $row['title'];
                          $price = $row['price'];
                          $image1 = $row['image1']; // Assuming you have a single image field, change this accordingly
                          $image2 = $row['image2'];
                          $image3 = $row['image3'];
                          $mainCatagory= $row['mainCatagory'];
                          $subcatagory = $row['subCatagory'];
                          $catagory = $row['catagory'];
                          $description = $row['description'];
                          $meterialDetails = $row['meterialDetails'];

                        // Output the HTML for each product
                       
                  ?>

<link rel="stylesheet" type="text/css" href="../css/oneItem.css" />

<body>
    <!-- item -->
    
    <section>
        
        <div class="container flax"> 
            <div class="left">
                <div class="main_image">
                    <img src="../images/item/<?php echo $image1 ?>" alt="" class="slide">
                </div>
                <div class="option flex">
                    <img src="../images/item/<?php echo $image1 ?>" onclick="img('../images/item/<?php echo $image1 ?>')">
                    <img src="../images/item/<?php echo $image2 ?>" onclick="img('../images/item/<?php echo $image2 ?>')">
                    <img src="../images/item/<?php echo $image3 ?>" onclick="img('../images/item/<?php echo $image3 ?>')">
                </div>
            </div>

            <div class="right">
                <h3><?php echo $title ?></h3>
                <h4><small>LKR </small> <?php echo $price ?></h4>
                <p><b>Material Details</b><br>
                    <?php echo $meterialDetails ?><br><br>
                    
                <b>Look After Me</b><br>
                    <?php echo $description ?>
                <form action="addtocart.php?producID=<?php echo $producID ?>" method="POST">
                    <div class="size-select">
                        <h5>Size</h5>
                        <label for="small">
                            <input type="radio" name="size" id="small" value="s">
                            <span>S</span>
                        </label>
                        <label for="medium">
                            <input type="radio" name="size" id="medium" value="m">
                            <span>M</span>
                        </label>
                        <label for="large">
                            <input type="radio" name="size" id="large" value="l">
                            <span>L</span>
                        </label>
                        <label for="x-large">
                            <input type="radio" name="size" id="x-large" value="xl">
                            <span>XL</span>
                        </label>
                        <label for="xx-large">
                            <input type="radio" name="size" id="xx-large" value="xxl">
                            <span>XXL</span>
                        </label>
                    </div>

                    <div class="quantity-select">
                        <h5>Quantity</h5>
                            <input type="number" value="1" min="1" name="qty">
                    </div>   
                        
                        <center><a href="addtocart.php"><button class="addbtn" name="addcart">ADD TO CART</button></a></center>

                </form>
                
            </div>
        </div>
    </section>

    <script>
        function img(anything){
            document.querySelector('.slide').src = anything;
        }

        function change(change){
            const line = document.querySelector('.home');
            line.style.background = change;
        }

    </script>

    <p></p>

    <!-- item -->

  


     <!-- Footer --> 
            <?php
                  }
                include_once 'footer.php';
            ?>
     <!-- Footer -->