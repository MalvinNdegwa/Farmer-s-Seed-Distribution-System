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
    <meta charset="UTF-8">
    <title>Company Orders</title>
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
    <div>
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
                </tr>
            </thead>
            <tbody>
                <?php
                $company_name = $_SESSION['company_name'];

                $sql = "select * from orders where SeedCompany = '$company_name'";
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
            </tr>';
                    }
                }
                ?>
            </tbody>

        </table>
    </div>
    <button><a href="display.php">BACK</a></button>
</body>

</html>