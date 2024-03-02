 <!-- header -->
    <?php
        include_once 'header.php';
    ?>

<!-- header -->


    <link rel="stylesheet" href="../css/1.css" >

    <script src="../js/LoginScript.js"></script>

   <!-- <style>.homeHero-body {
            position: relative;
            height: 100vh;
        }
    
        .background-image {
            background-image: url('../images/login.jpg');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity:.5 ;
        }
        .form-container {
    background: none;
    width: 400px;
    height: 500px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0;
    overflow: hidden;
    position: absolute;
        top: 40%;
        left: 70%;
        transform: translate(-50%, -50%);
        z-index: 1;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
}
        </style> -->

    <!-- Login page -->
    <div class="account-page"> 
        <div class="container-1">
            <div class="row">
                <div class="col-2">
                    
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>

                        <form id="loginForm" action="../includes/login.php" method="post">
                            <input type="text" id="uname" class="input-field" name="uid" placeholder="Username">
                            <input type="password" id="upwd" class="input-field" name="pwd" placeholder="password">
                            <button name="submit" type="submit" class="btn" >Login</button>
                            <a href="">Forgot Password</a><br>
                            Don't have an account? <a style="color:blue;" onclick="register()" style>Sign up </href></a>
                        </form>

                        <form id="registerForm" action="../includes/signin.php" method="post">
                            <input type="text" id="uname" class="input-field" name="uid" placeholder="Username">
                            <input type="email" id="umail" class="input-field" name="uemail" placeholder="Email">
                            <input type="password"  id="upwd" class="input-field"name="pwd" placeholder="password">
                            <input type="password"  id="rupwd" class="input-field" name="rpwd" placeholder="Re enter password">
                            <button name="submit" type="submit" class="btn">Signin</button>
                            Already have an account? <a style="color:blue;" onclick="login()" style>Sign In</href></a>
                        </form>

                        <!-- <?php
                       
                        
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyinput"){
                                    echo '<div class="alert" ><span class="closebtn" onclick="closeAlert(); this.parentElement.style.display=\'none\';">&times;</span>Fill in the All Fields....</strong></div>';
                                }
                            
                                else if($_GET["error"] == "invaliduid"){
                                    echo '<div class="alert"><span class="closebtn" onclick="closeAlert(); this.parentElement.style.display=\'none\';">&times;</span>Invalid <strong>User Name</strong></div>';
                                }
                            
                                else if($_GET["error"] == "invalidemail"){
                                    echo '<div class="alert"><span class="closebtn" onclick="closeAlert(); this.parentElement.style.display=\'none\';">&times;</span>Invalid <strong>User Email</strong></div>';
                                }
                            
                                else if($_GET["error"] == "passwordNotMaching"){
                                    echo '<div class="alert"><span class="closebtn" onclick="closeAlert(); this.parentElement.style.display=\'none\';">&times;</span>Password Not Matching</div>';
                                }
                            
                                else if($_GET["error"] == "uidalreadyExcist"){
                                    echo '<div class="alert"><span class="closebtn" onclick="closeAlert(); this.parentElement.style.display=\'none\';">&times;</span>Already Registered you....</div>';
                                }
                                else if($_GET["error"] == "stmtfailed"){
                                    echo '<div class="alertSuccess"><span class="closebtn"  onclick="login(); this.parentElement.style.display=\'none\';">&times;</span>Contact the developer</div>';
                                }
                                else if($_GET["error"] == "wronglogin"){
                                    echo '<div class="alertSuccess"><span class="closebtn"  onclick="login(); this.parentElement.style.display=\'none\';">&times;</span>User name or Password Error</div>';
                                }
                                
                            }
                        
                        ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- login -->

     <!-- Footer --> 
     <?php
        include_once 'footer.php';
    ?>
     <!-- Footer -->
