
    // Define categories and subcategories for each main category
    const categories = {
      electronics: ["Computers", "Mobiles"],
      clothing: ["Men's", "Women's"]
      // Add more main categories and their corresponding categories as needed
    };

    const subcategories = {
      computers: ["Laptops", "Desktops"],
      mobiles: ["Smartphones", "Tablets"],
      "men's": ["Shirts", "Jeans"],
      "women's": ["Dresses", "Shoes"]
      // Add more categories and their corresponding subcategories as needed
    };

    function updateCategories() {
      // Get the selected main category
      const selectedMainCategory = document.getElementById("mainCategory").value;

      // Get the category dropdown
      const categoryDropdown = document.getElementById("category");

      // Clear existing options
      categoryDropdown.innerHTML = "";

      // Populate categories based on the selected main category
      categories[selectedMainCategory].forEach(category => {
        const option = document.createElement("option");
        option.value = category.toLowerCase(); // Convert to lowercase for consistency
        option.text = category;
        categoryDropdown.add(option);
      });

      // Update subcategories based on the selected category
      updateSubcategories();
    }

    function updateSubcategories() {
      // Get the selected category
      const selectedCategory = document.getElementById("category").value;

      // Get the subcategory dropdown
      const subcategoryDropdown = document.getElementById("subcategory");

      // Clear existing options
      subcategoryDropdown.innerHTML = "";

      // Populate subcategories based on the selected category
      subcategories[selectedCategory].forEach(subcategory => {
        const option = document.createElement("option");
        option.value = subcategory.toLowerCase(); // Convert to lowercase for consistency
        option.text = subcategory;
        subcategoryDropdown.add(option);
      });
    }

    // Call updateCategories on page load
    updateCategories();

