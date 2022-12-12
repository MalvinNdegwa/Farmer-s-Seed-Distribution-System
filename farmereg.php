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
$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set form variables
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $password        = $_POST["password"];


    $sql = "update  registration set First_Name='$first_name', Last_Name='$last_name',Password='$password' where id='$user_id'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data inserted successfully";
        header('location:website.html');
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
                            <h1> COMPLETE REGISTRATION </h1>

                        </div>

                        <form class="reg_f" action="#" method="POST">
                            <label>First Name</label>
                            <input type="text" name="first_name" required>
                            <br><br>

                            <label>Last Name</label>
                            <input type="text" name="last_name" required>
                            <br><br>

                            <label>Enter Password</label>
                            <input type="password" name="password" class="password" required>
                            <br><br>

                            <label>Confirm password</label>
                            <input type="password" name="confirm password" class="confirmPassword" required>
                            <br><br>

                            <button type="submit" value="submit" class="submitButton">Submit</button>
                            <button type="reset">Clear</button>
                            <br><br>
                            <button><a href="registration.php">Back</a></button>
                            <br>
                    </div>
        </div>
    </div>
    </form>
    </span>
    </center>
    </div>
    </div>
    <script>
        document.querySelector('.submitButton').onclick = function() {
            var password = document.querySelector('.password').value,
                Confirmpassword = document.querySelector('.confirmPassword').value;

            if (password != Confirmpassword) {
                alert("Password Did not Match");
                return false
            }
        }
    </script>
   
    <div class="main-footer">
        <span>
            Powered by Ndegwa 2022
        </span>
    </div>
</body>

</html>