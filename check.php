<?php
ob_start();
session_start();

$uid="a1073317";
$upwd="12345";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
    $_SESSION["login"]="S";
    $_SESSION["ID"]=$id;
    header('Location:catalog.php');
}
else{
    $_SESSION["login"]="F";
    header('Location:login.php');
}
?>