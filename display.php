<?php
session_start();
include 'connectcrud.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .main-footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }

        .display {
            /* background-color: #009879; */
            max-width: 500px;
            width: 100%;
            margin: 20px auto;
            background-color: white;
            padding: 0 10px;
            padding: 30px;
        }

        body {
            background-color: #009879;
            max-width: 500px;
            width: 100%;
            margin: 20px auto;
            padding: 0 10px;
            padding: 30px;
        }

        button {
            width: 100px;
            height: 50px;
            border: none;
            color: white;
            background-color: #009879;
            cursor: pointer;
        }

        input {
            font-size: 16px;
            width: 100%;
            padding: 15px 10px;
            border: 0;
            outline: black;
            border-radius: 5px;
            border: 1px solid black;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <title>display</title>
</head>
<center>

    <body>
        <div class="display">
            <button><a href="crud.php">Add Seed</a></button>

            <button><a href="company_orders.php">Current Orders</a></button>
            <br><br>

            <input type="text" id="seed_code" onkeyup="seed_code_search()" placeholder="Search for seed code.." title="Type in Seed Code">
            <br><br>
            <table id="Seed_Table">
                <thead>
                    <tr>
                        <th>Type of seed</th>
                        <th>Variety of seed</th>
                        <th>Seed Code</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $company_id = $_SESSION['user_id'];

                    $sql = "Select * from products where company_id = $company_id";


                    $result = mysqli_query($con, $sql);
                    if ($result)
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $Number =  $row['id'];
                                $TypeofSeed =  $row['Type_of_Seed'];
                                $VarietyofSeed =  $row['Variety_of_Seed'];
                                $SeedCode =  $row['Seed_Code'];

                                echo '<tr> 
                    <td>' . $TypeofSeed . '</td>
                    <td>' . $VarietyofSeed . '</td>
                    <td>' . $SeedCode . '</td>

                <td>
                <button><a href="update.php? updateid=' . $Number . '"> Update</a></button>
                <button><a href="delete.php? deleteid=' . $Number . '">Delete</a></button>
                
                </td>
                </tr>';
                            }
                        }


                    ?>

                </tbody>

            </table>
            <br><br>

            <button><a href="logout.php">Logout</a></button>
        </div>
        <script>
            function seed_code_search() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("seed_code");
                filter = input.value.toUpperCase();
                table = document.getElementById("Seed_Table");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[2];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
        <div class="main-footer">
            <span>
                Powered by Ndegwa 2022
            </span>
        </div>
    </body>

</center>

</html>