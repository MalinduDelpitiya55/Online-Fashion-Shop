<?php

use LDAP\Result;

    include_once "../includes/dbh.inc.php";
    $id=$_GET["updateid"];
    $sql="SELECT * FROM `products` WHERE producID = $id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $producID = $row['producID'];
    $title = $row['title'];
    $price = $row['price'];
    $image1 = $row['image1']; // Assuming you have a single image field, change this accordingly
    $image2 = $row['image2']; // Assuming you have a single image field, change this accordingly
    $image3 = $row['image3']; // Assuming you have a single image field, change this accordingly
    $subcatagory = $row['subcatagory'];
    $catagory = $row['catagory'];
    $description = $row['description'];
    $meterialDetails = $row['meterialDetails'];
    $mainCategory = $row["mainCatagory"];

    if (isset($_POST['update'])) {
        $title = $_POST["title"];
        $price = $_POST["price"];
        $image1 = $_POST["image1"];
        $image2 = $_POST["image2"];
        $image3 = $_POST["image3"];
        $subcatagory = $_POST["subcategory"];
        $description = $_POST["description"];
        $catagory = $_POST["category"];
        $mainCategory = $_POST["mainCategory"];
        $meterialDetails =$_POST["meterialDetails"];
    
            $sql="update `products` set producID=$id, title=$title,price=$price, image=$image1,image2=$image2,image3=$image3,subcatagory=$subcatagory, catagory=$catagory,description=$description, meterialDetails=$meterialDetails,mainCategory=$mainCategory";
            $result=mysqli_query($conn,$sql);
            if ($result) {
                echo "Update successfull";
            } else {   
                echo "Error: ". $sql. "<br>". mysqli_error($conn);
            }
    
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="../css/Adminoneitemstyle1.css" />
  </head>

  <body>
    
    <script> 
    function updateCategories() {
      const selectedMainCategory = document.getElementById("mainCategory").value;
      const categoryDropdown = document.getElementById("category");

      // Clear existing options
      categoryDropdown.innerHTML = "<option value=''>Select Category</option>";

      switch (selectedMainCategory) {
        case "Women":
          addOptionsToDropdown(["Womens Casualwear", "Womens Formalwear", "Nightwear", "Swim & Beachwear", "Womens Winterwear", "Womens Accessories"], categoryDropdown);
          break;
        case "Men":
          addOptionsToDropdown(["Mens Casualwear", "Mens Formalwear", "Underwear & Socks", "Men's Grooming", "Mens-Accessories", "Mens Winterwear"], categoryDropdown);
          break;
        case "Kids":
          addOptionsToDropdown(["Toys", "Girls Apparel", "Boys Apparel", "Baby Girl Apparel", "Baby Boy Apparel", "Kids Accessories"], categoryDropdown);
          break;
        case "Sports":
          addOptionsToDropdown(["Activewear- WOMEN", "Activewear- MEN", "Activewear- KIDS", "Kids-Accessories", "Activewear -UNISEX"], categoryDropdown);
          break;
        case "Beauty":
          addOptionsToDropdown(["Beauty"], categoryDropdown);
          break;
        case "LifeStyle":
          addOptionsToDropdown(["Living Room", "Kitchen", "Dining", "Tableware", "Garden"], categoryDropdown);
          break;
        case "Footwear":
          addOptionsToDropdown(["Women's Footwear", "Men's Footwear","Kids' Footwear: Girls", "Kids' Footwear: Boys", "Kids' Footwear: Infants", "Kids' Footwear: Unisex"], categoryDropdown);
          break;
        case "Jewellery":
          addOptionsToDropdown(["Fashion Jewellery", "Luxury Jewellery"], categoryDropdown);
          break;
        default:
          break;
      }

      // Update subcategories based on the selected category
      updateSubcategories();
    }

    function updateSubcategories() {
      const selectedCategory = document.getElementById("category").value;
      const subcategoryDropdown = document.getElementById("subcategory");

      // Clear existing options
      subcategoryDropdown.innerHTML = "<option value=''>Select Subcategory</option>";

      switch (selectedCategory) {

        //-----------womwns sub catagoeys-----------
        case "Womens Casualwear":
          addOptionsToDropdown(["Dresses","Tops & T Shirts","Shirts","Skirts & Shorts","Bottoms","Jackets","Bodysuits"], subcategoryDropdown);
          break;

        case "Womens Formalwear":
          addOptionsToDropdown(["Dresses", "Shirts & Tops","Pants & Trousers","Skirts"], subcategoryDropdown);
          break;

          case "Nightwear":
          addOptionsToDropdown(["Night Dress","Loungewear Sets","Night Shirts","Bed Slippers","Camisoles","Nightgowns & Chemises"], subcategoryDropdown);
          break;

        case "Swim & Beachwear":
          addOptionsToDropdown([["Swim Tops","Swim Bottoms","Swim Sets","Swimsuits","Tankinis","Bikini Tops"]], subcategoryDropdown);
          break;

          case "Womens Winterwear":
          addOptionsToDropdown(["Tops & T Shirts","Cardigans"], subcategoryDropdown);
          break;

        case "Womens Accessories":
          addOptionsToDropdown(["Caps & Hats","Scarves & Shawls","Hair Accessories","Belts"], subcategoryDropdown);
          break;

        

          //-----------mens subcatagory-----------
        case "Mens Casualwear":
          addOptionsToDropdown(["Hoodies","T Shirts & Polos","Skinnies & Tank Tops","Shirts","Shorts","Jackets","Bottoms"], subcategoryDropdown);
          break;

        case "Mens Formalwear":
          addOptionsToDropdown(["Shirts","Pants & Trousers","Suits"], subcategoryDropdown);
          break;

        case "Men's Grooming":
          addOptionsToDropdown(["Fragrances","Bath & Shower","Wellness"], subcategoryDropdown);
          break;

        case "Underwear & Socks":
          addOptionsToDropdown(["Boxers","Briefs","Trunks","Undershirt","Socks"], subcategoryDropdown);
          break;

        case "Mens Winterwear":
          addOptionsToDropdown(["Sweaters"], subcategoryDropdown);
          break;

        case "Mens-Accessories":
          addOptionsToDropdown(["Caps & Hats","Belts","Ties & Bows"], subcategoryDropdown);
          break;
          
          
  //-----------kids subcatagory-----------
        case "Toys":
          addOptionsToDropdown(["Stationery","Learning","Puzzles & Board Games","Sports & Outdoor","Infant & Pre School","Toy Vehicles"], subcategoryDropdown);
          break;

        case "Girls Apparel":
          addOptionsToDropdown(["Polos","Dresses & Pinafores","T Shirts & Tops","Jumpsuits & Rompers","Co-ord Sets","Bottoms"], subcategoryDropdown);
          break;

        case "Boys Apparel":
          addOptionsToDropdown(["Polos","T Shirts","Shirts","Shorts"], subcategoryDropdown);
          break;

        case "Baby Girl Apparel":
          addOptionsToDropdown(["Tops & T Shirts","Dresses & Pinafores","Sets & Overalls","Dungarees"], subcategoryDropdown);
          break;

        case "Baby Boy Apparel":
          addOptionsToDropdown(["Tops & T Shirts","Shorts","Sets & Overalls","Bottoms"], subcategoryDropdown);
          break;

        case "Kids Accessories":
          addOptionsToDropdown(["Hats & Caps","Hair Accessories","Bags, Wallets & Key Rings","Face Masks"], subcategoryDropdown);
          break;


  //-----------sports subcatagory-----------
        case "Activewear- WOMEN":
          addOptionsToDropdown(["Stationery","Learning","Puzzles & Board Games","Sports & Outdoor","Infant & Pre School","Toy Vehicles"], subcategoryDropdown);
          break;

        case "Activewear- MEN":
          addOptionsToDropdown(["Polos","Dresses & Pinafores","T Shirts & Tops","Jumpsuits & Rompers","Co-ord Sets","Bottoms"], subcategoryDropdown);
          break;

        case "Activewear- KIDS":
          addOptionsToDropdown(["Polos","T Shirts","Shirts","Shorts"], subcategoryDropdown);
          break;

        case "Kids-Accessories":
          addOptionsToDropdown(["Tops & T Shirts","Dresses & Pinafores","Sets & Overalls","Dungarees"], subcategoryDropdown);
          break;

        case "Activewear -UNISEX":
          addOptionsToDropdown(["Tops & T Shirts","Shorts","Sets & Overalls","Bottoms"], subcategoryDropdown);
          break;

    //--------------------------beauty

        case "Beauty":
          addOptionsToDropdown(["Tops & T Shirts","Shorts","Sets & Overalls","Bottoms"], subcategoryDropdown);
          break;

   //-----------Home & Lifestyle subcatagory-----------
        case "Living Room":
          addOptionsToDropdown(["Stationery","Learning","Puzzles & Board Games","Sports & Outdoor","Infant & Pre School","Toy Vehicles"], subcategoryDropdown);
          break;

        case "Kitchen":
          addOptionsToDropdown(["Polos","Dresses & Pinafores","T Shirts & Tops","Jumpsuits & Rompers","Co-ord Sets","Bottoms"], subcategoryDropdown);
          break;

        case "Dining":
          addOptionsToDropdown(["Polos","T Shirts","Shirts","Shorts"], subcategoryDropdown);
          break;

        case "Tableware":
          addOptionsToDropdown(["Tops & T Shirts","Dresses & Pinafores","Sets & Overalls","Dungarees"], subcategoryDropdown);
          break;

        case "Garden":
          addOptionsToDropdown(["Tops & T Shirts","Shorts","Sets & Overalls","Bottoms"], subcategoryDropdown);
          break;

        //-----------Footwear-----------
        case "Women's Footwear":
          addOptionsToDropdown(["Sandals","Formal Shoes","Loafers","Heels","Flats","Pumps","Sneakers"], subcategoryDropdown);
          break;

        case "Men's Footwear":
          addOptionsToDropdown(["Sandals","FLATS","Formal Shoes","Loafers","Lace ups","Sneakers","Flip Flops"], subcategoryDropdown);
          break;

        case "Kids' Footwear: Girls":
          addOptionsToDropdown(["Back to school","Pumps","Sandals","Flip Flops"], subcategoryDropdown);
          break;

        case "Kids' Footwear: Boys":
          addOptionsToDropdown(["Sliders","Flip Flops"], subcategoryDropdown);
          break;

        case "Kids' Footwear: Infants":
          addOptionsToDropdown(["Booties","Pre walkers"], subcategoryDropdown);
          break;
        
        case "Kids' Footwear: Unisex":
          addOptionsToDropdown(["Back to school","Sandals"], subcategoryDropdown);
          break;
        
        //----------------jewellery
        
          case "Fashion Jewellery":
          addOptionsToDropdown(["Earrings","Bracelets & Bangles","Necklaces","Rings","Sets","Brooches"], subcategoryDropdown);
          break;
        
        case "Luxury Jewellery":
          addOptionsToDropdown(["Earrings","Bracelets & Bangles","Necklaces"], subcategoryDropdown);
          break;


        
        // Add more cases for other categories and their subcategories as needed
        default:
          break;
      }

        
        
      

      
    }

    function addOptionsToDropdown(options, dropdown) {
      options.forEach(option => {
        const optionElement = document.createElement("option");
        optionElement.value = option;
        optionElement.text = option;
        dropdown.add(optionElement);
      });
    }

    // Call updateCategories on page load
    updateCategories();
  </script>




    <h2 class="head1">Admin Add Item</h2>
    <!-- item -->
    <section>
      <form id="itemAdd" action="../includes/itemUpdate.inc.php?updateid=<?php echo $id ?>" method="POST">
        <div class="container flax">
          <div class="left">
            <div class="option flex">
              <div class="pho">
                <img src="../images/item/<?php echo $image1; ?>"  />
               
              </div>
              <div class="pho">
                <img src="../images/item/<?php echo $image2; ?>" alt='<?php echo $image1; ?>'>
                
              </div>
              <div class="pho">
                <img src="../images/item/<?php echo $image3; ?>" />
                
              </div>
              <div class="pho">
                <button><a href="changeItemImage.php?updateid=<?php echo $id ?>">Change image</a></button>
                
              </div>
            </div>
          </div>

          <div class="right">
            <!--  <h3>Biconic Yellow Long Sleeve Silk Crop Top</h3> -->
            
            <h4>
              <small>Title </small>
              <input type="text" id="title" name="title" placeholder="Enter title ..." value="<?php echo $title; ?>" />
              <br /><br />
              <!--4,490.00-->
            </h4>
              <br>
            <h4>
               <label for="mainCategory">Main Category:</label>
              <select id="mainCategory" name="mainCategory" onchange="updateCategories()">
                    <option value="Women" <?php echo ($mainCategory == 'women') ? 'selected' : 'Women'; ?>>Women</option>
                    <option value="Men" <?php echo ($mainCategory == 'men') ? 'selected' : 'Men'; ?>>Men</option>
                    <option value="Kids" <?php echo ($mainCategory == 'kids') ? 'selected' : 'Kids'; ?>>Kids</option>
                    <option value="Sports" <?php echo ($mainCategory == 'sports') ? 'selected' : ''; ?>>Sports</option>
                    <option value="Beauty" <?php echo ($mainCategory == 'beauty') ? 'selected' : ''; ?>>Beauty</option>
                    <option value="LifeStyle" <?php echo ($mainCategory == 'lifestyle') ? 'selected' : 'LifeStyle'; ?>>LifeStyle</option>
                    <option value="Footwear" <?php echo ($mainCategory == 'footwear') ? 'selected' : ''; ?>>Footwear</option>
                    <option value="Jewellery" <?php echo ($mainCategory == 'jewellery') ? 'selected' : ''; ?>>Jewellery</option>
              </select>
              <br><br>

               <h4> 
             <label for="category">category:</label>
                <select id="category" name="category" onchange="updateSubcategories()">
                
                   <!-- Categories will be dynamically populated based on the selected main category  -->
                </select> 
            <br><br></h4>
                <h4><label for="subcategory">subcategory:</label>
                <select id="subcategory" name="subcategory">
                  
                   <!-- Subcategories will be dynamically populated based on the selected category  -->
                </select></h4> 


            
            <br>
            <br>

            <h4>
              <small>LKR </small>
              <input type="text" id="price" name="price" placeholder="Enter Price..." value="<?php echo $price; ?>" />
              <!--4,490.00-->
            </h4>
            

            <p>
              <b>Material Details</b><br />
              <textarea
                id="Material"
                placeholder="Material Details..."
                name="meterialDetails"
                rows="3"
                cols="30"
                
              ><?php echo $meterialDetails; ?></textarea>
              <!-- 96% POLYESTER 4% ELASTANE --><br /><br />

              <b>Look After Me</b><br />
              <textarea
                id="Details"
                placeholder="More Details..."
                name="description"
                rows="6"
                cols="30"
              ><?php echo $description; ?></textarea>
              <!-- Machine wash cold, color may transfer<br />
              Wash separately<br />
              Do not bleach<br />
              Low iron<br />
              Tumble dry or flat dry in shade<br /> -->
            </p>

            <center><button id="update_item" name="submit">update Iem</button></center>
            
          </div>
        </div>
      </form>
      <center><button id="add_item" name="add_item"><a href="adminHome.php">Cancel</a></button></center>
    </section>

    <p></p>

    <!-- item -->
  </body>
</html>
