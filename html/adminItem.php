
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="../css/Adminoneitemstyle.css" />
  </head>

  <body>
    
    




    <h2 class="head1">Admin Add Item</h2>
    <!-- item -->
    <section>
      <form id="itemAdd" action="../includes/itemAdd.php" method="post">
        <div class="container flax">
          <div class="left">
            <div class="option flex">
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto1" name="image1" class="myfile" placeholder="Enter Price..."/><br />
              </div>
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto2" name="image2" class="myfile" /><br />
              </div>
              <div class="pho">
                <img src="../images/icon/uplod picture.png" />
                <input type="file" id="addphoto3" name="image3" class="myfile" /><br />
              </div>
            </div>
          </div>

          <div class="right">
            <!--  <h3>Biconic Yellow Long Sleeve Silk Crop Top</h3> -->
            
            <h4>
              <small>Title </small>
              <input type="text" id="title" name="title" placeholder="Enter title ..." />
              <br /><br />
              <!--4,490.00-->
            </h4>
              <br>
            <h4>
              <label for="mainCategory">Main Category:</label>
              <select id="mainCategory" name="mainCategory" onchange="updateCategories()">
                  <option value="Women">Women</option>
                  <option value="Men">Men</option>
                  <option value="Kids">Kids</option>
                  <option value="Sports">Sports</option>
                  <option value="Beauty">Beauty</option>
                  <option value="LifeStyle">LifeStyle</option>
                  <option value="Footwear">Footwear</option>
                  <option value="Jewellery">Jewellery</option>
              </select>
              <br><br>

              <h4> 
                <label for="category">Category:</label>
                <select id="category" name="category" onchange="updateSubcategories()">
                  <!-- Categories will be dynamically populated based on the selected main category -->
                </select>
            <br><br></h4>
                <h4><label for="subcategory">Subcategory:</label>
                <select id="subcategory" name="subcategory">
                  <!-- Subcategories will be dynamically populated based on the selected category -->
                </select></h4>


            
            <br>
            <br>

            <h4>
              <small>LKR </small>
              <input type="text" id="price" name="price" placeholder="Enter Price..." />
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
              ></textarea>
              <!-- 96% POLYESTER 4% ELASTANE --><br /><br />

              <b>Look After Me</b><br />
              <textarea
                id="Details"
                placeholder="More Details..."
                name="description"
                rows="6"
                cols="30"
              ></textarea>
              <!-- Machine wash cold, color may transfer<br />
              Wash separately<br />
              Do not bleach<br />
              Low iron<br />
              Tumble dry or flat dry in shade<br /> -->
            </p>

            <center><button id="add_item" name="add_item">ADD TO ITEM</button></center>
            <center><button id="add_item" name="add_item"><a href="adminpanel.php">Cancel</a></button></center>
          </div>
        </div>
      </form>
    </section>

    <p></p>
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

    <!-- item -->
  </body>
</html>
<?php

?>