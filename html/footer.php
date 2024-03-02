
        <link rel="stylesheet" href="../css/footer.css" >
    
    <!-- Footer --> 
    <footer>    
        <div class="footer-column">
            <h4>Product Category</h4>
            <ul>
              <li><a href="#">Women's Fashion</a></li>
              <li><a href="#">Men's Fashion</a></li>
              <li><a href="#">Kid's Fashion</a></li>
              <li><a href="#">Fashion Pria</a></li>
              <li><a href="#">Beauty</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>Payment</h4>
            <ul>
              <li><a href="#">E-Wallet</a></li>
              <li><a href="#">Cash on Delivery</a></li>
              <li><a href="#">Transfer Bank</a></li>
              <li><a href="#">Paypal</a></li>
            </ul>
        </div>

        <div class="footer-column">
          <h4>Help & Contacts</h4>
          <ul>
            <li><a href="#">My account</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">News & Events</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Contact Customer Support</a></li>
          </ul>
      </div>
      
      <div class="footer-column">
          <h4>About Us</h4>
            <ul>
              <li><a href="#">Career</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Company Info</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Legal Statement</a></li>
            </ul>
      </div>

  <p class="mini-text">
    &copy; Copyright 2023 Group 8. All right reserved
  </p>
</footer>
 <!-- Footer -->

<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the message parameter from the URL
            const urlParams = new URLSearchParams(window.location.search);
            const message = urlParams.get('error');

            // Display an alert if a message is present
            if (message) {
                alert(message);
            }
        });




// Close the cart when the close button is clicked
let closeCart = document.querySelector('.close');

closeCart.addEventListener('click', () => {
    body.classList.remove('showCart');
    body.style.overflow = 'auto';
});


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
</body>

</html>