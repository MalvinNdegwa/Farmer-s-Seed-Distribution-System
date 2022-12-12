<?php
session_start();
if(!isset($_SESSION['user_id'])){ //if login in session is not set
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            table,th,td{
                border: 1px solid black;
            }
        </style>

    </head>

    <body>
    <div class="navigation-bar">
            <nav>
                <ul id='MenuItems'>
                    <li><a href='farmerlog.php'>Home</a></li>
                    <li><a href='authentication.php'>Verify Seed</a></li>
                    <li><a href='contactus.html'>Contact Us</a></li>
                    <li><a href='logout.php'>Logout</a></li>
                </ul>
            </nav>
    </div>

<div class="main-content">
    <div>
        <center>
        <table class="content-table">
        <thead>
            <tr>
            <th>Crop</th>
            <th>Variety</th>
            <th>Maturity</th>
            <th>Optimum Region</th>
            <th>Special Attributes</th>
        </tr>
        </thead>
        <tbody>
            <tr>
            <td>1.Maize</td>
            <td>H614D</td>
            <td>160- 210 Days</td>
            <td>
                High rainfall areas such as:
                <br>
                1.Kakamega
                <br>
                2.Muranga
                <br>
                3.Trans Nzoia
                <br>
                4. Uasin Gishu
                <br>
                5.Nandi
                <br>
                6.Nakuru
                <br>
                7.Molo

            </td>
            <td>
                1. Highlands Variety
                <br>
                2. Sweet Tasting Variety
                <br>
                3. Has good density
                <br>
                4. Has long storage period
                <br>

            </td>
        </tr>
        <tr>
            <td>2.Maize</td>
            <td>H628</td>
            <td>150 - 180 Days</td>
            <td>
                High rainfall areas such as:
                <br>
                1.Kakamega
                <br>
                2.Muranga
                <br>
                3.Trans Nzoia
                <br>
                4. Uasin Gishu
                <br>
                5.Nandi
                <br>
                6.Nakuru
                <br>
                7.Molo

            </td>
            <td>
                1. Highlands Variety
                <br>
                2. Has Heavy White grains
                <br>
                3. High yield resistant to blight and GLS flint
                <br>

            </td>
        </tr>
        <tr>
            <td>3.Maize</td>
            <td>H9401</td>
            <td>160 - 190 Days</td>
            <td>
                High rainfall areas such as:
                <br>
                1.Kakamega
                <br>
                2.Muranga
                <br>
                3.Trans Nzoia
                <br>
                4. Uasin Gishu
                <br>
                5.Nandi
                <br>
                6.Nakuru
                <br>
                7.Molo

            </td>
            <td>
                1. High yielder
                <br>
                2. Good storage qualities
                <br>
                3. Resistant to lodging ear rot, rust, GLS, stem and leaf blight 
                <br>

            </td>
        </tr>
        <tr>
            <td>4.Maize</td>
            <td>DHO1</td>
            <td>70 days</td>
            <td>
                Arid and marginal regions of altitude range 500 - 1000m such as:
                <br>
                1.West Pokot
                <br>
                2.Krio Valley
                <br>
                3.Nyanza
                <br>

            </td>
            <td>
                1. Early and stay Green
                <br>
                2. Tolerant to blight and rust
                <br>

            </td>
        </tr>
        <tr>
            <td>5.Maize</td>
            <td>DHO2</td>
            <td>70 - 100 days</td>
            <td>
                Arid and marginal regions of altitude range 500 - 1000m such as:
                <br>
                1.West Pokot
                <br>
                2.Krio Valley
                <br>
                3.Nyanza
                <br>

            </td>
            <td>
                1. Suitable for arid and semi arid areas
                <br>
                2. Early tolerant to moisture stress and M.S.V
                <br>

            </td>
        </tr>
        <tr>
            <td>6.Maize</td>
            <td>DHO4</td>
            <td>75 - 100 days</td>
            <td>
                Arid and marginal regions of altitude range 500 - 1000m such as:
                <br>
                1.West Pokot
                <br>
                2.Krio Valley
                <br>
                3.Nyanza
                <br>

            </td>
            <td>
                1. Short drought tolerance
                <br>
                2. Good husk cover and stand-ability
                <br>

            </td>
        </tr>
        <tr>
            <td>7.Beans</td>
            <td>GLP 92 Mwitemania</td>
            <td>90 - 95 days</td>
            <td>
                Prefers medium altitude

            </td>
            <td>
                1. Tolerant to drought
                <br>
                2. Tolerant to halo blight
                <br>

            </td>
        </tr>
        <tr>
            <td>8.Beans</td>
            <td>GLP 2 Rose coco</td>
            <td>75 -  90 days</td>
            <td>
                Prefers medium altitude

            </td>
            <td>
                1. Tolerant to bean common mosaic virus
                <br>
                2. Tolerant to anthracnose
                <br>

            </td>
        </tr>
        <tr>
            <td>9.Beans</td>
            <td>GLP 1004 Mwezi moja</td>
            <td>80 -  90 days</td>
            <td>
                Performs best in warmer areas 

            </td>
            <td>
                1. Well adapted for planting during short rains
                <br>


            </td>
        </tr>
        <tr>
            <td>10.Beans</td>
            <td>Wairimu Dwarf</td>
            <td>70 days</td>
            <td>
                Performs well in most ecological zones but suited to medium and dry areas 

            </td>
            <td>
                1. Excellent eating quality
                <br>
                2. Good for Intercropping
                <br>

            </td>
        </tr>
        <tr>
            <td>11.Wheat</td>
            <td>Ks Mwamba</td>
            <td>125 days</td>
            <td>
                Suited for altitude range 1800- 2400m
                <br>
                Widely adapted to east african conditions  in regions such as:
                <br>
                1.Trans - Nzoia
                <br>
                2.Uasin Gishu
                <br>
                3.Laikipia 
                <br>
                4. Narok
                <br>
                5. Mt.Kenya areas
                <br>

            </td>
            <td>
                1. High Yielding
                <br>
                2. Tolerant to field stress conditions
                <br>

            </td>
        </tr>
        <tr>
            <td>12.Wheat</td>
            <td>Ks Farasi</td>
            <td>119 days</td>
            <td>
                Suited for altitude range 1800- 2400m
                <br>
                High recommended for:
                <br>
                1.Samburu
                <br>
                2.Nakuru
                <br>
                3.Narok
                <br>
                4. Subukia
                <br>
                5. Mt.Kenya areas
                <br>
                6. Laaikipia West
                <br>

            </td>
            <td>
                1. Tolerant to most foliar diseases
                <br>
                2. Good baking quality
                <br>
                3.High Yielding
                <br>

            </td>
        </tr>
        <tr>
            <td>13.Wheat</td>
            <td>Ks Simba</td>
            <td>119 days</td>
            <td>
                Suited for altitude range 1800- 2400m
                <br>
                High recommended for:
                <br>
                1.Kericho
                <br>
                2.Nakuru
                <br>
                3.Narok
                <br>
                4. Trans - Nzoia
                <br>
                5. Mt.Kenya areas
                <br>
                6. Laaikipia West
                <br>
                7. Bomet
                <br>

            </td>
            <td>
                1. Good tillering ability
                <br>
                2. Good baking quality
                <br>

            </td>
        </tr>
        <tr>
            <td>14.Sorghum</td>
            <td>Serena</td>
            <td>3 - 4 months </td>
            <td>
                Performs well in moist mid altitude regions and semi arid lowlands
            </td>
            <td>
                1. Long stem and good root system
                <br>
                2. It is fairly tolerant to striga, rust, leaf blight, and grey leaf spot
                <br>

            </td>
        </tr>
        <tr>
            <td>15.Sorghum</td>
            <td>Seredo</td>
            <td>3 - 4 months </td>
            <td>
                Performs well in moist mid altitude regions and semi arid lowlands
            </td>
            <td>
                1. Widely adaptable
                <br>
                2. Good tolerance to lodging
                <br>

            </td>
        </tr>
        <tr>
            <td>16.Sorghum</td>
            <td>Gadam</td>
            <td>3 months</td>
            <td>
                Performs well  lowland to medium altitude
            </td>
            <td>
                1. Whitish in colour
                <br>
                2. Excellent malting qualities
                <br>
                3. Good for human consumption (Uali)

            </td>
        </tr>
        <tr>
            <td>17.Sorghum</td>
            <td>E 1291</td>
            <td>5 months</td>
            <td>
                Performs well in the cool semi arid areas highlands of:
                <br>
                1.Baringo
                <br>
                2.Nakuru
                <br>
                3.Laikipia
                <br>
                4. Trans - Nzoia
                <br>
                5. Naivasha
                <br>
                6. Laikipia 
                <br>
                7. Taita Taveta
                <br>
                8. Kericho
                <br>
                9.Kuria
                <br>
                10. Trans Mara

            </td>
            <td>
                1. Good for silage making
                <br>
                2. Good beverage quality
                <br>

            </td>
        </tr>
        </table>
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