<?php
session_start();
include 'connectcrud.php';


if (isset ($_GET ['updateid'])){
    $Number = $_GET['updateid'];

    $sql = "update orders set DeliveryStatus= 1 where id='$Number'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Updated successfully";
        header('location:farmerlog.php');
    } else {
        die(mysqli_error($con));
    }
}
