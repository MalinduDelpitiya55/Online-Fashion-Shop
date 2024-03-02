<?php
session_start();
if($_SESSION['role']=='admin'){


?>
<!DOCTYPE html>

<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
<style>
    .invisible-button {
      border: none;
            padding: 0;
            margin: 0;
            background: none;
            cursor: pointer;
            display: inline; 
    }
         .side-bar {
            background-color: #18191a;

            width: 250px;
            left: -250px;
            height: 100vh;
            position: fixed;
            top: 0;
            overflow-y: auto;
            transition: 0.6s ease;
            transition-property: left;
        }

        header {
            background-color: #bdcee3;

        }

        .close-btn {
            position: absolute;
            color: #fff;
            font-size: 23px;
            right: 0px;
            margin: 15px;
            cursor: pointer;
        }

        header h1 {
            text-align: center;
            font-weight: 500;
            font-size: 35px;
            padding: 20px;
            font-family: sans-serif;
            letter-spacing: 2px;
            color: #010101;
        }

        .menu {
            width: 100%;
            margin-top: 30px;
        }

        .menu .item {
            position: relative;
            cursor: pointer;
        }

        .menu .item a {
            color: #ff8dcf;
            font-size: 16px;
            text-decoration: none;
            display: block;
            padding: 5px 30px;
            line-height: 60px;
        }

        .item i {
            margin-right: 15px;
        }

        .menu-btn {
            
            color: #fff;
            font-size: 250%;
            cursor: pointer;
            
        }

        .side-bar.active {
            left: 0;
        }
    </style>
</head>
<body>
      <div>
             <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>

    <div class="side-bar">
        <!-- header section -->
        <header>
            <!-- close button -->
            <div class="close-btn">
                <i class="fas fa-times"></i>
            </div>
            <h1>MENU</h1>
        </header>
        <!-- menu item -->

        <div class="menu">
            <div class="item"><a href="../HTML/home.php"><i class="fas fa-home"></i>Home</a></div>
            <div class="item"><a href="#"><i class="fas fa-th"></i>Analytics</a></div>
              <div class="item"><a href='../HTML/profile.php'><i class="fas fa-user"></i>Profile</a></div>
            <div class="item"><a href="../HTML/history.php"><i class="fa-solid fa-clock-rotate-left"></i>Order History</a></div>
            <div class="item"><a href="../Includes/logout.php"><i class="fas fa-sign-out">Log Out</i></a></div>
        </div>

    </div>
    <div class="headti">
        <h1>DASHBOARD</h1>
    </div>
    <br>
    <div class="gallery-container">
        <button class="gallery-itembtn"><img class="gallery-item " src="../images/admin/add items.jpg" onclick="goToPage('adminItem.php')"></button>
        <button class="gallery-itembtn"><img class="gallery-item " src="../images/admin/viwe all item.jpg" onclick="goToPage('allItems.php')"></button>
        <button class="gallery-itembtn"> <img class="gallery-item " src="../images/admin/last reg customer.jpg" onclick="goToPage('lastRegCustomers.php')"></button>
        <button class="gallery-itembtn"><img class="gallery-item " src="../images/admin/View All customers.jpg" onclick="goToPage('viewAllCustomers.php')"></button>
        <button class="gallery-itembtn"><img class="gallery-item " src="../images/admin/View All orders.jpg" onclick="goToPage('viewOrders.php')"></button>
        
    </div>

<script>
    function goToPage(pageUrl) {
      // Navigate to the specified page in the same window
      window.location.href = pageUrl;
    }
  </script>
</body>
</div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.menu-btn').click(function() {
                    $('.side-bar').addClass('active');
                    $('.menu-btn').css("visibility", "hidden");
                });

                //close button

                $('.close-btn').click(function() {
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css("visibility", "visible");
                });
            })
        </script> 
</html>
<?php
}
else{
  header("Location: LoginPage.php?error=Authomtication Error. Your Accessing credentials");
    exit();
}
?>
