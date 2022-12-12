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

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <div class="navigation-bar">
        <nav>
            <ul id='MenuItems'>
                <li><a href='farmerlog.php'>Home</a></li>
                <li><a href='Agronomy Tips.php'>Agronomy Tips</a></li>
                <li><a href='authentication.php'>Verify Seed</a></li>
                <li><a href='contactus.html'>Contact Us</a></li>
                <li><a href='logout.php'>Logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <div>
            <center>
                <div class="makeorder">
                    <h1>WELCOME FARMER</h1>
                    <br><br>
                    <button><a href="orders.php">Make Order</a></button>
                    <br><br>
                    <h2>Current Orders </h2>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>County</th>
                                <th>Sub_County</th>
                                <th>Ward</th>
                                <th>Type of Crop</th>
                                <th>Number Of Bags</th>
                                <th>Seed Company</th>
                                <th>Delivery Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Farmer_id = $_SESSION['user_id'];

                            $sql = "select * from orders where Farmer_id = $Farmer_id";
                            $result = mysqli_query($data, $sql);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $County =  $row['County'];
                                    $Number = $row['id'];
                                    $SubCounty =  $row['SubCounty'];
                                    $Ward =  $row['Ward'];
                                    $Type_of_crop = $row['Type_of_Crop'];
                                    $No_of_bags =  $row['No_of_bags'];
                                    $SeedCompany =  $row['SeedCompany'];
                                    if ($row['DeliveryStatus'] == 1) {
                                        $DeliveryStatus = 'Delievered';
                                    } else {
                                        $DeliveryStatus = 'Not Delievered';
                                    }

                                    echo '<tr> 
                        <td>' . $County . '</td>
                        <td>' . $SubCounty . '</td>
                        <td>' . $Ward . '</td>
                        <td>' . $Type_of_crop . '</td>
                        <td>' . $No_of_bags . '</td>
                        <td>' . $SeedCompany . '</td>
                        <td>' . $DeliveryStatus . '</td>
                        <td>
                        <button><a href="order_update.php? updateid=' . $Number . '"> Confirm Delivery</a></button>
                        </td>
                                </tr>';
                                }
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
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