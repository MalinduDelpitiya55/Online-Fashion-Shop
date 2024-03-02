
    <!--page-icon-->
=    <link rel="shortcut icon" href="../images/item/logo.jpg" />
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="../css/homehead.css" />
 <style>.gallery-container {
    justify-content: center;
    padding-top: 30px;
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}

.gallery-item {
    flex-wrap: wrap;
    align-items: center;
    border-radius: 15px;
    height: 250px;
    width: 400px;
    box-shadow: 0px 0px 4px 2px rgb(255, 255, 255);
}

.gallery-item:hover {
    border-radius: 15px;
    height: 265px;
    width: 425px;
    box-shadow: 0px 0px 8px 4px rgb(0, 213, 255);
}</style>
    
    <!-- first page -->
    <section class="main-home">
      <div class="main-text">
        <h5>Winter Collection</h5>
        <h1>
          New Winter <br />
          Collection 2023
        </h1>
        <p>There's Nothing like trend</p>

        <input type="button" value="Shop Now" class="main-btn" /><br />
      </div>
    </section>
    <!-- first page -->

    <!-- trending product section -->

    <section class="trending-product" id="trending">
      <h3 class="trending-title">OUR BEST <span>SELLERS</span></h3>
      <ul id="autoWidth" class="cs-hidden">
     <div class="item_coloum">
                <?php
                  require_once '../includes/dbh.inc.php';
                  $sql = "select * from products ORDER BY RAND() LIMIT 10;";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          $producID = $row['producID'];
                          $title = $row['title'];
                          $price = $row['price'];
                          $image = $row['image1']; // Assuming you have a single image field, change this accordingly
                          $subcatagory = $row['subCatagory'];
                          $catagory = $row['catagory'];
                          $description = $row['description'];
                          $meterialDetails = $row['meterialDetails'];

                        // Output the HTML for each product
                  ?>
            <!-- Output product HTML here -->
                      <li class="item-a">
                                  <div class="box">
                                            <div class="slide-img">
                                                <img src="../images/item/<?php echo $image; ?>" alt='not valid'>
                                                      <div class="overlay">
                                                          <a href="oneItem.php?id=<?php echo $producID ?>" class="buy-btn">Buy Now</a>
                                                      </div>
                                            </div>
                                            <div class="details-box">
                                                  <div class="type">
                                                      <a href="oneitem.php?id=<?php echo $producID ?>"><?php echo $title; ?></a>
                                                      <span> Now Arrival</span>
                                                  </div>
                                                <a href="#" class="price">LKR <?php echo $price; ?></a>
                                            </div>
                                  </div>
                      </li>
            <?php
        }
    }
    ?>
</div>

        
        
        
          
        </div>

        <!--10--------------------------->
      </ul>
    </section>
    <!-- trending product section -->

     <!-- categery product section -->

    <!-- Men product section -->
    <section class="men-product" id="menproduct">
        <div class="hcphoto">
            <img src="../images/HCmen.jpg" alt="men-product">
        </div>
        <div class="hctext">
            <h4>MEN</h4>
            <div class="gallery-container">
              <a href="#"><img class="gallery-item " src="../images/men catogery/Casualwear.jpg" ></a>
              <a href="#"><img class="gallery-item " src="../images/men catogery/Formalwear.jpg" ></a>
              <a href="#"><img class="gallery-item " src="../images/men catogery/Winterwear.jpg"></a>
              <a href="#"><img class="gallery-item " src="../images/men catogery/Underwear_&_Socks.jpg"></a>
              <a href="#"><img class="gallery-item " src="../images/men catogery/Accessories.jpg" ></a>
          </div>
        </div>
    </section>
    <!-- Men product section -->
    <!-- women product section -->
    <section class="women-product" id="womenproduct">
        <div class="hcphoto">
            <img src="../images/HCwomen.jpg" alt="men-product">
        </div>
        <div class="hctext">
          <h4>WOMEN</h4>
          <div class="gallery-container">
              <a href="#"><img class="gallery-item " src="../images/Women catogery/Casualwear.jpg" ></a>
              <a href="#"><img class="gallery-item " src="../images/Women catogery/Formalwear.jpg" ></a>
              <a href="#"><img class="gallery-item " src="../images/Women catogery/Winterwear.jpg"></a>
              <a href="#"><img class="gallery-item " src="../images/Women catogery/Lingerie.jpg"></a>
              <a href="#"><img class="gallery-item " src="../images/Women catogery/Beauty.jpg" ></a>
              <a href="#"><img class="gallery-item " src="../images/Women catogery/Accessories.jpg"></a>
        </div>
        </div>
    </section>
    <!-- women product section -->
    <!-- Kids product section -->
    <section class="kids-product" id="kidsproduct">
        <div class="hcphoto">
            <img src="../images/HCKids.jpg" alt="men-product">
        </div>
        <div class="hctext">
          <h4>KIDS</h4>
          <div class="gallery-container">
            <a href="#"><img class="gallery-item " src="../images/kids catogery/Boys_Apparel.jpg" ></a>
            <a href="#"><img class="gallery-item " src="../images/kids catogery/Girls_Apparel.jpg" ></a>
            <a href="#"><img class="gallery-item " src="../images/kids catogery/KidsBoys_Apparel.jpg"></a>
            <a href="#"><img class="gallery-item " src="../images/kids catogery/KidsGirls_Apparel.jpg"></a>
            <a href="#"><img class="gallery-item " src="../images/kids catogery/Toys_Apparel.jpg" ></a>
        </div>
        </div>
    </section>
    <!-- Kids product section -->


    <!-- categery product section -->

    <!-- body -->
