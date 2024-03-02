<?php
include_once 'header.php';
include_once 'catagoryList.php';
require_once '../includes/dbh.inc.php';

// Fetch only the necessary data
$sql = "SELECT * FROM products WHERE mainCatagory = 'kids' ORDER BY RAND()";
$result = mysqli_query($conn, $sql);

?>

<link rel="shortcut icon" href="../images/item/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../css/catagarizedItem.css" />

</div>
<section class="main-home">
    <div class="main-text">
        <h1> KIDS <br><span>COLLECTION</span></h1>
    </div>
</section>

<section class="trending-product" id="trending">
    <ul id="autoWidth" class="cs-hidden">
        <div class="item_coloum">
            <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extracting values
                    $producID = $row['producID'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $image = $row['image1'];
                    $subcatagory = $row['subCatagory'];
                    $catagory = $row['catagory'];
                    $mainCatagory = $row['mainCatagory'];
                    $description = $row['description'];
                    $meterialDetails = $row['meterialDetails'];
            ?>
                    <li class="item-a">
                        <div class="box">
                            <div class="slide-img">
                                <img src="../images/item/<?php echo $image; ?>" alt='not valid'>
                                <div class="overlay">
                                    <a href="oneItem.php" class="buy-btn">Buy Now</a>
                                </div>
                            </div>
                            <div class="details-box">
                                <div class="type">
                                    <a href="oneitem.html"><?php echo $title; ?></a>
                                    <span> Now Arrival</span>
                                </div>
                                <a href="#" class="price">LKR <?php echo number_format($price, 2); ?></a>
                            </div>
                        </div>
                    </li>
            <?php
                }
            }
            ?>
        </div>
    </ul>
</section>

<?php
include_once 'footer.php';
?>
