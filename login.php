<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "farm";

$data = mysqli_connect($host, $user, $password, $db);
if ($data == false) {
    die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $_POST['user'];

    if ($user == "farmer"){
        $sql = "select * from registration where email = '" . $email . "' AND password = '" . $password . "' ";
        }
        else{
            $sql = "select * from companies where email = '" . $email . "' AND password = '" . $password . "' ";
        }


    $result = mysqli_query($data, $sql);

    $row  =  mysqli_fetch_row($result);

    if ($result && $row) {
        $_SESSION['user_id'] = $row[0];
        if ($user == "farmer"){
            header('location:farmerlog.php');
        } else {
            $_SESSION['company_name'] = $row[1];
            header('location:display.php');
        }
    } else {
        echo "Incorrect password or username";
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

                    <div class="login_form">

                        <br><br>

                        <form action="#" method="POST">

                            <div>
                                <h1>Login Form</h1>

                                <label>Email</label>
                                <input type="text" name="email" autocomplete="off" required>

                                <br>
                                <div>
                                    <label>Type of user </label>
                                    <br>
                                    <select name="user" id="user" required>

                                        <option value="">Select User Type</option>
                                        <option value="farmer">farmer</option>
                                        <option value="company">company</option>
                                    </select>
                                    
                                </div>
                                <br>
                                <div>
                                    <label>Password</label>
                                    <input type="password" name="password" autocomplete="off" required>
                                </div>
                                <br>

                                <div class="submit">
                                    <button type="submit">Login</button>

                                </div>
                            </div>
                        </form>
                        <h2>Dont have an account? Register <a href="registration.php">Here</a>
                            <h2>

                    </div>


                </span>
            </center>
        </div>
    </div>


    <div class="main-footer">
        <span>
            Powered by Ndegwa 2022
        </span>
    </div>
</body>

</html>