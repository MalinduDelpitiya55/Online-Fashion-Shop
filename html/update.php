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
                $subcatagory=$row['subcatagory'];
                $catagory=$row['catagory'];
                $description=$row['description'];
                $meterialDetails=$row['meterialDetails'];

                
            }   
            }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="../css/oneitem.css" />
   
</head>

<body>
    <!-- item -->
    
    <section>
        <form action="../includes/update.inc.php">
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
                <div class="option flex">
                    <input type="file" id="addphoto3" name="image3" class="myfile" />
                    <input type="file" id="addphoto3" name="image3" class="myfile" />
                    <input type="file" id="addphoto3" name="image3" class="myfile" />
                </div>
            </div>

            <div class="right">
                
                <h3><textarea><?php echo $title ?></textarea></h3>
                <h4><small>LKR </small><input type="text" value="<?php echo $price ?>"></h4>
                <p><b>Material Details</b><br>
                    <textarea><?php echo $image1 ?></textarea><br><br>
                    
                <b>Look After Me</b><br>
                    <textarea rows="8" cols="50"><?php echo $description ?></textarea><br><br></p>
                
                      
                        
                        <center><button>Update</button></center>

               
                
            </div>
        </div>
         </form>
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

     
</body>

</html>