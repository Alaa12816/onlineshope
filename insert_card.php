<?php
include('config.php');
if(isset($_POST['add'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $insert = "INSERT INTO adcard(name, price) VALUES ('$NAME','$PRICE')";
    mysqli_query($con,$insert);
    header('location: card.php');
}
?>