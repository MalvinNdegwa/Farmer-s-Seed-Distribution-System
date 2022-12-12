<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "farm";

$con = new mysqli('localhost', 'root', '', 'farm');
if (!$con) {
  die(mysqli_error($con));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Set form variables
  $email = $_POST["email"];
  $tel_number = $_POST["tel_number"];
  $user = $_POST["user"];


  if ($user == "farmer") {


    $sql = "insert into registration ( Telephone_Number, Email, User_Type) values (
    '$tel_number','$email', '$user')";
  } else {
    $sql = "insert into companies (Email,Telephone_Number,User_Type) values ('$email','$tel_number','$user') ";
  }

  $result = mysqli_query($con, $sql);
  if ($result) {
    $user_id = mysqli_insert_id($con);
    $_SESSION['user_id'] = $user_id;
    echo "Data inserted successfully";
    if ($user == "farmer") {
      header('location:farmereg.php');
    } else {
      header('location:companyreg.php');
    }
  } else {
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">


</head>

<body>
  <div class="navigation-bar">
    <nav>
      <ul id='MenuItems'>
        <li><a href='website.html'>Home</a></li>
        <li><a href='Agronomy Tips.php'>Agronomy Tips</a></li>
        <li><a href='authentication.php'>Verify Seed</a></li>
        <li><a href='Aboutus.html'>About Us</a></li>
        <li><a href='contactus.html'>Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <div class="main-content">
    <div>
      <center>
        <span>
          <div class="regcontainer">
            <div class="header">
              <h1> REGISTRATION DETAILS</h1>

            </div>

            <form class="reg_f" action="#" method="POST">

              <label>Telephone number</label>
              <input type="text" name="tel_number" required>
              <br><br>

              <label>Email</label>
              <input type="text" name="email" required>
              <br><br>

              <label>Type of user </label>
              <select name="user" id="user" required>

                <option value="">Select User Type</option>
                <option value="farmer">farmer</option>
                <option value="company">company</option>
              </select>
              <br><br>

              <button type="submit" value="submit" class="submitButton">Proceed</button>
              <button type="reset">Clear</button>
              <br>
          </div>
    </div>
  </div>
  </form>
  </span>
  </center>

  <div class="main-footer">
    <span>
      Powered by Ndegwa 2022
    </span>
  </div>
</body>

</html>