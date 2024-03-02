 <?php 
    session_start();
        require_once '../includes/dbh.inc.php';
        $sql="select * from userlogin where id='$_SESSION[userid]' ";
        $result=mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $name = $row["userName"];
                $name = $row["fullName"];
                $birthday = $row["birthday"];
                $gender = $row["gender"];
                $phoneNumber = $row["phoneNumber"];
                $address = $row["address"];
                $email = $row["userEmail"];
               
            }   
            }  
?>
<!DOCTYPE html>
<html>
<head>

  <title>Checkout Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
      color: #fff;
    }

    .details {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .contact {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .location {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .location2 {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .lines {
      justify-content: left;
    }

    .row {
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .form-container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(236, 240, 7, 0.877);
    }

    .heading {
      color: orangered;
      text-align: center;
    }

    .details, .contact, .location, .cards {
      margin-bottom: 20px;
    }

    label {
      padding-left: 10px;
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input[type="text"], select {
      width: 240px;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .cards img {
      margin-right: 10px;
    }

    .cbtn {
      margin-top: 10px;
      background-color: rgb(0, 0, 0);
      color: rgb(255, 255, 255);
      padding: 12px;
      border: none;
      width: 100%;
      border-radius: 23px;
      cursor: pointer;
      font-size: 17px;
    }

    .cbtn:hover {
      background-color: rgb(255, 255, 255);
      color: rgb(0, 0, 0);
      box-shadow: 0 0 10px 7px cyan;
    }

    .same {
      font-size: 16px;
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <div class="row">
    <h1>Checkout Form</h1>
  </div>

  <div class="form-container">
    <form action="../includes/checkout.inc.php" method="POST">
      <div class="heading">
        <h2>Billing Address</h2>
      </div>

      <table>
        <tr>
          <td><label for="fname" ><b>First Name:</b></label></td>
          <td><input type="text" id="fname" name="firstname" placeholder="Enter your first Name" value="<?php echo  $name ?>" required></td>
          <td><label for="lname"><b>Last Name:</b></label></td>
          <td> <input type="text" id="lname" name="lastname" placeholder="Enter your Lastname Name"></td>
        </tr>

        <tr>
          <td> <label for="email"><b>Email:</b></label></td>
          <td><input type="text" id="email" name="email" placeholder="Email address" value="<?php echo $email ?>" required></td>
          <td>  <label for="tele"><b>Telephone:</b></label></td>
          <td> <input type="text" id="tele" name="tele" placeholder="Telephone number" value="<?php echo $phoneNumber ?>" required></td>
        </tr>

        <tr>
          <td><label for="adr"><b>Address:</b></label></td>
          <td> <input type="text" id="adr" name="address" placeholder="Address" value="<?php echo $address ?>"required></td>
          <td><label for="city"><b>City:</b></label></td>
          <td><input type="text" id="city" name="city" placeholder="your City" required></td>
        </tr>

        <tr>
          <td> <label for="district"><b>District:</b></label></td>
          <td> 
            <select name = "district" id="district" required>
              <option value="Ampara">Ampara</option>
              <option value="Anuradhapura">Anuradhapura</option>
              <option value="Badulla">Badulla</option>
              <option value="Batticaloa">Batticaloa</option>
              <option value="Colombo">Colombo</option>
              <option value="Galle">Galle</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambantota">Hambantota</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Kaluthara">Kaluthara</option>
              <option value="Kandy">Kandy</option>
              <option value="Kegalle">Kegalle</option>
              <option value="Kilinochchi">Kilinochchi</option>
              <option value="Kurunegala">Kurunegala</option>
              <option value="Mannar">Mannar</option>
              <option value="Mathale">Mathale</option>
              <option value="Matara">Matara</option>
              <option value="Monaragala">Monaragala</option>
              <option value="Mullaitivu">Mullaitivu</option>
              <option value="Nuwara-Eliya">Nuwara-Eliya</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
              <option value="Puththalam">Puththalam</option>
              <option value="Rathnapura">Rathnapura</option>
              <option value="Trincomalee">Trincomalee</option>
              <option value="Vavuniya">Vavuniya</option>
            </select></td>
          <td><label for="post"><b>Postcode:</b></label></td>
          <td><input type="text" id="post" name="post" placeholder="Postcode" required></td>
        </tr>
      </table>

        
      

      <div class="heading">
        <h2>Payment</h2>
      </div>

      <label for="fname"><b>Accepted Cards:</b></label>
      <div class="cards">
        <input type="radio" name="ctype" value="visa"><img src="C:\Users\ACER\Pictures\Mini Project\visa card.png" alt="Visa Card" width="50" height="50">
        <input type="radio" name="ctype" value="mastercard"><img src="C:\Users\ACER\Pictures\Mini Project\master card.png" alt="Master Card" width="50" height="45">
      </div>

      <br>

      <label for="cname"><b>Name on Card:</b></label>
      <input type="text" id="cname" name="cardname" placeholder="Name " required>
      <br>

      <label for="ccnum"><b>Credit card number:</b></label>
      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
      <br>

      <label for="expmonth"><b>Exp Month/Year:</b></label>
      <input type="text" id="expmonth" name="expmonth" placeholder="MM/YY" required>
      <br>

      <label for="cvv"><b>CVV:</b></label>
      <input type="text" id="cvv" name="cvv" placeholder="xxx" required>
      <br>

      

      <button type="submit" class="cbtn" name="submit">Continue to checkout</button>
    </form>
  </div>
</body>
</html>
