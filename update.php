<?php
include 'connectcrud.php';
$Number = $_GET['updateid'];

$sql = "select * from products where id = $Number";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$TypeofSeed = $row['Type_of_Seed'];
$VarietyofSeed = $row['Variety_of_Seed'];
$SeedCode = $row['Seed_Code'];

if (isset($_POST['submit'])) {
    $TypeofSeed = $_POST['TypeofSeed'];
    $VarietyofSeed = $_POST['VarietyofSeed'];
    $SeedCode = $_POST['SeedCode'];

    $sql = "update products set Type_of_Seed= '$TypeofSeed', Variety_of_Seed= '$VarietyofSeed', Seed_Code= '$SeedCode'
     where id = $Number";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Updated successfully";
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
    <div class="updatedetails ">
        <h1> Update details form</h1>
        <form method="post" name="form1" id="form1">
            <div class="form-group">
                <label>Type of Seed</label>
                <br><br>
                <input type="text" class="form-control" placeholder="Enter the type of seed" name="TypeofSeed" autocomplete="off" value=<?php echo $TypeofSeed; ?>>

            </div>
            <br>
            <div class="form-group">
                <label>Variety of Seed</label>
                <br><br>
                <input type="text" class="form-control" placeholder="Enter the variety of seed" name="VarietyofSeed" autocomplete="off" value=<?php echo $VarietyofSeed; ?>>

            </div>
            <br>
            <div class="form-group">
                <label>Seed Code</label>
                <br><br>
                <input type="text" class="form-control" placeholder="Enter the code of the seed" name="SeedCode" autocomplete="off" value=<?php echo $SeedCode; ?>>

            </div>
            <br><br>
            <button type="submit" name="submit"> Update</button>
            <button type="reset"> Clear</button>

            <li><a href="display.php">Home</a></li>

        </form>

    </div>

</body>

</html>