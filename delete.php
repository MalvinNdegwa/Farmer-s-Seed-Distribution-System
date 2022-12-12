<?php
include 'connectcrud.php';

if (isset ($_GET ['deleteid'])){

    $Number=$_GET['deleteid'];

    $sql="delete from products where id= $Number";
    $result = mysqli_query($con,$sql);
    if ($result){
       // echo "Deleted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

