<?php
session_start();

if (isset($_SESSION["ID"])) 
{
    $id = $_SESSION["ID"];
    $name = $_SESSION["Name"];
    $price = $_SESSION["Price"];
    $number = $_SESSION["number"];   

    setcookie($id."[ID]", $id, time()+3600);
    setcookie($id."[Name]", $name, time()+3600);
    setcookie($id."[Price]", $price, time()+3600);
    setcookie($id."[number]", $number, time()+3600);
 }

header("location:cart.php");
?>