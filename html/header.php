<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
        <link rel="stylesheet" href="../css/navebar.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
       
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

        
        @media only screen and (max-width:800px) {
        .carts {
            display: none;
          }
    
          .invisible-button{
                display: none;
            }

            
        }
    
        @media(max-width:450px) {
          .carts {
              display: none;
            }

            .invisible-button{
                display: none;
            }

            .icon-cart{
                display: none;
            }
        }
    </style>

  </head>
  <body>
    <!-- header 1-->
    <header class="header1">
      <div class="container-h">
        <div class="navbar">

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
          </div>

          <div class="logo">
            <a href="home.php"
              ><img
                src="../images/logo 4.png"
                width="55px"
                alt="Logo Not Found"
            /></a>
          </div>

          

          <nav>
            <ul>
                
                    <li>
                          <form class="carts" action="search.php" method="POST">
                              <li>
                                  <input
                                    type="text"
                                    class="search"
                                    name="search"
                                    placeholder="Search Products..."
                                />
                              </li>
                              <li>
                                
                                  <button type="submit" name="submit" class="invisible-button"><img src="../images/icon/search.png" width="35px"  class="carts"/></button>
                              </li>
                          </form>
                    </li>
                    <li>
                        <div class="iconcart">
                        
                              <a href="cart.php"><img src="../images/icon/cart.png" width="35px"/></div></a>
                    </li>
                
                
        
                <?php
                                  if (isset( $_SESSION["username"])) {
                                      echo '<li><a id="RegisterdUser" href="profile.php?id='. $_SESSION["userid"] .'">Hello '. $_SESSION["username"] . ' !  <img src="../images/icon/login.png" width="35px" /></a></li>';
                                  } else {
                                    echo '<li><a id="User" href="Loginpage.php">Hello User !<img src="../images/icon/login.png" width="35px" /></a></li>';
                                  }
                          ?> 
                          <li>
                           
                          </li>
              </ul>
          </nav>
        </div>
        
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
        
    <!-- header 1-->
  
