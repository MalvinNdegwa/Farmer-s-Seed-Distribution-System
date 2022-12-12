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

$farmer_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set form variables
    $county = $_POST["county"];
    $subcounty = $_POST["subcounty"];
    $ward = $_POST["ward"];
    $crop = $_POST["crop"];
    $amount = $_POST["amount"];
    $company = $_POST["company"];


   
 $sql = "insert into orders ( County, SubCounty, Ward,Type_of_Crop,No_of_bags,SeedCompany,Farmer_id ) values ('$county','$subcounty', '$ward',
 '$crop','$amount','$company', '$farmer_id')";

    

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data inserted successfully";
        header('location:farmerlog.php');
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
    <div class="regcontainer">
        <div class="header">
            <h1> MAKE ORDER </h1>

        </div>

        <form class="reg_f" action="#" method="POST">
            <label>County</label>
            <select name="county" id="county" required>
                <option value="" selected="selected">Select county</option>
            </select>
            <br><br>

            <label>Sub-county</label>
            <select name="subcounty" id="subcounty" required>
                <option value="" selected="selected">Please select county first</option>
            </select>
            <br><br>


            <label>Ward</label>
            <select name="ward" id="ward" required>
                <option value="" selected="selected">Please select Sub-county first</option>
            </select>
            <br><br>

            <label>Type of crop</label>
            <select name="crop" id="crop" required>
                <option value="">Select</option>
                <option value="Maize">Maize</option>
                <option value="Beans">Beans</option>
                <option value="Irish Potato">Irish Potato</option>
                <option value="Wheat">Wheat</option>
                <option value="Sorghum">Sorghum</option>
            </select>
            <br><br>

            <label>Number of bags</label>
            <input type="text" name="amount" required>
            <br><br>

            <label>Seed Company</label>
            <select name="company" required>
                <option value="" selected="selected">Select Preferred Seed Company</option>
                <option value="SimlawSeeds">Simlaw Seeds</option>
                <option value="KenyaSeed">Kenya Seed</option>
                <option value="SeedCoGroup">Seed Co Group</option>
            </select>
            <br><br>

            <button type="submit" value="submit" class="submitButton">Submit</button>
            <button type="reset">Clear</button>
            <br><br>
            <button><a href="farmerlog.php">Back</a></button>
            <br>
    </div>
    <script>
        var countyObject = {
            "Nakuru": {
                "Molo": ["Mariashoni", "Elburgon", "Turi", "Molo"],
                "Njoro": ["Mau Narok", "Mauache", "Kihingo", "Nessuit", "Lare", "Njoro"],
                "Naivasha": ["Biashara", "Hells Gate", "Lake View", "Maiella", "Mai Mahiu", "Olkaria", "Naivasha East", "Viwandani"],
                "Gilgil": ["Gilgil", "Elementaita", "Mbaruk", "Malewa West", "Murindati"],
                "Kuresoi South": ["Amalo", "Keringet", "Kiptagich", "Tinet"],
                "Kuresoi North": ["Kiptororo", "Nyota", "Sirikwa", "Kamara"],
                "Subukia": ["Subukia", "Waseges", "Kabazi"],
                "Rongai": ["Menengai West", "Soin", "Visoi", "Mosop", "Solai"],
                "Bahati": ["Dundori", "Kabatini", "Kiamaina", "Lanet", "Bahati"],
                "Nakuru Town West": ["Barut", "London", "Kaptembwo", "Kapkures", "Rhoda", "Shaabab"],
                "Nakuru Town East": ["Biashara", "Kivumbini", "Flamingo", "Menengai", "Nakuru East"]
            }
        }
        window.onload = function () {
            var countySel = document.getElementById("county");
            var subcountySel = document.getElementById("subcounty");
            var wardSel = document.getElementById("ward");
            for (var x in countyObject) {
                countySel.options[countySel.options.length] = new Option(x, x);
            }
            countySel.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                subcountySel.length = 1;
                wardSel.length = 1;
                //display correct values
                for (var y in countyObject[this.value]) {
                    subcountySel.options[subcountySel.options.length] = new Option(y, y);
                }
            }
            subcountySel.onchange = function () {
                //empty Chapters dropdown
                wardSel.length = 1;
                //display correct values
                var z = countyObject[countySel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    wardSel.options[wardSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }
    </script>
</body>

</html>