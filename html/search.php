<?php
include_once 'header.php';
// include_once 'catagoryList.php';
?>
<link rel="shortcut icon" href="../images/item/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../css/catagarizedItem.css" />
<style>
        .mini-text{
            color: #ffffff;
        }
        
        .text{
            color: #ffffff;
            font-weight: bold;
            font-size: x-large;
        }
       #searching{
            font-size:300%;
            font-weight: bolder;
        }
</style>
</div>
            <center><label for="search" ><p id=searching>Search Items<p></label></center>

<section class="trending-product" id="trending">
                
    <ul id="autoWidth" class="cs-hidden">
        <div class="item_coloum">
           
            <?php
            if (isset($_POST["submit"])){
                $search = $_POST['search'];

            require_once '../includes/dbh.inc.php';
            
            $sql = "SELECT * FROM products WHERE title LIKE '%$search%' OR mainCatagory LIKE '%$search%' OR catagory LIKE '%$search%' OR subCatagory LIKE '%$search%' OR price LIKE '%$search%'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

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
                                    <a href="oneItem.php?id=<?php echo $producID ?>" class="buy-btn">Buy Now</a>
                                </div>
                            </div>
                            <div class="details-box">
                                <div class="type">
                                    <a href="oneitem.php?id=<?php echo $producID ?>"><?php echo $title; ?></a>
                                    <span> Now Arrival</span>
                                </div>
                                <a href="#" class="price">LKR <?php echo number_format($price, 2); ?></a>
                            </div>
                        </div>
                    </li>
            <?php
                }
            }else {
                echo "<p class='text'>No results found.</p>";
            }
            } 
            
            ?>
        </div>
    </ul>
</section>

<?php
include_once 'footer.php';
?>





