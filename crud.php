<?php
session_start();
include 'connectcrud.php';

$user_id = $_SESSION['user_id'];

if (isset($_POST['submit'])) {

    $TypeofSeed = $_POST['TypeofSeed'];
    $VarietyofSeed = $_POST['VarietyofSeed'];
    $SeedCode = $_POST['SeedCode'];

    $sql = "insert into products (Type_of_Seed,Variety_of_Seed,Seed_Code,Company_id) 
    values('$TypeofSeed','$VarietyofSeed','$SeedCode', '$user_id')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}


?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Crud</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="adddetails ">
        <h1> Add details form</h1>
        <form method="post" name="form1" id="form1">
            <div>
                <label>Type of Seed</label>
                <br><br>
                <input type="text" class="form-control" placeholder="Enter the type of seed" name="TypeofSeed" autocomplete="off">

            </div>
            <br>
            <div>
                <label>Variety of Seed</label>
                <br><br>
                <input type="text" class="form-control" placeholder="Enter the variety of seed" name="VarietyofSeed" autocomplete="off">

            </div>
            <br>
            <div>
                <label>Seed Code</label>
                <br><br>
                <input type="text" class="form-control" placeholder="Enter the code of the seed" name="SeedCode" autocomplete="off">

            </div>
            <br><br>
            <button type="submit" name="submit"> Submit</button>
            <button type="reset" name="clear"> clear</button>
            <li><a href="display.php">Home</a></li>

        </form>

    </div>

</body>

</html>