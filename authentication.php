<?php
session_start();
if(!isset($_SESSION['user_id'])){ //if login in session is not set
    header('location:login.php');
}
$host = "localhost";
$user = "root";
$password = "";
$db = "farm";

$data = mysqli_connect($host, $user, $password, $db);
if ($data == false) {
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SeedCode = $_POST['SeedCode'];

    $sql = "select * from products where Seed_Code = '$SeedCode'";
    $result = mysqli_query($data, $sql);


    if ($result) {
        $row  = mysqli_fetch_array($result);
        if ($row ) {
            if ($row[5] == 0){
                $sql = "update  products set Used=1 where Seed_Code = '$SeedCode'";
                $result = mysqli_query($data, $sql);
                echo "Valid Seed";

            }
            else{
            echo "Code alread used";
            }
            
        }
    } else {
        echo "Invalid Seed. Do not purchase";
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
                <li><a href='farmerlog.php'>Home</a></li>
                <li><a href='Agronomy Tips.php'>Agronomy Tips</a></li>
                <li><a href='contactus.html'>Contact Us</a></li>
                <li><a href='logout.php'>logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="main-content">

        <center>
            <span>
                <div class="verification">
                    <form class="reg_f" action="#" method="POST">
                        <label>Enter Seed Code</label>
                        <input type="text" name="SeedCode" required>
                        <br><br>
                        <button type="submit" value="submit" class="submitButton">Submit</button>
                        <button type="reset">Clear</button>
                    </form>
                </div>
            </span>
        </center>

    </div>

    <div class="main-footer">
        <span>
            Powered by Ndegwa 2022
        </span>
    </div>
</body>

</html>